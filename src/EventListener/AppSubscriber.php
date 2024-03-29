<?php
namespace App\EventListener;

use EasyCorp\Bundle\EasyAdminBundle\Event\EasyAdminEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\EventDispatcher\GenericEvent;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\RequestStack;

class AppSubscriber implements EventSubscriberInterface
{
    private $authorization;
    private $requestStack;
    private $config;

    /**
     * AppSubscriber constructor.
     *
     * @param ContainerInterface $container
     * @param RequestStack $requestStack
     */
    public function __construct(ContainerInterface $container, RequestStack $requestStack)
    {
        $this->authorization = $container->get('security.authorization_checker');
        $this->requestStack = $requestStack;
        $this->config = $container->get('easyadmin.config.manager')->getBackendConfig();
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        // return the subscribed events, their methods and priorities
        return array(
            EasyAdminEvents::PRE_NEW => 'checkUserRights',
            EasyAdminEvents::PRE_LIST => 'checkUserRights',
            EasyAdminEvents::PRE_EDIT => 'checkUserRights',
            EasyAdminEvents::PRE_SHOW => 'checkUserRights',
            EasyAdminEvents::PRE_DELETE => 'checkUserRights',
        );
     }

    /**
     * show an error if user is not superadmin and tries to manage restricted stuff
     *
     * @param GenericEvent $event event
     * @return null
     * @throws AccessDeniedException
     */
    public function checkUserRights(GenericEvent $event)
    {
        // if super admin, allow all
        $request = $this->requestStack->getCurrentRequest()->query;
        if ($this->authorization->isGranted('ROLE_SUPER_ADMIN')) {
            return;
        }
        
        $entity = $request->get('entity');
        $action = $request->get('action');

        $config = $this->config;
        // check for permission for each action
        foreach ($config['entities'] as $k => $v) {
            if ($v[$action]) {
                if ($entity == $k && !$this->authorization->isGranted($v[$action]['role'])) {
                    throw new AccessDeniedException();
                }
            }
        }
    }
}
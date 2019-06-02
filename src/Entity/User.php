<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @ORM\Table(name="fos_users")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;
    
    protected $choiceroles;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Personnel", inversedBy="user", cascade={"persist", "remove"})
     */
    private $personnel;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Set choiceroles
     * @param string $choiceroles
     * @return User
     */
    public function setChoiceroles($choiceroles)
    {
        foreach ($this->getRoles() as $role) {
            $this->removeRole($role);
        }
        
        $this->addRole($choiceroles);

        return $this;
    }

    /**
     * Get choiceroles
     * @return string
     */
    public function getChoiceroles()
    {
        return $this->getRoles()[0];
    }

    public function getPersonnel(): ?Personnel
    {
        return $this->personnel;
    }

    public function setPersonnel(?Personnel $personnel): self
    {
        $this->personnel = $personnel;

        return $this;
    }
}

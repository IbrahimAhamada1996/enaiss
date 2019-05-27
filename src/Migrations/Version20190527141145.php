<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190527141145 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE commune ADD lieu_travail_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE commune ADD CONSTRAINT FK_E2E2D1EEBB943F1D FOREIGN KEY (lieu_travail_id) REFERENCES lieu_travail (id)');
        $this->addSql('CREATE INDEX IDX_E2E2D1EEBB943F1D ON commune (lieu_travail_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE commune DROP FOREIGN KEY FK_E2E2D1EEBB943F1D');
        $this->addSql('DROP INDEX IDX_E2E2D1EEBB943F1D ON commune');
        $this->addSql('ALTER TABLE commune DROP lieu_travail_id');
    }
}

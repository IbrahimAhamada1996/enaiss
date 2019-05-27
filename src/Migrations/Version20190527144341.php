<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190527144341 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE commune DROP FOREIGN KEY FK_E2E2D1EEBB943F1D');
        $this->addSql('DROP TABLE commune');
        $this->addSql('DROP TABLE lieu_travail');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE commune (id INT AUTO_INCREMENT NOT NULL, lieu_travail_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ile VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, INDEX IDX_E2E2D1EEBB943F1D (lieu_travail_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE lieu_travail (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, adress VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, telephone VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, email VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE commune ADD CONSTRAINT FK_E2E2D1EEBB943F1D FOREIGN KEY (lieu_travail_id) REFERENCES lieu_travail (id)');
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190531114438 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE commune (id INT AUTO_INCREMENT NOT NULL, lieu_id INT NOT NULL, nom VARCHAR(255) NOT NULL, ile VARCHAR(255) NOT NULL, INDEX IDX_E2E2D1EE6AB213CC (lieu_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE declaration_naiss (id INT AUTO_INCREMENT NOT NULL, personnel_id INT NOT NULL, sousigne VARCHAR(255) DEFAULT NULL, nomme VARCHAR(255) NOT NULL, epouse VARCHAR(255) NOT NULL, age_mere INT NOT NULL, profession VARCHAR(255) NOT NULL, adress VARCHAR(255) NOT NULL, date_naiss DATE NOT NULL, date_heure_accouch DATETIME NOT NULL, sexe_enfant VARCHAR(255) NOT NULL, nom_enfant VARCHAR(255) NOT NULL, prenom_enfant VARCHAR(255) NOT NULL, date_decla DATE NOT NULL, lieu_declare VARCHAR(255) NOT NULL, INDEX IDX_FA473BFD1C109075 (personnel_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lieu (id INT AUTO_INCREMENT NOT NULL, personnel_id INT NOT NULL, nom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, INDEX IDX_2F577D591C109075 (personnel_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commune ADD CONSTRAINT FK_E2E2D1EE6AB213CC FOREIGN KEY (lieu_id) REFERENCES lieu (id)');
        $this->addSql('ALTER TABLE declaration_naiss ADD CONSTRAINT FK_FA473BFD1C109075 FOREIGN KEY (personnel_id) REFERENCES personnel (id)');
        $this->addSql('ALTER TABLE lieu ADD CONSTRAINT FK_2F577D591C109075 FOREIGN KEY (personnel_id) REFERENCES personnel (id)');
        $this->addSql('ALTER TABLE personnel ADD utilisateurs_id INT NOT NULL');
        $this->addSql('ALTER TABLE personnel ADD CONSTRAINT FK_A6BCF3DE1E969C5 FOREIGN KEY (utilisateurs_id) REFERENCES utilisateur (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_A6BCF3DE1E969C5 ON personnel (utilisateurs_id)');
        $this->addSql('ALTER TABLE statue ADD personnel_id INT NOT NULL');
        $this->addSql('ALTER TABLE statue ADD CONSTRAINT FK_8FD4D04D1C109075 FOREIGN KEY (personnel_id) REFERENCES personnel (id)');
        $this->addSql('CREATE INDEX IDX_8FD4D04D1C109075 ON statue (personnel_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE commune DROP FOREIGN KEY FK_E2E2D1EE6AB213CC');
        $this->addSql('DROP TABLE commune');
        $this->addSql('DROP TABLE declaration_naiss');
        $this->addSql('DROP TABLE lieu');
        $this->addSql('ALTER TABLE personnel DROP FOREIGN KEY FK_A6BCF3DE1E969C5');
        $this->addSql('DROP INDEX UNIQ_A6BCF3DE1E969C5 ON personnel');
        $this->addSql('ALTER TABLE personnel DROP utilisateurs_id');
        $this->addSql('ALTER TABLE statue DROP FOREIGN KEY FK_8FD4D04D1C109075');
        $this->addSql('DROP INDEX IDX_8FD4D04D1C109075 ON statue');
        $this->addSql('ALTER TABLE statue DROP personnel_id');
    }
}

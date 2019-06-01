<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190601113034 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE enaiss_communes (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, ile VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE enaiss_declarationNaisss (id INT AUTO_INCREMENT NOT NULL, personnel_id INT NOT NULL, sousigne VARCHAR(255) DEFAULT NULL, nomme VARCHAR(255) NOT NULL, epouse VARCHAR(255) NOT NULL, age_mere INT NOT NULL, profession VARCHAR(255) NOT NULL, adress VARCHAR(255) NOT NULL, date_naiss DATE NOT NULL, date_heure_accouch DATETIME NOT NULL, sexe_enfant VARCHAR(255) NOT NULL, nom_enfant VARCHAR(255) NOT NULL, prenom_enfant VARCHAR(255) NOT NULL, date_decla DATE NOT NULL, lieu_declare VARCHAR(255) NOT NULL, INDEX IDX_81991DFD1C109075 (personnel_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE enaiss_lieuTravails (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, lephone VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE enaiss_personnels (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE enaiss_statues (id INT AUTO_INCREMENT NOT NULL, personnel_id INT NOT NULL, nom VARCHAR(255) NOT NULL, INDEX IDX_63681FDE1C109075 (personnel_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE enaiss_declarationNaisss ADD CONSTRAINT FK_81991DFD1C109075 FOREIGN KEY (personnel_id) REFERENCES enaiss_personnels (id)');
        $this->addSql('ALTER TABLE enaiss_statues ADD CONSTRAINT FK_63681FDE1C109075 FOREIGN KEY (personnel_id) REFERENCES enaiss_personnels (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE enaiss_declarationNaisss DROP FOREIGN KEY FK_81991DFD1C109075');
        $this->addSql('ALTER TABLE enaiss_statues DROP FOREIGN KEY FK_63681FDE1C109075');
        $this->addSql('DROP TABLE enaiss_communes');
        $this->addSql('DROP TABLE enaiss_declarationNaisss');
        $this->addSql('DROP TABLE enaiss_lieuTravails');
        $this->addSql('DROP TABLE enaiss_personnels');
        $this->addSql('DROP TABLE enaiss_statues');
    }
}

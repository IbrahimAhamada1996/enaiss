<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190526135811 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE personnel (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE statue (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE agent_economie');
        $this->addSql('DROP TABLE agent_prefecture');
        $this->addSql('DROP TABLE declaration_naiss');
        $this->addSql('DROP TABLE directeur_hopital');
        $this->addSql('DROP TABLE directeur_prefecture');
        $this->addSql('DROP TABLE extrait');
        $this->addSql('DROP TABLE hopital');
        $this->addSql('DROP TABLE prefecture');
        $this->addSql('DROP TABLE sage_femme');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE agent_economie (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL COLLATE utf8mb4_unicode_ci, prenom VARCHAR(50) NOT NULL COLLATE utf8mb4_unicode_ci, telephone VARCHAR(20) NOT NULL COLLATE utf8mb4_unicode_ci, email VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE agent_prefecture (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL COLLATE utf8mb4_unicode_ci, prenom VARCHAR(50) NOT NULL COLLATE utf8mb4_unicode_ci, telephone VARCHAR(20) NOT NULL COLLATE utf8mb4_unicode_ci, email VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE declaration_naiss (id INT AUTO_INCREMENT NOT NULL, sousigne VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, nomme VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, epouse VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, age_mere INT NOT NULL, profession VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, adress VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, date_naiss DATE NOT NULL, nom_prefecture VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, date_accouch DATE NOT NULL, heure_accouch TIME NOT NULL, sexe_enfant VARCHAR(2) NOT NULL COLLATE utf8mb4_unicode_ci, nom_enfant VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, prenom_enfant VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, date_decla DATE NOT NULL, lieu_declare VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE directeur_hopital (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL COLLATE utf8mb4_unicode_ci, prenom VARCHAR(50) NOT NULL COLLATE utf8mb4_unicode_ci, telephone VARCHAR(20) NOT NULL COLLATE utf8mb4_unicode_ci, email VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE directeur_prefecture (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, prenom VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, telephone VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, email VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE extrait (id INT AUTO_INCREMENT NOT NULL, date_naiss DATE NOT NULL, lieu_naiss VARCHAR(70) NOT NULL COLLATE utf8mb4_unicode_ci, heure_naiss TIME NOT NULL, minute_naiss TIME NOT NULL, nom_enfant VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, sexe_enfant VARCHAR(2) NOT NULL COLLATE utf8mb4_unicode_ci, nom_pere VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, date_naiss_pere DATE NOT NULL, adress_naiss_pere VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, profession_pere VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ville_pere VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, nom_mere VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, date_naiss_mere DATE NOT NULL, adress_naiss_mere VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, profession_mere VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ville_mere VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, mention_marginal LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, prefecture VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE hopital (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, adress VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, telephone VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE prefecture (id INT AUTO_INCREMENT NOT NULL, adress VARCHAR(50) NOT NULL COLLATE utf8mb4_unicode_ci, email VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, telephone VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE sage_femme (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, prenom VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, adress VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, email VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, telephone VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE personnel');
        $this->addSql('DROP TABLE statue');
        $this->addSql('DROP TABLE utilisateur');
    }
}

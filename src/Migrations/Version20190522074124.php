<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190522074124 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE extrait (id INT AUTO_INCREMENT NOT NULL, date_naiss DATE NOT NULL, lieu_naiss VARCHAR(70) NOT NULL, heure_naiss TIME NOT NULL, minute_naiss TIME NOT NULL, nom_enfant VARCHAR(255) NOT NULL, sexe_enfant VARCHAR(2) NOT NULL, nom_pere VARCHAR(255) NOT NULL, date_naiss_pere DATE NOT NULL, adress_naiss_pere VARCHAR(255) NOT NULL, profession_pere VARCHAR(255) NOT NULL, ville_pere VARCHAR(255) NOT NULL, nom_mere VARCHAR(255) NOT NULL, date_naiss_mere DATE NOT NULL, adress_naiss_mere VARCHAR(255) NOT NULL, profession_mere VARCHAR(255) NOT NULL, ville_mere VARCHAR(255) NOT NULL, mention_marginal LONGTEXT NOT NULL, prefecture VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE extrait');
    }
}

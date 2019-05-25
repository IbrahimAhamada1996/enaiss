<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190525112350 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE extrait');
        $this->addSql('ALTER TABLE declaration_naiss ADD date_heure_accouch DATETIME NOT NULL, DROP nom_prefecture, DROP date_accouch, DROP heure_accouch');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE extrait (id INT AUTO_INCREMENT NOT NULL, date_naiss DATE NOT NULL, lieu_naiss VARCHAR(70) NOT NULL COLLATE utf8mb4_unicode_ci, heure_naiss TIME NOT NULL, minute_naiss TIME NOT NULL, nom_enfant VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, sexe_enfant VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, nom_pere VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, date_naiss_pere DATE NOT NULL, adress_naiss_pere VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, profession_pere VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ville_pere VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, nom_mere VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, date_naiss_mere DATE NOT NULL, adress_naiss_mere VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, profession_mere VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ville_mere VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, mention_marginal LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, prefecture VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE declaration_naiss ADD nom_prefecture VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD date_accouch DATE NOT NULL, ADD heure_accouch TIME NOT NULL, DROP date_heure_accouch');
    }
}

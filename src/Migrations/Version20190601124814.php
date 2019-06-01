<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190601124814 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE enaiss_lieutravails ADD commune_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE enaiss_lieutravails ADD CONSTRAINT FK_9E068EFB131A4F72 FOREIGN KEY (commune_id) REFERENCES enaiss_communes (id)');
        $this->addSql('CREATE INDEX IDX_9E068EFB131A4F72 ON enaiss_lieutravails (commune_id)');
        $this->addSql('ALTER TABLE enaiss_personnels ADD status_id INT DEFAULT NULL, ADD lieu_id INT DEFAULT NULL, ADD declaration_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE enaiss_personnels ADD CONSTRAINT FK_A8CC51806BF700BD FOREIGN KEY (status_id) REFERENCES enaiss_statues (id)');
        $this->addSql('ALTER TABLE enaiss_personnels ADD CONSTRAINT FK_A8CC51806AB213CC FOREIGN KEY (lieu_id) REFERENCES enaiss_lieuTravails (id)');
        $this->addSql('ALTER TABLE enaiss_personnels ADD CONSTRAINT FK_A8CC5180C06258A3 FOREIGN KEY (declaration_id) REFERENCES enaiss_declarationNaisss (id)');
        $this->addSql('CREATE INDEX IDX_A8CC51806BF700BD ON enaiss_personnels (status_id)');
        $this->addSql('CREATE INDEX IDX_A8CC51806AB213CC ON enaiss_personnels (lieu_id)');
        $this->addSql('CREATE INDEX IDX_A8CC5180C06258A3 ON enaiss_personnels (declaration_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE enaiss_lieuTravails DROP FOREIGN KEY FK_9E068EFB131A4F72');
        $this->addSql('DROP INDEX IDX_9E068EFB131A4F72 ON enaiss_lieuTravails');
        $this->addSql('ALTER TABLE enaiss_lieuTravails DROP commune_id');
        $this->addSql('ALTER TABLE enaiss_personnels DROP FOREIGN KEY FK_A8CC51806BF700BD');
        $this->addSql('ALTER TABLE enaiss_personnels DROP FOREIGN KEY FK_A8CC51806AB213CC');
        $this->addSql('ALTER TABLE enaiss_personnels DROP FOREIGN KEY FK_A8CC5180C06258A3');
        $this->addSql('DROP INDEX IDX_A8CC51806BF700BD ON enaiss_personnels');
        $this->addSql('DROP INDEX IDX_A8CC51806AB213CC ON enaiss_personnels');
        $this->addSql('DROP INDEX IDX_A8CC5180C06258A3 ON enaiss_personnels');
        $this->addSql('ALTER TABLE enaiss_personnels DROP status_id, DROP lieu_id, DROP declaration_id');
    }
}

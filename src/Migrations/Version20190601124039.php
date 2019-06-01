<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190601124039 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE enaiss_declarationnaisss DROP FOREIGN KEY FK_81991DFD1C109075');
        $this->addSql('DROP INDEX IDX_81991DFD1C109075 ON enaiss_declarationnaisss');
        $this->addSql('ALTER TABLE enaiss_declarationnaisss DROP personnel_id');
        $this->addSql('ALTER TABLE enaiss_lieutravails CHANGE lephone telephone VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE enaiss_statues DROP FOREIGN KEY FK_63681FDE1C109075');
        $this->addSql('DROP INDEX IDX_63681FDE1C109075 ON enaiss_statues');
        $this->addSql('ALTER TABLE enaiss_statues DROP personnel_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE enaiss_declarationNaisss ADD personnel_id INT NOT NULL');
        $this->addSql('ALTER TABLE enaiss_declarationNaisss ADD CONSTRAINT FK_81991DFD1C109075 FOREIGN KEY (personnel_id) REFERENCES enaiss_personnels (id)');
        $this->addSql('CREATE INDEX IDX_81991DFD1C109075 ON enaiss_declarationNaisss (personnel_id)');
        $this->addSql('ALTER TABLE enaiss_lieuTravails CHANGE telephone lephone VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE enaiss_statues ADD personnel_id INT NOT NULL');
        $this->addSql('ALTER TABLE enaiss_statues ADD CONSTRAINT FK_63681FDE1C109075 FOREIGN KEY (personnel_id) REFERENCES enaiss_personnels (id)');
        $this->addSql('CREATE INDEX IDX_63681FDE1C109075 ON enaiss_statues (personnel_id)');
    }
}

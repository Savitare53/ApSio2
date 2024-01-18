<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240118083902 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE CLIENT CHANGE NUMCLIENT NUMCLIENT SMALLINT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE COMMANDER RENAME INDEX i_fk_commander_client TO IDX_42D318BA4E3D4750');
        $this->addSql('ALTER TABLE COMMANDER RENAME INDEX i_fk_commander_organes TO IDX_42D318BA40BE2330');
        $this->addSql('ALTER TABLE ORGANES CHANGE IDORGANE IDORGANE SMALLINT AUTO_INCREMENT NOT NULL, CHANGE IDTYPE IDTYPE INT DEFAULT NULL, CHANGE NUMENTREPRISE NUMENTREPRISE CHAR(32) DEFAULT NULL');
        $this->addSql('ALTER TABLE TYPEORGANE CHANGE IDTYPE IDTYPE INT AUTO_INCREMENT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ORGANES CHANGE IDORGANE IDORGANE SMALLINT NOT NULL, CHANGE NUMENTREPRISE NUMENTREPRISE CHAR(32) NOT NULL, CHANGE IDTYPE IDTYPE INT NOT NULL');
        $this->addSql('ALTER TABLE commander RENAME INDEX idx_42d318ba4e3d4750 TO I_FK_COMMANDER_CLIENT');
        $this->addSql('ALTER TABLE commander RENAME INDEX idx_42d318ba40be2330 TO I_FK_COMMANDER_ORGANES');
        $this->addSql('ALTER TABLE CLIENT CHANGE NUMCLIENT NUMCLIENT SMALLINT NOT NULL');
        $this->addSql('ALTER TABLE TYPEORGANE CHANGE IDTYPE IDTYPE INT NOT NULL');
    }
}

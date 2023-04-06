<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230405073416 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE dossier ADD dossier_nom VARCHAR(255) NOT NULL, ADD visible TINYINT(1) NOT NULL, ADD date_prog DATETIME NOT NULL, ADD unilasalle TINYINT(1) NOT NULL, ADD code VARCHAR(255) DEFAULT NULL, DROP dossier, DROP sous_dossier');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE dossier ADD sous_dossier VARCHAR(255) NOT NULL, DROP visible, DROP date_prog, DROP unilasalle, DROP code, CHANGE dossier_nom dossier VARCHAR(255) NOT NULL');
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230405105250 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categorie (id INT AUTO_INCREMENT NOT NULL, nom_categorie VARCHAR(255) NOT NULL, unilasalle TINYINT(1) NOT NULL, code VARCHAR(255) DEFAULT NULL, date DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE dossier ADD categorie_id INT NOT NULL, DROP categorie, DROP dossier_nom, DROP visible, DROP date_prog, DROP unilasalle, DROP code');
        $this->addSql('ALTER TABLE dossier ADD CONSTRAINT FK_3D48E037BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id)');
        $this->addSql('CREATE INDEX IDX_3D48E037BCF5E72D ON dossier (categorie_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE dossier DROP FOREIGN KEY FK_3D48E037BCF5E72D');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP INDEX IDX_3D48E037BCF5E72D ON dossier');
        $this->addSql('ALTER TABLE dossier ADD categorie VARCHAR(255) NOT NULL, ADD dossier_nom VARCHAR(255) NOT NULL, ADD visible TINYINT(1) NOT NULL, ADD date_prog DATETIME NOT NULL, ADD unilasalle TINYINT(1) NOT NULL, ADD code VARCHAR(255) DEFAULT NULL, DROP categorie_id');
    }
}

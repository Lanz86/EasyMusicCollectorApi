<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200219190946 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('CREATE TABLE album (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(500) NOT NULL, cover VARCHAR(2048) DEFAULT NULL, year INTEGER DEFAULT NULL, type INTEGER DEFAULT NULL, support INTEGER DEFAULT NULL)');
        $this->addSql('CREATE TABLE album_artist (album_id INTEGER NOT NULL, artist_id INTEGER NOT NULL, PRIMARY KEY(album_id, artist_id))');
        $this->addSql('CREATE INDEX IDX_D322AB301137ABCF ON album_artist (album_id)');
        $this->addSql('CREATE INDEX IDX_D322AB30B7970CF8 ON album_artist (artist_id)');
        $this->addSql('CREATE TABLE album_genere (album_id INTEGER NOT NULL, genere_id INTEGER NOT NULL, PRIMARY KEY(album_id, genere_id))');
        $this->addSql('CREATE INDEX IDX_92AE5C931137ABCF ON album_genere (album_id)');
        $this->addSql('CREATE INDEX IDX_92AE5C93D35A57F1 ON album_genere (genere_id)');
        $this->addSql('CREATE TABLE genere (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE TABLE label (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE TABLE track (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, album_id INTEGER DEFAULT NULL, number INTEGER DEFAULT NULL, title VARCHAR(500) NOT NULL, time INTEGER DEFAULT NULL)');
        $this->addSql('CREATE INDEX IDX_D6E3F8A61137ABCF ON track (album_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('DROP TABLE album');
        $this->addSql('DROP TABLE album_artist');
        $this->addSql('DROP TABLE album_genere');
        $this->addSql('DROP TABLE genere');
        $this->addSql('DROP TABLE label');
        $this->addSql('DROP TABLE track');
    }
}

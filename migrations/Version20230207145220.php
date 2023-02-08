<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230207145220 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comentarios ADD usuario_id INT NOT NULL');
        $this->addSql('ALTER TABLE comentarios ADD CONSTRAINT FK_F54B3FC0DB38439E FOREIGN KEY (usuario_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_F54B3FC0DB38439E ON comentarios (usuario_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comentarios DROP FOREIGN KEY FK_F54B3FC0DB38439E');
        $this->addSql('DROP INDEX IDX_F54B3FC0DB38439E ON comentarios');
        $this->addSql('ALTER TABLE comentarios DROP usuario_id');
    }
}

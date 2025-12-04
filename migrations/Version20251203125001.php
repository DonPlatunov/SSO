<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251203125001 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cena_produktu ADD cena_produktu_id VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE cena_produktu DROP waluta_id');
        $this->addSql('ALTER TABLE uzytkownicy ALTER usertype DROP NOT NULL');
        $this->addSql('ALTER TABLE zamowienia ADD klient_id INT NOT NULL');
        $this->addSql('ALTER TABLE zamowienia ALTER dostarczono SET NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cena_produktu ADD waluta_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE cena_produktu DROP cena_produktu_id');
        $this->addSql('ALTER TABLE uzytkownicy ALTER usertype SET NOT NULL');
        $this->addSql('ALTER TABLE zamowienia DROP klient_id');
        $this->addSql('ALTER TABLE zamowienia ALTER dostarczono DROP NOT NULL');
    }
}

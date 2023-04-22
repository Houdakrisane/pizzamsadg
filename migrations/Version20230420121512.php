<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230420121512 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE brguer (id INT AUTO_INCREMENT NOT NULL, nom_brguer VARCHAR(255) NOT NULL, image_brguer VARCHAR(255) NOT NULL, propriter VARCHAR(150) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE glace (id INT AUTO_INCREMENT NOT NULL, nom_glace VARCHAR(100) NOT NULL, prix VARCHAR(100) NOT NULL, image VARCHAR(150) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE menu (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE panine (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(100) NOT NULL, prix VARCHAR(100) NOT NULL, proprite VARCHAR(150) NOT NULL, image VARCHAR(150) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pizza (id INT AUTO_INCREMENT NOT NULL, nom_pizza VARCHAR(100) NOT NULL, prix VARCHAR(100) NOT NULL, image_pizza VARCHAR(255) NOT NULL, proprite VARCHAR(150) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE salade (id INT AUTO_INCREMENT NOT NULL, nom_salade VARCHAR(100) NOT NULL, prix_salade VARCHAR(255) NOT NULL, image_salade VARCHAR(255) NOT NULL, proprite VARCHAR(150) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sandwitch (id INT AUTO_INCREMENT NOT NULL, nom_sandwitch VARCHAR(100) NOT NULL, prixsan VARCHAR(100) NOT NULL, imag_sandwitch VARCHAR(150) NOT NULL, propriter VARCHAR(150) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tacoss (id INT AUTO_INCREMENT NOT NULL, nom_tacoss VARCHAR(100) NOT NULL, prixtacoss VARCHAR(100) NOT NULL, imag_tacoss VARCHAR(255) NOT NULL, propriter VARCHAR(150) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tex_mix (id INT AUTO_INCREMENT NOT NULL, nomtex VARCHAR(100) NOT NULL, prix VARCHAR(100) NOT NULL, propriter VARCHAR(150) NOT NULL, image VARCHAR(150) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE brguer');
        $this->addSql('DROP TABLE glace');
        $this->addSql('DROP TABLE menu');
        $this->addSql('DROP TABLE panine');
        $this->addSql('DROP TABLE pizza');
        $this->addSql('DROP TABLE salade');
        $this->addSql('DROP TABLE sandwitch');
        $this->addSql('DROP TABLE tacoss');
        $this->addSql('DROP TABLE tex_mix');
        $this->addSql('DROP TABLE messenger_messages');
    }
}

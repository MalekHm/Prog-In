<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210328105323 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE activity (id INT AUTO_INCREMENT NOT NULL, category_id INT DEFAULT NULL, title_activity VARCHAR(255) NOT NULL, adress_activity VARCHAR(255) NOT NULL, description_activity VARCHAR(255) NOT NULL, price_activity DOUBLE PRECISION NOT NULL, likes INT NOT NULL, INDEX IDX_AC74095A12469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `admin` (id INT AUTO_INCREMENT NOT NULL, first_name_admin VARCHAR(255) NOT NULL, last_name_admin VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, birthday VARCHAR(255) NOT NULL, picture VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE blog (id INT AUTO_INCREMENT NOT NULL, community_id INT NOT NULL, id_admin_id INT NOT NULL, title VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, image1 VARCHAR(255) DEFAULT NULL, dateAjout DATETIME NOT NULL, INDEX IDX_C0155143FDA7B0BF (community_id), INDEX IDX_C015514334F06E85 (id_admin_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE blog_user (blog_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_6D435AD9DAE07E97 (blog_id), INDEX IDX_6D435AD9A76ED395 (user_id), PRIMARY KEY(blog_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE dislikes (blog_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_2DF3BE11DAE07E97 (blog_id), INDEX IDX_2DF3BE11A76ED395 (user_id), PRIMARY KEY(blog_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Favouris (blog_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_17AF41EADAE07E97 (blog_id), INDEX IDX_17AF41EAA76ED395 (user_id), PRIMARY KEY(blog_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categoryactivity (id INT AUTO_INCREMENT NOT NULL, name_category_activity VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE comment (id INT AUTO_INCREMENT NOT NULL, commentdate DATE NOT NULL, content LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE comment_article (id INT AUTO_INCREMENT NOT NULL, blogs_id INT DEFAULT NULL, user_id INT DEFAULT NULL, contenu LONGTEXT NOT NULL, date DATE NOT NULL, INDEX IDX_F1496C7689C05BBC (blogs_id), INDEX IDX_F1496C76A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE community (id INT AUTO_INCREMENT NOT NULL, id_admin_id INT NOT NULL, grp_name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, phone INT NOT NULL, description LONGTEXT NOT NULL, INDEX IDX_1B60403334F06E85 (id_admin_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE event (id INT AUTO_INCREMENT NOT NULL, id_admin_id INT NOT NULL, title_event VARCHAR(255) NOT NULL, description_event LONGTEXT NOT NULL, start_date_event VARCHAR(255) NOT NULL, end_date_event VARCHAR(255) NOT NULL, nb_persons INT NOT NULL, price_event DOUBLE PRECISION NOT NULL, INDEX IDX_3BAE0AA734F06E85 (id_admin_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE image (id INT AUTO_INCREMENT NOT NULL, id_admin_id INT NOT NULL, link_image VARCHAR(255) NOT NULL, category_image VARCHAR(255) NOT NULL, INDEX IDX_C53D045F34F06E85 (id_admin_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE place (id INT AUTO_INCREMENT NOT NULL, id_admin_id INT NOT NULL, title_place VARCHAR(255) NOT NULL, category_place VARCHAR(255) NOT NULL, description_place LONGTEXT NOT NULL, picture_place VARCHAR(255) NOT NULL, location_place VARCHAR(255) NOT NULL, INDEX IDX_741D53CD34F06E85 (id_admin_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE product (id INT AUTO_INCREMENT NOT NULL, id_admin_id INT NOT NULL, name_product VARCHAR(255) NOT NULL, description_product LONGTEXT NOT NULL, category_product VARCHAR(255) NOT NULL, price_product DOUBLE PRECISION NOT NULL, INDEX IDX_D34A04AD34F06E85 (id_admin_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE promotion (id INT AUTO_INCREMENT NOT NULL, idadmin_id INT NOT NULL, descriptionpromotion LONGTEXT NOT NULL, start_date_promotion VARCHAR(255) NOT NULL, end_date_promotion VARCHAR(255) NOT NULL, pourcentage DOUBLE PRECISION NOT NULL, INDEX IDX_C11D7DD1CEFECA1D (idadmin_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE publicity (id INT AUTO_INCREMENT NOT NULL, id_admin_id INT NOT NULL, start_date_pub VARCHAR(255) NOT NULL, end_date_pub VARCHAR(255) NOT NULL, description_pub LONGTEXT NOT NULL, picture_pub VARCHAR(255) NOT NULL, title_pub VARCHAR(255) NOT NULL, INDEX IDX_938127634F06E85 (id_admin_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation_event (id INT AUTO_INCREMENT NOT NULL, id_admin_id INT NOT NULL, id_client_id INT NOT NULL, reference_event VARCHAR(255) NOT NULL, nb_person_res INT NOT NULL, status_event VARCHAR(255) NOT NULL, INDEX IDX_78D1DA0034F06E85 (id_admin_id), INDEX IDX_78D1DA0099DED506 (id_client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation_product (id INT AUTO_INCREMENT NOT NULL, idadmin_id INT NOT NULL, idclient_id INT NOT NULL, reference_pro VARCHAR(255) NOT NULL, quantity INT NOT NULL, status_product VARCHAR(255) NOT NULL, INDEX IDX_B4DFBF28CEFECA1D (idadmin_id), INDEX IDX_B4DFBF2867F0C0D4 (idclient_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, identity INT NOT NULL, birthday DATE NOT NULL, picture_user VARCHAR(255) NOT NULL, phone INT NOT NULL, role VARCHAR(255) NOT NULL, reset_token VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE activity ADD CONSTRAINT FK_AC74095A12469DE2 FOREIGN KEY (category_id) REFERENCES categoryactivity (id)');
        $this->addSql('ALTER TABLE blog ADD CONSTRAINT FK_C0155143FDA7B0BF FOREIGN KEY (community_id) REFERENCES community (id)');
        $this->addSql('ALTER TABLE blog ADD CONSTRAINT FK_C015514334F06E85 FOREIGN KEY (id_admin_id) REFERENCES `admin` (id)');
        $this->addSql('ALTER TABLE blog_user ADD CONSTRAINT FK_6D435AD9DAE07E97 FOREIGN KEY (blog_id) REFERENCES blog (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE blog_user ADD CONSTRAINT FK_6D435AD9A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE dislikes ADD CONSTRAINT FK_2DF3BE11DAE07E97 FOREIGN KEY (blog_id) REFERENCES blog (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE dislikes ADD CONSTRAINT FK_2DF3BE11A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE Favouris ADD CONSTRAINT FK_17AF41EADAE07E97 FOREIGN KEY (blog_id) REFERENCES blog (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE Favouris ADD CONSTRAINT FK_17AF41EAA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE comment_article ADD CONSTRAINT FK_F1496C7689C05BBC FOREIGN KEY (blogs_id) REFERENCES blog (id)');
        $this->addSql('ALTER TABLE comment_article ADD CONSTRAINT FK_F1496C76A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE community ADD CONSTRAINT FK_1B60403334F06E85 FOREIGN KEY (id_admin_id) REFERENCES `admin` (id)');
        $this->addSql('ALTER TABLE event ADD CONSTRAINT FK_3BAE0AA734F06E85 FOREIGN KEY (id_admin_id) REFERENCES `admin` (id)');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045F34F06E85 FOREIGN KEY (id_admin_id) REFERENCES `admin` (id)');
        $this->addSql('ALTER TABLE place ADD CONSTRAINT FK_741D53CD34F06E85 FOREIGN KEY (id_admin_id) REFERENCES `admin` (id)');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04AD34F06E85 FOREIGN KEY (id_admin_id) REFERENCES `admin` (id)');
        $this->addSql('ALTER TABLE promotion ADD CONSTRAINT FK_C11D7DD1CEFECA1D FOREIGN KEY (idadmin_id) REFERENCES `admin` (id)');
        $this->addSql('ALTER TABLE publicity ADD CONSTRAINT FK_938127634F06E85 FOREIGN KEY (id_admin_id) REFERENCES `admin` (id)');
        $this->addSql('ALTER TABLE reservation_event ADD CONSTRAINT FK_78D1DA0034F06E85 FOREIGN KEY (id_admin_id) REFERENCES `admin` (id)');
        $this->addSql('ALTER TABLE reservation_event ADD CONSTRAINT FK_78D1DA0099DED506 FOREIGN KEY (id_client_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE reservation_product ADD CONSTRAINT FK_B4DFBF28CEFECA1D FOREIGN KEY (idadmin_id) REFERENCES `admin` (id)');
        $this->addSql('ALTER TABLE reservation_product ADD CONSTRAINT FK_B4DFBF2867F0C0D4 FOREIGN KEY (idclient_id) REFERENCES user (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE blog DROP FOREIGN KEY FK_C015514334F06E85');
        $this->addSql('ALTER TABLE community DROP FOREIGN KEY FK_1B60403334F06E85');
        $this->addSql('ALTER TABLE event DROP FOREIGN KEY FK_3BAE0AA734F06E85');
        $this->addSql('ALTER TABLE image DROP FOREIGN KEY FK_C53D045F34F06E85');
        $this->addSql('ALTER TABLE place DROP FOREIGN KEY FK_741D53CD34F06E85');
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04AD34F06E85');
        $this->addSql('ALTER TABLE promotion DROP FOREIGN KEY FK_C11D7DD1CEFECA1D');
        $this->addSql('ALTER TABLE publicity DROP FOREIGN KEY FK_938127634F06E85');
        $this->addSql('ALTER TABLE reservation_event DROP FOREIGN KEY FK_78D1DA0034F06E85');
        $this->addSql('ALTER TABLE reservation_product DROP FOREIGN KEY FK_B4DFBF28CEFECA1D');
        $this->addSql('ALTER TABLE blog_user DROP FOREIGN KEY FK_6D435AD9DAE07E97');
        $this->addSql('ALTER TABLE dislikes DROP FOREIGN KEY FK_2DF3BE11DAE07E97');
        $this->addSql('ALTER TABLE Favouris DROP FOREIGN KEY FK_17AF41EADAE07E97');
        $this->addSql('ALTER TABLE comment_article DROP FOREIGN KEY FK_F1496C7689C05BBC');
        $this->addSql('ALTER TABLE activity DROP FOREIGN KEY FK_AC74095A12469DE2');
        $this->addSql('ALTER TABLE blog DROP FOREIGN KEY FK_C0155143FDA7B0BF');
        $this->addSql('ALTER TABLE blog_user DROP FOREIGN KEY FK_6D435AD9A76ED395');
        $this->addSql('ALTER TABLE dislikes DROP FOREIGN KEY FK_2DF3BE11A76ED395');
        $this->addSql('ALTER TABLE Favouris DROP FOREIGN KEY FK_17AF41EAA76ED395');
        $this->addSql('ALTER TABLE comment_article DROP FOREIGN KEY FK_F1496C76A76ED395');
        $this->addSql('ALTER TABLE reservation_event DROP FOREIGN KEY FK_78D1DA0099DED506');
        $this->addSql('ALTER TABLE reservation_product DROP FOREIGN KEY FK_B4DFBF2867F0C0D4');
        $this->addSql('DROP TABLE activity');
        $this->addSql('DROP TABLE `admin`');
        $this->addSql('DROP TABLE blog');
        $this->addSql('DROP TABLE blog_user');
        $this->addSql('DROP TABLE dislikes');
        $this->addSql('DROP TABLE Favouris');
        $this->addSql('DROP TABLE categoryactivity');
        $this->addSql('DROP TABLE comment');
        $this->addSql('DROP TABLE comment_article');
        $this->addSql('DROP TABLE community');
        $this->addSql('DROP TABLE event');
        $this->addSql('DROP TABLE image');
        $this->addSql('DROP TABLE place');
        $this->addSql('DROP TABLE product');
        $this->addSql('DROP TABLE promotion');
        $this->addSql('DROP TABLE publicity');
        $this->addSql('DROP TABLE reservation_event');
        $this->addSql('DROP TABLE reservation_product');
        $this->addSql('DROP TABLE user');
    }
}

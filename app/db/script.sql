-- Valentina Studio --
-- MySQL dump --
-- ---------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- ---------------------------------------------------------


-- CREATE TABLE "cp_user" ----------------------------------
CREATE TABLE `cp_user` (
	`id` Int( 11 ) NOT NULL,
	`name` VarChar( 50 ) NOT NULL,
	`user` VarChar( 30 ) NOT NULL,
	`email` VarChar( 60 ) NOT NULL,
	`password` VarChar( 100 ) NOT NULL,
	`category` Int( 2 ) NOT NULL,
	`reg_fec` Timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP )
COLLATE = utf8_spanish_ci
ENGINE = InnoDB;
-- ---------------------------------------------------------


-- Dump data of "cp_user" ----------------------------------
INSERT INTO `cp_user`(`id`,`name`,`user`,`email`,`password`,`category`,`reg_fec`)
VALUES ( '1', 'yosved villar', 'yvillarl', 'yvillarl@hot.com', '1234', '1', '2016-08-18 03:59:20' );
-- ---------------------------------------------------------


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- ---------------------------------------------------------

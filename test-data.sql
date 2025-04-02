DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` mediumint(8) unsigned NOT NULL auto_increment,
  `name` varchar(255) default NULL,
  `phone` varchar(100) default NULL,
  `email` varchar(255) default NULL,
  `address` varchar(255) default NULL,
  `postal_zip` varchar(10) default NULL,
  PRIMARY KEY (`id`)
) AUTO_INCREMENT=1;

INSERT INTO `users` (`name`,`phone`,`email`,`address`,`postal_zip`)
VALUES
  ("Vincent Hines","(610) 621-6883","consectetuer@aol.net","Ap #519-8258 Tristique St.","9483"),
  ("Raven Booth","(550) 158-8586","lacinia.orci@icloud.couk","867-4880 Diam St.","36-78"),
  ("Arden Guerra","1-533-754-5654","lectus.a.sollicitudin@icloud.edu","657-9517 Felis. Street","33714"),
  ("Melvin Wiley","1-844-652-1423","cras.interdum@outlook.couk","Ap #658-540 Eu, Ave","31743"),
  ("Alden Mcconnell","1-311-464-5966","fermentum.risus@protonmail.couk","P.O. Box 952, 9893 Magna. St.","7678");
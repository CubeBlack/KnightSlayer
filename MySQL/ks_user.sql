CREATE TABLE `ks_user` (
  `username` varchar(16) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(32) NOT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
);

INSERT INTO `ks_user` VALUES
  ('CupBlack','danie_nerd@hotmail.com','1','2017-04-28 18:09:07',1),
  ('asdf','asdf','asdf',NULL,9),
  ('Cogitari','edson.vit0r@hotmail.com','20101996yesman',NULL,10),
  ('Edson','edson.vit0r@hotmail.com','yesman20101996',NULL,6);

DROP TABLE IF EXISTS `ks_user`;
CREATE TABLE IF NOT EXISTS `ks_user` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `nick` text NOT NULL,
  `email` text NOT NULL,
  `senha` text NOT NULL,
  `poder` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `ks_user` (`id`, `nick`, `email`, `senha`,`poder`) VALUES (1, 'cubeblack', 'asdf@asdf', 'ragnarok13','3');
INSERT INTO `ks_user` (`id`, `nick`, `email`, `senha`,`poder`) VALUES (2, 'asdf', 'asdf@asdf', 'asdf','1');
INSERT INTO `ks_user` (`id`, `nick`, `email`, `senha`,`poder`) VALUES (3, 'qwer', 'asdf@asdf', 'qwer','1');
INSERT INTO `ks_user` (`id`, `nick`, `email`, `senha`,`poder`) VALUES (4, 'zxcv', 'asdf@asdf', 'zxcv','1');

DROP TABLE IF EXISTS `ks_post`;
CREATE TABLE IF NOT EXISTS `ks_post` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `de` int(11) NOT NULL,
  `para` int(11) NOT NULL,
  `msg` text NOT NULL,
  `tipo` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

INSERT INTO `ks_post` (`de`, `para`, `msg`, `tipo`) VALUES (0, 0, 'Post teste', 0);

DROP TABLE IF EXISTS `ks_jogo`;
CREATE TABLE IF NOT EXISTS `ks_jogo` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `player1` int(8) NOT NULL,
  `player2` int(8) NOT NULL,
  `tabuleiro` blob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `ks_jogo` (`player1`, `player2`, `tabuleiro`) VALUES ('21', '21', '{"player1":"","player2":"","situacoes":[{"vez":1,"acao":"Inicia-se o Jogo","pecas":{"1":{"tipo":"king-black","posicao":"a1"}}}]}');;


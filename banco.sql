CREATE TABLE IF NOT EXISTS `programadores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO `nome` (`id`, `nome`, `sobrenome`) VALUES
(1, ' Alan Mathison', 'Turing'),
(2, 'Linus', 'Torvalds'),
(3, 'Ken', 'Thompson'),
(4, 'Brian', 'Kernighan'),
(5, 'Bill', 'Gates'),
(6, 'John', 'Backus'),
(7, 'Grace', 'Hooper'),
(8, 'Bjarne', 'Stroustrup');
create database eletro;
CREATE TABLE `Produto` (
  `id` int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `preco` float(10) NOT NULL,
  `descricao` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `imagem` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

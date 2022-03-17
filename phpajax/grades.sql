CREATE DATABASE `R2`;
USE `R2`;

CREATE TABLE `grades` (
  `school_code` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `school_subject` varchar(100) NOT NULL,
  `first_grade` double NULL,
  `second_grade` double NULL,
  `third_grade` double NULL,
  `fourth_grade` double NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `grades` (`school_code`, `school_subject`, `first_grade`, `second_grade`, `third_grade`, `fourth_grade`) VALUES
(1, 'EMPREENDEDORISMO DIGITAL', 9.0, 10.0, 9.5, 9.2),
(2, 'ESPANHOL', 10.0, 8.5, 9.5, 10.0),
(3, 'FILOSOFIA IV', 10.0, 10.0, 10.0, 10.0),
(4, 'GESTAO E QUALIDADE DE SOFTWARE', 10.0, 10.0, 10.0, 10.0),
(5, 'GESTAO ORGANIZACIONAL E SEGURANCA DO TRABALHO', 10.0, 10.0, 10.0, 9.2),
(6, 'LINGUA INGLESA 3', 9.8, 9.6, 7.2, 10.0),
(7, 'LINGUA PORTUGUESA IV', 6.7, 10.0, 10.0, 10.0),
(8, 'PROGRAMACAO MOVEL', 9.0, 10.0, 10.0, NULL),
(9, 'PROGRAMACAO WEB II', 8.2, 9.0, 7.5, 3.5),
(10, 'PROJETO E INFRAESTRUTURA DE REDES', 9.0, 9.5, 10.0, NULL),
(11, 'SERVICOS DE REDES', 9.0, 9.5, 10.0, NULL),
(12, 'SOCIOLOGIA IV', 9.0, 8.5, 8.5, 8.5),
(13, 'TOPICOS ESPECIAIS EM INFORMATICA', 8.3, 8.2, 10.0, 0.0);
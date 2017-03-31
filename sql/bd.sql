CREATE DATABASE cms;

CREATE TABLE categorias (
  `cat_id` int(3) NOT NULL,
  `cat_nome` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE categorias
  ADD PRIMARY KEY (`cat_id`);

ALTER TABLE categorias
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT;
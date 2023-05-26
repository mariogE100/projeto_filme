CREATE SCHEMA `dbfilmes` DEFAULT CHARACTER SET utf8;

USE dbfilmes;

CREATE TABLE users(
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(150),
    ultimonome VARCHAR(150),
    email VARCHAR(150),
    password VARCHAR(200),
    imagim VARCHAR(200),
    bio TEXT,
    token VARCHAR(200)
);


CREATE TABLE categorias(
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    genero VARCHAR(200)
);

CREATE TABLE filme(
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(150),
    descricao TEXT,
	capa VARCHAR(200),
    classificacao VARCHAR(200),
    id_categoria INT UNSIGNED,
    id_user INT UNSIGNED,
    FOREIGN KEY (id_categoria) REFERENCES categorias (id),
    FOREIGN KEY (id_user) REFERENCES users (id)
);


CREATE TABLE reviews(
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nota INT,
    review TEXT,
    id_user INT UNSIGNED,
    id_filme INT UNSIGNED,
    FOREIGN KEY (id_user) REFERENCES users(id),
    FOREIGN KEY (id_filme) REFERENCES filme(id)

);







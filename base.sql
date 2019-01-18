DROP DATABASE IF EXISTS shareposts;
CREATE DATABASE shareposts CHARACTER SET utf8mb4;
USE shareposts;
CREATE TABLE users (
	id INT PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(191),
	email VARCHAR(191),
	password VARCHAR(191),
	created_at DATETIME DEFAULT NOW()
);

CREATE TABLE posts (
	id INT PRIMARY KEY AUTO_INCREMENT,
	user_id INT,
	title VARCHAR(191),
	body TEXT,
	created_at DATETIME DEFAULT NOW()
);

INSERT INTO users (
	name,
	email,
	password
	)
	VALUES (
	'John Doe',
	'johndoe@gmail.com',
	'123456'
	);


CREATE TABLE users(
id INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
username VARCHAR(30) NOT NULL,
password VARCHAR(26) NOT NULL,
profile_picture BLOB,
last_login_time DATETIME,
is_deleted BOOLEAN
);
INSERT INTO users(username, password, profile_picture, last_login_time, is_deleted)
VALUES ('Kitka', 'qwerty', null, '2012-12-03', true),
('Netko', 'qwerty', null, '2000-08-11', false),
('Yoan', 'qwerty', null, '1998-01-08', true),
('Wendy','qwerty', null, '1987-05-09', true),
('Donko', 'qwerty', null, '1999-11-10', false);
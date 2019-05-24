
CREATE TABLE people(
id INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
name VARCHAR(200) NOT NULL,
picture longblob,
height FLOAT(6, 2),
weight FLOAT(6, 2),
gender ENUM('m', 'f')NOT null,
birthdate DATE NOT NULL,
biography LONGTEXT
);
INSERT INTO people(name, picture, height, weight, gender, birthdate, biography)
VALUES('Kitka', null, 123.12, 213.23, 'f', '2012-12-03', 'krtkagfhgfdsfdgfhnjm,iujhgfds'),
('Netko', NULL, 13.62, 23.63, 'm', '2000-08-11', 'krtkafggfdddffgbfddf'),
('Yoan', NULL, 43.14, 86.56, 'm', '1998-01-08', 'krtkafgghfgdfgfgtgf'),
('Wendy', NULL, 546.54, 45.01, 'f', '1987-05-09', 'fghgffdfvfggfdfdf'),
('Donko', NULL, 11.67, 43.64, 'm', '1999-11-10', 'fghyhgfedghyjjkkkjhjhgf');
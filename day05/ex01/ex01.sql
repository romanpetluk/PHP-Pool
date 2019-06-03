CREATE table  db_rpetluk.ft_table(
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
	login VARCHAR(8) NOT NULL DEFAULT 'toto',
	`group` ENUM('staff', 'student', 'other') NOT NULL,
	creation_date DATE NOT NULL);
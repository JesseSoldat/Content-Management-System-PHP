http://localhost:8012/widget/widget/
go to index

//mysql --version

mysql -u root -p (don't show  password) 
mysql -u root --password=password

SHOW DATABASES;

CREATE DATABASES db_name;

USE db_name;

DROP DATABASE db_name;

GRANT ALL PRIVILEGES ON widget_corp.* 
TO 'username'@'localhost' 
IDENTIFIED BY 'pasword';

username = jesse
password = jesse

SHOW GRANTS FOR 'username'@'localhost';
SHOW GRANTS FOR 'jesse'@'localhost';

----LOGIN and enter Database
mysql -u jesse --password=jesse widget_corp


----TABLES----------------------
SHOW TABLES;

CREATE TABLE table_name (
	column_name1 definition,
	column_name2 definition,
	column_name3 definition,
	options
);

SHOW COLUMNS FROM table_name;
DROP TABLE table_name;

CREATE TABLE subject (
	id INT(11) NOT NULL AUTO_INCREMENT,
	menu_name VARCHAR(30) NOT NULL,
	position INT(3) NOT NULL,
	visible TINYINT(1) NOT NULL,
	PRIMARY KEY (id)
);

RENAME TABLE subject TO subjects;

CREATE TABLE pages (
	id INT(11) NOT NULL AUTO_INCREMENT,
	subject_id INT(11) NOT NULL,
	menu_name VARCHAR(30) NOT NULL,
	position INT(3) NOT NULL,
	visible TINYINT(1) NOT NULL,
	content TEXT,
	PRIMARY KEY (id),
	INDEX (subject_id)
);

CREATE TABLE admins (
	id INT(11) NOT NULL AUTO_INCREMENT,
	username VARCHAR(50) NOT NULL,
	hashed_password VARCHAR(60) NOT NULL,
	PRIMARY KEY (id)
);

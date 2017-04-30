http://localhost:8012/widget/widget/
go to index

//mysql --version

mysql -u root -p (don't show  password) 
mysql -u root --password=password

show databases;

create database db_name;

use db_name;

drop database db_name;

GRANT ALL PRIVILEGES ON widget_corp.* 
TO 'username'@'localhost' 
IDENTIFIED BY 'pasword';

username = jesse
password = jesse

SHOW GRANTS FOR 'username'@'localhost';
SHOW GRANTS FOR 'jesse'@'localhost';

----LOGIN and enter Database
mysql -u jesse --password=jesse widget_corp
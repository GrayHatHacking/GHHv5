
create database cbc;
use cbc;
GRANT ALL PRIVILEGES ON cbc.* TO pentesterlab@'localhost' IDENTIFIED BY 'pentesterlab';
create table users ( login VARCHAR(50) not null  primary key , password VARCHAR(50));

INSERT INTO `users` (login,password) VALUES ('admin','bcd86545c5903856961fa21b914c5fe4');




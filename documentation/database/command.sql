CREATE SCHEMA `romtuck`;

Create Table roles
(id serial, 
name VarChar(225) NOT NULL, 
drashbox Int(1),
project Int(1),
users Int(1),
support Int(1),
sert Int(1),
Primary Key (id))
ENGINE InnoDB CHARACTER SET utf8;

Create Table tag
(id serial, 
name VarChar(225) NOT NULL, 
Primary Key (id))
ENGINE InnoDB CHARACTER SET utf8;

Create Table emails
(id serial, 
email VarChar(225) NOT NULL, 
firstname VarChar(225) NOT NULL, 
name VarChar(225) NOT NULL, 
patronomyc VarChar(225), 
Primary Key (id))
ENGINE InnoDB CHARACTER SET utf8;

Create Table users
(id serial, 
firstname VarChar(225) NOT NULL, 
name VarChar(225) NOT NULL, 
patronomyc VarChar(225), 
login VarChar(225) NOT NULL, 
password VarChar(225) NOT NULL, 
id_role BIGINT UNSIGNED NOT NULL,
ip VarChar(40),
Primary Key (id),
FOREIGN KEY(id_role) REFERENCES roles (id) ON UPDATE CASCADE ON DELETE RESTRICT)
ENGINE InnoDB CHARACTER SET utf8;

Create Table sessions
(id serial,  
session VarChar(225), 
id_users BIGINT UNSIGNED NOT NULL,
Primary Key (id),
FOREIGN KEY(id_users) REFERENCES users (id) ON UPDATE CASCADE ON DELETE RESTRICT)
ENGINE InnoDB CHARACTER SET utf8;

Create Table logs
(id serial,  
text text,
date date,
id_users BIGINT UNSIGNED NOT NULL, 
Primary Key (id),
FOREIGN KEY(id_users) REFERENCES users (id) ON UPDATE CASCADE ON DELETE RESTRICT)
ENGINE InnoDB CHARACTER SET utf8;

Create Table project
(id serial,  
name VarChar(225), 
id_users BIGINT UNSIGNED NOT NULL,
date date,
url VarChar(100), 
id_tag BIGINT UNSIGNED NOT NULL,
Primary Key (id),
FOREIGN KEY(id_users) REFERENCES users (id) ON UPDATE CASCADE ON DELETE RESTRICT,
FOREIGN KEY(id_tag) REFERENCES tag (id) ON UPDATE CASCADE ON DELETE RESTRICT)
ENGINE InnoDB CHARACTER SET utf8;

Create Table sert
(id serial,  
name VarChar(225), 
id_users BIGINT UNSIGNED NOT NULL,
date date,
url VarChar(100), 
Primary Key (id),
FOREIGN KEY(id_users) REFERENCES users (id) ON UPDATE CASCADE ON DELETE RESTRICT)
ENGINE InnoDB CHARACTER SET utf8;

Create Table support
(id serial,  
to_do text, 
emails_do BIGINT UNSIGNED NOT NULL,
froms text, 
users_from BIGINT UNSIGNED NOT NULL,
date date,
Primary Key (id),
FOREIGN KEY(emails_do) REFERENCES emails (id) ON UPDATE CASCADE ON DELETE RESTRICT)
ENGINE InnoDB CHARACTER SET utf8;

ALTER TABLE `logs` 
CHANGE COLUMN `date` `date` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ;

ALTER TABLE `project` 
CHANGE COLUMN `date` `date` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ;

ALTER TABLE `sert` 
CHANGE COLUMN `date` `date` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ;

ALTER TABLE `support` 
CHANGE COLUMN `date` `date` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ;


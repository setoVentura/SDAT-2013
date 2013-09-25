
drop table if exists tbl_user;
drop table if exists tbl_rule;
drop table if exists tbl_monitor;

CREATE TABLE tbl_user( 
	id INTEGER NOT NULL AUTO_INCREMENT,
	PRIMARY KEY(id),
    name VARCHAR(255), 
    email VARCHAR(255) NOT NULL UNIQUE, 
    password VARCHAR(255), 
    affiliation VARCHAR(255), 
	title VARCHAR(255), 
	alertType VARCHAR(255), 
	phone VARCHAR(255),
	alertFrequency INTEGER);  

CREATE TABLE tbl_rule( 
    id INTEGER NOT NULL AUTO_INCREMENT,
	PRIMARY KEY(id),
	name VARCHAR(255) NOT NULL UNIQUE,
    starts VARCHAR(255), 
    ends VARCHAR(255), 
    discipline VARCHAR(255), 
	owner VARCHAR(255), 
	property VARCHAR(255), 
	isPrivate tinyint); 
	   
CREATE TABLE tbl_monitor( 
    id INTEGER NOT NULL AUTO_INCREMENT,
	PRIMARY KEY(id),
	name VARCHAR(255),
	users VARCHAR(255), 
    isPrivate tinyint); 
	   
	
CREATE DATABASE IF NOT EXISTS myjobsadvisor;
USE myjobsadvisor;

CREATE TABLE users(
id                  int(255) auto_increment not null,
name                varchar(255) not null,
plastname           varchar(255) not null,
mlastname           varchar(255) not null,
age					int(3),
email               varchar(255),
telephone			varchar(20),
password            varchar(255) not null,
connection			datetime,
biography			text,
image               varchar(255),
termscondition      varchar(50),
datejob				datetime,
privacy				varchar(50),
role                varchar(20) not null,
active				varchar(2),
created_at          datetime,
updated_at			datetime,
CONSTRAINT users_uniques_fields UNIQUE (email),
CONSTRAINT pk_users PRIMARY KEY(id)
)ENGINE=InnoDb;


CREATE TABLE companies(
id         		int(255) auto_increment not null,
user_id    		int(255) not null,
tradename  		varchar(255),
businessname	varchar(255),
rfc				varchar(50),
logo	        varchar(255),
description 	text,
businesssector	varchar(255),
contacname 		varchar(250),
position		varchar(250),
telephoneext	varchar(250),
businessemail 	varchar(250),
status    		varchar(30),
document		varchar(100),
created_at  	datetime,
updated_at 		datetime,
CONSTRAINT  pk_companies PRIMARY KEY(id),
CONSTRAINT  fk_companies_users FOREIGN KEY(user_id) REFERENCES users(id)
)ENGINE=InnoDb;

CREATE TABLE following(
id  		int(255) auto_increment not null,
user  		int(255),
followed 	int(255),
CONSTRAINT pk_following PRIMARY KEY(id),
CONSTRAINT fk_following_users FOREIGN KEY (user) REFERENCES users(id),
CONSTRAINT fk_followed FOREIGN KEY (followed) REFERENCES users(id)
) ENGINE = InnoDb;

CREATE TABLE private_messages(
id  		int(255) auto_increment not null,
message 	longtext,
emitter 	int(255),
receiver 	int(255),
file 		varchar(255),
image 		varchar(255),
readed  	varchar(3),
created_at  datetime,
CONSTRAINT pk_private_messages PRIMARY KEY(id),
CONSTRAINT fk_emmiter_privates FOREIGN KEY (emitter) REFERENCES users(id),
CONSTRAINT fk_receiver_privates FOREIGN KEY (receiver) REFERENCES users(id)
) ENGINE = InnoDb;


CREATE TABLE likes(
id  		int(255) auto_increment not null,
user  		int(255),
company 	int(255),
CONSTRAINT pk_likes PRIMARY KEY(id),
CONSTRAINT fk_likes_users FOREIGN KEY (user) REFERENCES users(id),
CONSTRAINT fk_likes_company FOREIGN KEY (company) REFERENCES companies(id)
) ENGINE = InnoDb;

CREATE TABLE notifications(
id  		int(255) auto_increment not null,
user_id		int(255),
type		varchar(255),
type_id		int(255),
readed		varchar(3),
created_at  datetime,
extra		varchar(100),
CONSTRAINT pk_notifications PRIMARY KEY(id),
CONSTRAINT fk_notifications_users FOREIGN KEY (user_id) REFERENCES users(id)
) ENGINE = InnoDb;

CREATE TABLE opinions(
id          	int(255) auto_increment not null,
company_id    	int(255) not null,
user_id     	int(255) not null,
generalcomment  text,
point1			varchar(250),
point2			varchar(250),
point3			varchar(250),
point4			varchar(250),
point5			varchar(250),
point6			varchar(250),
point7			varchar(250),
point8			varchar(250),
point9			varchar(250),
point10			varchar(250),
created_at  	datetime DEFAULT NULL,
updated_at		datetime DEFAULT NULL,
CONSTRAINT pk_opinion PRIMARY KEY(id),
CONSTRAINT fk_opinion_company FOREIGN KEY(company_id) REFERENCES companies(id),
CONSTRAINT fk_opinion_user  FOREIGN KEY(user_id) REFERENCES users(id)
)ENGINE=InnoDb;

CREATE TABLE comments(
id 				int(255) not null auto_increment,
opinion_id		int(255) not null,
user_id 		int(255) not null,
body			text,
image  			varchar(255),
created_at      datetime,
updated_at 		datetime,
CONSTRAINT pk_comment PRIMARY KEY(id),
CONSTRAINT fk_comment_opinion FOREIGN KEY(opinion_id) REFERENCES opinions(id),
CONSTRAINT fk_comment_user FOREIGN KEY(user_id) REFERENCES users(id)
)ENGINE=InnoDb;

CREATE TABLE points(
id 				int(255) not null auto_increment,
company_id		int(255) not null,
user_id 		int(255) not null,
valu	   		varchar(255),
created_at      datetime,
updated_at 		datetime,
CONSTRAINT pk_point PRIMARY KEY(id),
CONSTRAINT fk_point_company FOREIGN KEY(company_id) REFERENCES companies(id),
CONSTRAINT fk_point_user FOREIGN KEY(user_id) REFERENCES users(id)
)ENGINE=InnoDb;

CREATE TABLE images(
id 				int(255) not null auto_increment,
company_id		int(255) not null,
user_id 		int(255) not null,
image	   		varchar(255),
created_at      datetime,
updated_at 		datetime,
CONSTRAINT pk_images PRIMARY KEY(id),
CONSTRAINT fk_image_company FOREIGN KEY(company_id) REFERENCES companies(id),
CONSTRAINT fk_image_user FOREIGN KEY(user_id) REFERENCES users(id)
)ENGINE=InnoDb;


ALTER TABLE `users` ADD `anonimo` VARCHAR(2) NOT NULL AFTER `role`;




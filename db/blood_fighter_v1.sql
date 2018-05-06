create table address (
id int(11) not null AUTO_INCREMENT,

police_station varchar(50) not null,
post_office varchar(50) not null,
post_code int(11) not null,
city varchar(50) not null,
division varchar(20) not null,

version int(11) not null,
created timestamp not null Default current_timestamp,
updated timestamp,

PRIMARY KEY(id)
);

CREATE TABLE donor (
id int(11) not null AUTO_INCREMENT,

name varchar(50) not null,
blood_type varchar(5) not null default 'X',
login_id varchar(11) not null UNIQUE,
password varchar(11) not null,

phone_no int(11) UNIQUE,
email varchar(50) UNIQUE,
nid_no varchar(50) UNIQUE,
status varchar(11) DEFAULT 'ACTIVE',
last_donation_date date,
address_id int(11) not null,

version int(11) not null,
created timestamp not null Default current_timestamp,
updated timestamp,

PRIMARY KEY (id),
FOREIGN KEY (address_id) REFERENCES address(id)
);

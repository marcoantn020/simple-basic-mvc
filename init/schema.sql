CREATE TABLE IF NOT EXISTS users (
    id int primary key AUTO_INCREMENT,
    name varchar(100) not null,
    email varchar(200) not null,
    pass varchar(255) not null
);

CREATE TABLE IF NOT EXISTS posts (
    id int primary key AUTO_INCREMENT,
    name varchar(100) not null,
    textPost varchar(255) not null
);
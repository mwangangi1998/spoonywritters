CREATE TABLE usertable (
    id int(11) NOT NULL AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    email varchar(255),
    password varchar(100) NOT NULL,
    code int(11) NOT NULL,
    status text(15),
    PRIMARY KEY (id)
);
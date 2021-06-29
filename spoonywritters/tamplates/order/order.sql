create table ordertable(
    Id int(11) NOT NULL AUTO_INCREMENT,
    email varchar(255) NOT NULL,
    level varchar(255) NOT NULL,
    fmart text(255) NOT NULL,
    subject text(255) NOT NULL,
    npage int(50) NOT NULL,
    ordertime varchar(255) NOT NULL,
    txtarea text(255) NOT NULL,
    totalPrice text(255) NOT NULL,
    attach varchar(100) NOT NULL,
    PRIMARY KEY (Id)
  );
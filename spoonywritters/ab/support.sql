create table support(
    Id int(12) NOT NULL AUTO_INCREMENT,
    username varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    PRIMARY KEY (Id)
);
/*create a table called support */


---insert this values in the same table---
 INSERT INTO `support` (`Id`, `username`, `email`, 
 `password`) VALUES ('1', 'vinny12', 'mwangangimusyoka1998@gmail.com','$2y$10$TZ0cOeksujcdx1Phiss49e1p8N34eNKH.KVl5JuqoUMBXc2/yqkS.');

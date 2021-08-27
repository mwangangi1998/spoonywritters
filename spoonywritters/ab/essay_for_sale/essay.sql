CREATE TABLE essaytbl (
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
   category text(255)NOT NULL,
    title text(255) NOT NULL,
    Description text(255) NOT NULL,
   price DECIMAL(13,2) NOT NULL,
   size int NOT NULL
);
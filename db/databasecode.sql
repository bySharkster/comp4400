CREATE TABLE users ( 
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL UNIQUE,
    email VARCHAR(200) NOT NULL UNIQUE, 
    verified TINYINT NOT NULL , 
    token VARCHAR(100) NOT NULL , 
    password VARCHAR(255) NOT NULL , 
    );

INSERT INTO users (username, email, verified, token, password)
    VALUES ('ADMIN', 'fernandojavier0609@gmail.com', '1', '12345', 'test123');


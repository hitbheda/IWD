-- Query For Creating Table
-- Database Name = userauth
-- Table Name = userinfo

    CREATE TABLE userinfo(
        id INTEGER(20) PRIMARY KEY AUTO_INCREMENT,
        username VARCHAR(30) NOT NULL,
        passwd VARCHAR(30) NOT NULL,
        position VARCHAR(30) NOT NULL,
        department VARCHAR(30) NOT NULL,
        salary VARCHAR(30) NOT NULL,
        email VARCHAR(30) NOT NULL
    );
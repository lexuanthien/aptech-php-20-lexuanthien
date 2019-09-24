CREATE DATABASE aptech_mvc;

CREATE TABLE aptech_mvc.posts (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    content VARCHAR(255)
);

INSERT INTO aptech_mvc.posts (title,content) VALUES ('Hello World','Hello World is a greeting sentence'),('How are you ?','Are ou ok ?');
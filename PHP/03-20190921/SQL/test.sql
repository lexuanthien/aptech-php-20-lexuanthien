CREATE DATABASE aptech_php_20; /*tạo database (như là forder chứa các bảng) */
DROP DATABASE aptech_php_20; /*xóa database */
CREATE TABLE aptech_php_20.users( /*tạo bảng */
    id int,
    last_name varchar(255),
    first_name varchar(255),
    email varchar(255) unique,
    created_at datetime,
    modified_at datetime,
    deleted_at datetime
);
DROP TABLE users; /*xóa bảng */

INSERT INTO users
    (id,last_name, first_name, email, created_at,uState,uCreatedDate)
VALUES
    (1, 'Nam', 'Nguyen', 'namnh.website@gmail.com', 1, 1, NOW()),
    (2, 'John', 'Cenna', 'cenna.john@hotmail.com', 2, 1, NOW()),
    (3, 'Henry', 'Tran', 'tranhe@resolutioninc.com', 2, 1, NOW()),
    (4, 'Christiaan', 'Hunter', 'ch.pageworth@pageworth.com', 1, 1, NOW()),
    (5, 'Vicky', 'Nguyen', 'vicky06@gmail.com', 2, 1, NOW());
    /* dùng INSERT INTO để đưa dữ liệu vào bảng

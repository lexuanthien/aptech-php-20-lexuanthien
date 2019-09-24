-- PRIMARY KEY & AUTO INCREMENT --
-- EXERCISE 1 : Change Id of your User table to Primary Key and make it auto increment each insert data.
-- SUGGESTION :
/* ALTER TABLE aptech_php.apUser
ADD PRIMARY KEY(uId);
ALTER TABLE aptech_php.apUser
MODIFY COLUMN uId int NOT NULL AUTO_INCREMENT ; */
-- EXERCISE 2 : Add more data in your table.
-- SUGGESTION :
/* INSERT INTO aptech_php.apUser
    (uLastName, uFirstName,uEmail,uRole,uState,createdDate)
VALUES
    ('Anna', 'Christopher', 'annateacher@yahoo.com', 2, 1, NOW()); */
    
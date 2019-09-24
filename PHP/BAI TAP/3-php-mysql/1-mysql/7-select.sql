-- SELECT --
-- EXERCISE 1 : Display all of user in your database.
-- SUGGESTION :
/* SELECT *
FROM aptech_php.apUser; */
-- EXERCISE 2 : Display list user role column.
-- SUGGESTION : 
/* SELECT DISTINCT uRole
FROM aptech_php.apUser; */
-- EXERCISE 3 : Display top 3 user in your database.
/* SELECT *
FROM aptech_php.apUser 
LIMIT
3; */

-- EXERCISE 4 : Display users who have role = 1 and state = 1;
/* SELECT *
FROM aptech_php.apUser
WHERE uRole = 1 and uState = 1; */

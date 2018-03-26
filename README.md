# toucantechdemo

# Program Used : Xampp

for database
create database  toucantech
CREATE TABLE members(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
member VARCHAR(255) NOT NULL,
email VARCHAR(255) NOT NULL,
schoolid INT(255) NOT NULL
)
CREATE TABLE schools(
schoolid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
school INT(255) NOT NULL
)


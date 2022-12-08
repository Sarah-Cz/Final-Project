Create Table USERS(
ID INT AUTO_INCREMENT NOT NULL,
NAME VARCHAR(55) NOT NULL,
EMAIL VARCHAR(100) NOT NULL,
PASSWORD VARCHAR(25) NOT NULL,
primary key (NAME));

Create Table BOOKS(
TITLE CHAR (100),
AUTHOR CHAR (100),
STATUS VARCHAR(25),
primary key (TITLE));

INSERT INTO USERS (NAME, EMAIL)
VALUES
('Sam Evans', 'samuel.ev@gemail.com'),
('Shea Cullens', 's.cullens@hotmail.ca'),
('Evan Robins', 'evan.rob@gmail.com');

INSERT INTO BOOKS (TITLE, AUTHOR, STATUS)
VALUES 
('Vanity Fair', 'William M. Thackeray', 'On Display'),
('Code Talker', 'Chester Nez w/ Judith S. Avila', 'Currently Reading'),
('Braiding Sweetgrass', 'Robin W. Kimmer', 'Currenly Reading'),
('The Marrow Theives', 'Cherie Dimaline', 'Completed'),



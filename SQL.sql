CREATE TABLE AUTHOR (
AU_ID        NUMERIC(10,0) PRIMARY KEY NOT NULL,
AU_FNAME     VARCHAR(30) NOT NULL,
AU_LNAME     VARCHAR(30) NOT NULL,
AU_BIRTHYEAR NUMERIC(4));

INSERT INTO AUTHOR VALUES (185, 'Mary', 'Scott', 1986);
INSERT INTO AUTHOR VALUES (218, 'Janice', 'Matt', 1990);
INSERT INTO AUTHOR VALUES (229, 'John', 'Steinbeck', 1902);
INSERT INTO AUTHOR VALUES (251, 'Ray', 'Bradbury', 1920 );
INSERT INTO AUTHOR VALUES (732, 'Gary', 'Paulsen', 1939 );
INSERT INTO AUTHOR VALUES (935, 'Henry', 'Melville', 1849 );
INSERT INTO AUTHOR VALUES (123, 'William', 'Golding', 1911 );
INSERT INTO AUTHOR VALUES (652, 'Jane', 'Austen', 1787 );


CREATE TABLE VISITOR (
CARD_ID     NUMERIC(10,0) PRIMARY KEY NOT NULL,
VST_FNAME   VARCHAR(20) NOT NULL,
VST_LNAME   VARCHAR(20) NOT NULL,
VST_CUR     NUMERIC(13,0),
VST_HIST    NUMERIC(13,0),
VST_FEE     NUMERIC(10)
);

INSERT INTO VISITOR VALUES(3216, 'Clark', 'Kent', );
INSERT INTO VISITOR VALUES(4567, 'Steve','Rodgers');
INSERT INTO VISITOR VALUES(9872, 'Bruce', 'Wayne');
INSERT INTO VISITOR VALUES(1667, 'Al', 'Simmons');
INSERT INTO VISITOR VALUES(6134, 'John ', 'Doe');
INSERT INTO VISITOR VALUES(1613, 'Isaiah ', 'Stewart');
INSERT INTO VISITOR VALUES(9876, 'Harry', 'Kane');
INSERT INTO VISITOR VALUES(0002, 'Mike', 'Trout');

CREATE TABLE BOOK (
BOOK_ISBN   NUMERIC(13,0) PRIMARY KEY NOT NULL,
BOOK_TITLE VARCHAR(120) NOT NULL,
BOOK_YEAR  NUMERIC(4),
BOOK_FR_SALE NUMERIC(0,1),            
BOOK_COST  NUMERIC(8,2),
AU_ID     NUMERIC(7,0) REFERENCES Author,
SST_ID    NUMERIC(10) REFERENCES VISITOR
);

INSERT INTO BOOK VALUES (2565, 'To Kill a Mockingbird', 1959, 59.95, 185, 3216);
INSERT INTO BOOK VALUES (2258, 'The Great Gatsby', null, 79.95, 218, 4567);
INSERT INTO BOOK VALUES (3169, 'Of Mice and Men', 1937, 89.95, 229, 9872);
INSERT INTO BOOK VALUES (4568, 'Fahrenheit 451', 1953, 59.95, 251, 1667);
INSERT INTO BOOK VALUES (0128, 'Hatchet', 1986, 63.99, 732, 6134);
INSERT INTO BOOK VALUES (8732, 'Moby Dick', 1851, 28.99, 935, 1613);
INSERT INTO BOOK VALUES (4920, 'Lord of The Flies', 1954, 83.99, 123, 9876);
INSERT INTO BOOK VALUES (2323, 'Pride and Prejudice', 1813, 78.99, 653, 0002);


CREATE TABLE CHECKOUT (
CHECK_NUM         NUMERIC(15) PRIMARY KEY NOT NULL,
BOOK_ISBN          NUMERIC(13) NOT NULL REFERENCES BOOK,
STU_ID            NUMERIC(10) NOT NULL REFERENCES VISITOR,
CHECK_OUT_DATE    DATE,
CHECK_DUE_DATE    DATE,
CHECK_IN_DATE     DATE
);

INSERT INTO CHECKOUT VALUES (50221, 2565, 3216, '03/31/2018', '04/14/2018', '04/09/2018');
INSERT INTO CHECKOUT VALUES (50222, 2258, 4567, '03/31/2018', '04/07/2018', '04/05/2018');
INSERT INTO CHECKOUT VALUES (50223, 3169, 9872, '03/31/2018', '04/14/2018', '04/09/2018');
INSERT INTO CHECKOUT VALUES (50224, 4568, 1667, '03/31/2018', '04/14/2018', '04/03/2018');
INSERT INTO CHECKOUT VALUES (50225, 0128, 6134, '03/31/2018', '04/21/2018', '04/08/2018');
INSERT INTO CHECKOUT VALUES (50226, 8732, 1613, '03/31/2018', '04/07/2018', '04/03/2018');
INSERT INTO CHECKOUT VALUES (50227, 4920, 9876, '03/31/2018', '04/07/2018', '04/03/2018');
INSERT INTO CHECKOUT VALUES (50228, 2323, 0002, '03/31/2018', '04/14/2018', '04/08/2018');

CREATE TABLE ISBN (
BOOK_ISBN   NUMERIC(13,0) PRIMARY KEY NOT NULL,
BOOK_DESCRIPTION VARCHAR (120) NULL
);

INSERT INTO ISBN VALUES (2565,'The unforgettable novel of a childhood in a sleepy Southern town and the crisis of conscience that rocked it. ');
INSERT INTO ISBN VALUES (2258,'The story is of the fabulously wealthy Jay Gatsby and his new love');
INSERT INTO ISBN VALUES (3169,'An intimate portrait of two men who cherish the slim bond between them and the dream they share in a world marred by petty tyranny, misunderstanding, jealousy, and callousness.');
INSERT INTO ISBN VALUES (4568,'The terrifyingly prophetic novel of a post-literate future');
INSERT INTO ISBN VALUES (0128,'A young boy tries to survive by himself in the wilderness');
INSERT INTO ISBN VALUES (8732,'The sailor Ismael gets revenge on a sperm whale from his previous voyage');
INSERT INTO ISBN VALUES (4920,'Six boys survuve a plane crash on a desserted island');
INSERT INTO ISBN VALUES (2323,'The turbulant relatiopnship between Elizabeth Bennet and Fitzwilliam Darcy');

CREATE TABLE GENRE(
BOOK_ISBN   NUMERIC(13,0) PRIMARY KEY NOT NULL,
BOOK_TITLE VARCHAR(120) NOT NULL,
BOOK_GENRE VARCHAR (120) NOT NULL
);

INSERT INTO GENRE VALUES(2565,'To Kill a Mockingbird', 'mystery ');
INSERT INTO GENRE VALUES(2258,'The Great Gatsby', 'Thriller');
INSERT INTO GENRE VALUES(3169,'Of Mice and Men', 'adventure');
INSERT INTO GENRE VALUES(4568,'Fahrenheit 451', 'action');
INSERT INTO GENRE VALUES(0128,'Hatchet', 'adventure');
INSERT INTO GENRE VALUES(8732,'Moby Dick', 'action');
INSERT INTO GENRE VALUES(4920,'Lord of the Flies', 'fiction');
INSERT INTO GENRE VALUES(2323,'Pride and Prejudice', 'romance');

CREATE TABLE ADMIN(
ADMIN_NUM   NUMERIC(10,0) PRIMARY KEY NOT NULL,
AD_FNAME   VARCHAR(20) NOT NULL,
AD_LNAME   VARCHAR(20) NOT NULL 
);

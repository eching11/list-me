/* List Me Steps */
/* Create users, lists, and items */
CREATE TABLE users
(
	userID SERIAL 	PRIMARY KEY,
	username 		CHAR(150) NOT NULL,
	password 		CHAR(150),
	verCode 		CHAR(150),
	verified 		INT DEFAULT 0
);

CREATE TABLE lists
(
	listID SERIAL 	PRIMARY KEY,
	userID 			INT NOT NULL,
	listURL 		CHAR(150)
);

CREATE TABLE listItems
(
	listItemID SERIAL PRIMARY KEY,
	listID INT NOT NULL,
	listText CHAR(150),
	listItemDone INT NOT NULL,
	listItemPosition INT NOT NULL,
	listItemColor INT NOT NULL
);



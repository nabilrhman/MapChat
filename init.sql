DROP TABLE IF EXISTS Users;
SET @@auto_increment_increment=1;
CREATE TABLE Users (
	user_id INT NOT NULL AUTO_INCREMENT,
	username VARCHAR(32) NOT NULL,
	password VARCHAR(32) NOT NULL,
	first_name TINYTEXT NOT NULL,
	last_name TINYTEXT NOT NULL,
	email TINYTEXT NOT NULL,

	lat DECIMAL(10, 8),
	lng DECIMAL(11, 8),
	reg_date TIMESTAMP NOT NULL default CURRENT_TIMESTAMP,
	is_online BOOLEAN default FALSE,
    is_active BOOLEAN default TRUE,
	PRIMARY KEY (user_id)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


INSERT INTO Users (username, password, first_name, last_name, email)
VALUES ('bruce_wayne', '1234','Bruce', 'Wayne', 'bruce@waynetech.net');
INSERT INTO Users (username, password, first_name, last_name, email)
VALUES ('max_payne', '1234','Max', 'Payne', 'max@nypd.org');
INSERT INTO Users (username, password, first_name, last_name, email)
VALUES ('lara_croft', '1234','Lara', 'Croft', 'lara@tombraider.com');

SELECT * FROM Users;

DROP TABLE IF EXISTS Chats;
CREATE TABLE Chats (
	chat_id INT NOT NULL AUTO_INCREMENT,
	user_id INT NOT NULL,
	body MEDIUMTEXT, 
	timestamp TIMESTAMP NOT NULL default CURRENT_TIMESTAMP,
	PRIMARY KEY (chat_id),
	KEY fk_m_user_id (user_id),
    CONSTRAINT fk_m_user_id FOREIGN KEY (user_id) REFERENCES Users(user_id) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8; 

INSERT INTO Chats (body, user_id)
VALUES ('If you have not seen Game of Thrones, go watch it right now. If you have then you will totally get why this Hodor themed lorem ipsum generator is just brilliant.', '2');
INSERT INTO Chats (body, user_id)
VALUES ('The classic latin passage that just never gets old, enjoy as much (or as little) lorem ipsum as you can handle with our easy to use filler text generator.', '1');
INSERT INTO Chats (body, user_id)
VALUES ('In case you do not read Twitter, the news, or just cannot get enough of The Apprentice host legendary oration, try this Trump lorem ipsum generator on for size.', '3');

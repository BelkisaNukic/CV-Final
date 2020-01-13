CREATE TABLE osoba(
	user_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
	user_first varchar(256) not null,
	user_last varchar(256) not null,
	user_comment varchar(256) not null,
	);
INSERT INTO osoba(user_first,user_last,user_comment) VALUES ('Belkisa', 'Nukic', 'Good Afternoon');
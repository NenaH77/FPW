CREATE TABLE IF NOT EXISTS 'login'(
'id' int (10),
'username' varchar(200) NOT NULL,
'password' varchar(200) NOT NULL,
PRIMARY KEY ('id')
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO login('id', 'username', 'password') VALUES
('1', 'test', 'test');
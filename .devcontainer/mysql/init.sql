CREATE TABLE hello_world (
    id INT NOT NULL auto_increment,
    name TEXT,
    PRIMARY KEY(id)
);

INSERT INTO hello_world (name) 
VALUES ('Hello World!');

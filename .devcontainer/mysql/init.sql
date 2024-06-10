-- Add in a table
CREATE TABLE messages (
    id INT NOT NULL auto_increment,
    content VARCHAR(100),
    PRIMARY KEY(id)
);

-- And a nice message
INSERT INTO messages (content) 
VALUES ('Hello World from MySQL!');

CREATE TABLE example(
    id int NOT NULL AUTO_INCREMENT,
    created_at TIMESTAMP NULL DEFAULT NULL,
    updated_at TIMESTAMP NULL DEFAULT NULL,
    name VARCHAR(200),
    last VARCHAR(200),
    phone VARCHAR(200),
    PRIMARY KEY(id)
);

CREATE TABLE example2 (
    id int NOT NULL AUTO_INCREMENT,
    created_at TIMESTAMP NULL DEFAULT NULL,
    updated_at TIMESTAMP NULL DEFAULT NULL,
    description VARCHAR(255),
    PRIMARY KEY(id),
    example_id int NOT NULL, 
    FOREIGN KEY (example_id) REFERENCES example(id) ON DELETE CASCADE
);
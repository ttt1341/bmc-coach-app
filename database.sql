CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100),
  password VARCHAR(255)
);

INSERT INTO users (name,email,password)
VALUES ('Admin','admin@ibadclub.com','$2y$10$abcdefghijklmnopqrstuv');

CREATE TABLE IF NOT EXISTS customers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    private_id VARCHAR(16) NOT NULL UNIQUE,
    password VARCHAR(255),
    uuid VARCHAR(255),
    company_id VARCHAR(50),
    data TEXT
);

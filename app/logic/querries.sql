CREATE TABLE articles (
  id INT AUTO_INCREMENT PRIMARY KEY,
  page_url TEXT,
  title VARCHAR(255),
  content TEXT,
  keywords JSON
);


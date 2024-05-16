CREATE TABLE articles (
  id INT AUTO_INCREMENT PRIMARY KEY,
  page_url TEXT,
  title VARCHAR(255),
  content TEXT,
  keywords JSON
);

INSERT INTO articles (page_url, title, content, keywords)
VALUES
  (
    '/programming/python',
    'The Rise of Python',
    'Python has become one of the most popular programming languages in the world due to its simplicity and versatility. This article explores the history of Python, its key features, and how it is used in various industries.',
    JSON_ARRAY('Python', 'Programming', 'Development', 'Software')
  ),
  (
    '/programming/javascript',
    'JavaScript: The Language of the Web',
    'JavaScript is the backbone of modern web development. This article delves into the evolution of JavaScript, its essential role in front-end development, and its growing use in server-side applications.',
    JSON_ARRAY('JavaScript', 'Web Development', 'Programming', 'Front-End')
  ),
  (
    '/programming/java',
    'Java: The Workhorse of the Enterprise',
    'Java has been a mainstay in enterprise environments for decades. This article covers the origins of Java, its robust ecosystem, and why it remains a critical tool for large-scale applications.',
    JSON_ARRAY('Java', 'Enterprise', 'Programming', 'Software Development')
  ),
  (
    '/programming/ruby',
    'Ruby and the Rails Revolution',
    'Ruby, especially in combination with the Rails framework, has revolutionized web development. This article examines the Ruby language, the Rails framework, and how they have influenced modern software engineering.',
    JSON_ARRAY('Ruby', 'Rails', 'Web Development', 'Programming')
  ),
  (
    '/programming/go',
    'Go: Simplicity and Performance',
    'Go, also known as Golang, was created by Google to address the limitations of existing languages in large-scale system development. This article explores Go\'s design philosophy, key features, and its applications in cloud computing and beyond.',
    JSON_ARRAY('Go', 'Golang', 'Programming', 'System Development')
  ),
  (
    '/programming/swift',
    'Swift: The Future of iOS Development',
    'Swift is Apple\'s modern programming language for iOS and macOS development. This article discusses Swift\'s advantages over Objective-C, its powerful features, and how it is shaping the future of mobile and desktop app development.',
    JSON_ARRAY('Swift', 'iOS', 'macOS', 'Programming', 'Development')
  ),
  (
    '/programming/rust',
    'Rust: Safety and Performance',
    'Rust is known for its focus on safety and performance, making it a popular choice for systems programming. This article covers Rust\'s unique features, such as its ownership system, and its growing adoption in various tech communities.',
    JSON_ARRAY('Rust', 'Systems Programming', 'Safety', 'Performance')
  ),
  (
    '/programming/kotlin',
    'Kotlin: The Modern Java Alternative',
    'Kotlin has gained popularity as a modern alternative to Java for Android development. This article explores Kotlin\'s concise syntax, interoperability with Java, and why many developers are making the switch.',
    JSON_ARRAY('Kotlin', 'Android', 'Programming', 'Development')
  ),
  (
    '/programming/php',
    'PHP: The Web\'s Ubiquitous Language',
    'PHP has been a foundational language for web development for many years. This article examines PHP\'s evolution, its current state, and why it continues to be widely used for server-side web programming.',
    JSON_ARRAY('PHP', 'Web Development', 'Server-Side', 'Programming')
  ),
  (
    '/programming/csharp',
    'C#: Microsoft\'s Flagship Language',
    'C# is a versatile language developed by Microsoft for a wide range of applications. This article discusses C#\'s features, its integration with the .NET framework, and its use in building enterprise applications and games.',
    JSON_ARRAY('C#', 'Microsoft', 'Programming', 'Development', '.NET')
  );






-- CORRECT WORK AS EXPECTED USE THIS ONE
SELECT * FROM articles WHERE title LIKE '%explores%' OR content LIKE '%explores%' OR JSON_CONTAINS(keywords, 'explores');
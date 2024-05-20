<?php
require_once "connect_db.php";

function check_id()
{
  if (!isset($_SESSION)) session_start();
  if (!isset($_SESSION['username'])) {
    echo "<h1>username not found</h1>";
    session_destroy();
    return false;
  }
  if ($_SESSION['username'] !== "admin") {
    echo "<h1>NOT admin</h1>";
    session_destroy();
    return false;
  }
  if (isset($_SESSION['last_regeneration'])) {
    if (time() - $_SESSION['last_regeneration'] > 30 * 60) {
      session_destroy();
      return false;
    }
  }
  return true;
}


function logVisitToDB($time, $ip)
{
  $conn = connect_db();
  try {
    $sql = "INSERT INTO vlog (`datetime`, ip) VALUES ('$time', '$ip')";
    $conn->exec($sql);
  } catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  $conn = null;
}


function log404toDB($time, $ip, $query)
{
  $conn = connect_db();
  // Check if the connection was successful
  if ($conn === null) {
    echo "Failed to connect to the database.";
    return;
  }

  try {
    // Prepare the SQL statement with placeholders
    $sql = "INSERT INTO `request404` (`url`, `time`, `ip`) VALUES (:query, :time, :ip)";

    // Prepare the statement
    $stmt = $conn->prepare($sql);

    // Bind the parameters to the placeholders
    $stmt->bindParam(':query', $query, PDO::PARAM_STR);
    $stmt->bindParam(':time', $time, PDO::PARAM_STR);
    $stmt->bindParam(':ip', $ip, PDO::PARAM_STR);

    // Execute the prepared statement
    $stmt->execute();

    // Optionally log success or perform other actions here
  } catch (PDOException $e) {
    // Log the error message
    error_log("Error logging 404 to database: " . $e->getMessage());
    echo "Error logging 404 to database: " . $e->getMessage();
  } finally {
    // Close the database connection
    $conn = null;
  }
}

function logSearch($search)
{
  try {
    // Establish a database connection
    $conn = connect_db();

    // Prepare the SQL statement with placeholders
    $sql = "INSERT INTO searches (search_query) VALUES (:search_query)";

    // Prepare the statement
    $stmt = $conn->prepare($sql);

    // Bind the search parameter to the placeholder
    $stmt->bindParam(':search_query', $search);

    // Execute the statement
    $stmt->execute();

    // Close the connection
    $conn = null;
  } catch (PDOException $e) {
    // Log the error message instead of displaying it
    error_log("Error logging search query: " . $e->getMessage());
  }
}





function execute_query($sql)
{
  if (!check_id()) return false;
  $conn = connect_db();
  try {
    $conn->exec($sql);
    return true;
  } catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
    return false;
  }
}




function create_entry($url = "",  $title = "", $content = "", $keywords = "")
{
  if (!check_id()) return false;
  $url = trim($url);
  $title = trim($title);
  $conn = connect_db();
  if ($conn === null) return;
  $sql = "INSERT INTO articles (page_url, title, content, keywords) VALUES ('$url', '$title', '$content', JSON_ARRAY($keywords))";
  try {
    $conn->exec($sql);
    return true;
  } catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
    return false;
  }
}

function delete_item($id)
{
  if (!check_id()) return false;
  $conn = connect_db();
  if ($conn === null) return;
  $slqDelete = "DELETE FROM articles WHERE id=$id";
  try {
    $conn->exec($slqDelete);
    return true;
  } catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
    return false;
  }
}

function read_all()
{
  $conn = connect_db();
  $select_all = "SELECT * FROM articles";
  $stmt = $conn->query($select_all);
  $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
  return $res;
}


function search_db($search_term = "")
{
  if ($search_term === "") return [];
  $search_term = trim($search_term);
  $search_term = strtolower($search_term);
  $sql = "
    SELECT * FROM articles WHERE title LIKE :search_term OR content LIKE :search_term OR JSON_CONTAINS(keywords, :json_search_term);
    ";
  $pdo = connect_db();
  if ($search_term !== '') {
    // Prepare a SQL query with a LIKE clause
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
      ':search_term' =>  "%$search_term%",
      ':json_search_term' => json_encode($search_term)
    ]);

    // Fetch all results that match the search term
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
  logSearch($search_term);
}


function create_table()
{
  $conn = connect_db();
  $sql = "CREATE TABLE articles (
        id INT AUTO_INCREMENT PRIMARY KEY,
        page_url TEXT,
        title VARCHAR(255),
        content TEXT,
        keywords JSON
      );";
  $conn->exec($sql);
  echo "<div><h1>TABLE CREATED</h1></div>";
  $conn = null;
}

function truncate_table()
{
  $conn = connect_db();
  $sql = "TRUNCATE TABLE articles";
  $conn->exec($sql);
  echo "TABLE EMPTIED";
  $conn = null;
}






function create_fake_entry($url = "",  $title = "", $content = "", $keywords = "")
{
  echo "<br>";
  echo "title :  $title";
  echo "<br>";
  echo "url :  $url";
  echo "<br>";
  echo "content :  $content";
  echo "<br>";
  echo "keywords :  $keywords";
  echo "<br>";
}


function create_data()
{
  $conn = connect_db();
  $sql = "
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
    ";
  $conn->exec($sql);
  echo "DATA CREATED";
}

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
    logSearch($search_term);

    // Fetch all results that match the search term
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
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


function create_user(string $username, string $email, string $password, string $role): bool
{
  $conn = connect_db();
  if ($conn == null) return false;

  // Check if the role is valid
  if ($role !== "admin" && $role !== "user") return false;

  // Hash the password
  $pass_hash = password_hash($password, PASSWORD_DEFAULT);
  $query = "INSERT INTO users (username, email, password_hash, role) VALUES (:username, :email, :pass_hash, :role)";

  // Prepare the query
  $stmt = $conn->prepare($query);

  // Bind the parameters
  $stmt->bindParam(':username', $username);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':pass_hash', $pass_hash);
  $stmt->bindParam(':role', $role);

  try {
    // Execute the query
    $stmt->execute();
    return true;
  } catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    return false;
  } finally {
    $conn = null;
  }
}

<?php
require_once "connect_db.php";

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


function create_entry($url = "",  $title = "", $content = "", $keywords = "")
{
    session_start();
    if (!isset($_SESSION['user'])) {
        session_destroy();
        return false;
    }
    if ($_SESSION['user'] === "admin") {
        session_destroy();
        return false;
    }
    if (isset($_SESSION['last_regeneration'])) {
        if (time() - $_SESSION['last_regeneration'] > 30 * 60) {
            session_destroy();
            return false;
        }
    }
    $url = trim($url);
    $title = trim($title);
    $conn = connect_db();
    if ($conn === null) {
        return;
    }
    $sql = "INSERT INTO articles (page_url, title, content, keywords) VALUES ('$url', '$title', '$content', JSON_ARRAY($keywords))";
    try {
        $conn->exec($sql);
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

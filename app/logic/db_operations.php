<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/db/connect";

function check_id()
{
  if ($_SERVER['SERVER_NAME'] === 'localhost') {
    return true;
  }

  if (!isset($_SESSION)) session_start();
  if (!isset($_SESSION['username'])) {
    echo "<h1>username not found</h1>";
    session_destroy();
    return false;
  }

  if ($_SESSION['role'] !== "admin") {
    echo "<h1>NOT ADMIN</h1>";
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


function logVisitToDB($time, $ip, $request)
{
  $conn = connect_db();
  try {
    $stmt = $conn->prepare("INSERT INTO vlog (`datetime`, ip, request) VALUES (?, ?, ?)");
    $stmt->execute([$time, $ip, $request]);
  } catch (PDOException $e) {
    error_log("Database error: " . $e->getMessage()); // Log quietly, don't echo to screen
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



function execute_query($sql, $params = [])
{
  if (!check_id()) return false;
  $conn = connect_db();
  try {
    $stmt = $conn->prepare($sql);
    $stmt->execute($params);
    return true;
  } catch (Exception $e) {
    error_log('DB error: ' . $e->getMessage());
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

function delete_search_item($id)
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

function search_items_read_all()
{
  $conn = connect_db();
  $select_all = "SELECT * FROM articles ORDER BY id DESC";
  $stmt = $conn->query($select_all);
  $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
  return $res;
}

function visitors_searches_read_all(int $page = 1): array
{
  $conn = connect_db();
  $limit = 100;
  $offset = ($page - 1) * $limit;

  $select_all = "SELECT * FROM searches ORDER BY id DESC LIMIT :limit OFFSET :offset";
  $stmt = $conn->prepare($select_all);
  $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
  $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
  $stmt->execute();
  $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

  return $res;
}


function request404_read_all($page = 1)
{
  $conn = connect_db();
  $limit = 100;
  $offset = ($page - 1) * $limit;
  $select_all = "SELECT * FROM request404 ORDER BY id DESC LIMIT :limit OFFSET :offset";
  $stmt = $conn->prepare($select_all);
  $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
  $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
  $stmt->execute();
  $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
  return $res;
}

function count_404_requests()
{
  $conn = connect_db();
  $count_sql = "SELECT COUNT(*) as total FROM request404";
  $stmt = $conn->query($count_sql);
  $result = $stmt->fetch(PDO::FETCH_ASSOC);
  return $result['total'] ?? 0;
}

function delete_404_request($id)
{
  $conn = connect_db();
  if ($conn === null) return false;
  $sql = "DELETE FROM request404 WHERE id = :id";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':id', $id, PDO::PARAM_INT);
  try {
    $stmt->execute();
    return true;
  } catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    return false;
  } finally {
    $conn = null;
  }
}

function get_country_from_ip(string $ip): string
{
  $conn = connect_db();

  // Safety: Check connection
  if ($conn === null) return "Unknown";

  // Convert IP to integer
  $ip_num_query = "SELECT INET_ATON(:ip) AS ip_num";
  $stmt = $conn->prepare($ip_num_query);
  $stmt->bindParam(':ip', $ip);
  $stmt->execute();
  $ip_num = $stmt->fetchColumn();

  if (!$ip_num) return "Invalid IP";

  // Lookup country from ip2nation
  $lookup_query = "
        SELECT c.country
        FROM ip2nation n
        JOIN ip2nationCountries c ON n.country = c.iso_code_2
        WHERE n.ip <= :ip_num
        ORDER BY n.ip DESC
        LIMIT 1
    ";
  $stmt = $conn->prepare($lookup_query);
  $stmt->bindParam(':ip_num', $ip_num);
  $stmt->execute();
  $country = $stmt->fetchColumn();

  return $country ?: "Unknown";
}

function visitors_search_delete($id)
{
  $conn = connect_db();
  if ($conn === null) return false;
  $sql = "DELETE FROM searches WHERE id = :id";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':id', $id, PDO::PARAM_INT);
  try {
    $stmt->execute();
    return true;
  } catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    return false;
  } finally {
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

function find_user(string $username): array
{
  // Connect to the database
  $conn = connect_db();
  if ($conn == null) return [];

  // SQL query to search for the user by username
  $query = "SELECT * FROM users WHERE username = :username LIMIT 1";

  // Prepare the query
  $stmt = $conn->prepare($query);

  // Bind the username parameter
  $stmt->bindParam(':username', $username);

  try {
    // Execute the query
    $stmt->execute();

    // Fetch the user data
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Return the user data if found, otherwise return an empty array
    return $user ? $user : [];
  } catch (PDOException $e) {
    // Log or display error (for debugging, you can log it instead of echoing)
    echo 'Error: ' . $e->getMessage();
    return [];
  } finally {
    // Close the connection
    $conn = null;
  }
}


function update_user_password(string $username, string $old_password, string $new_password): string
{
  // Connect to the database
  $conn = connect_db();
  if ($conn == null) return false;

  // Step 1: Fetch the current hashed password from the database
  $query = "SELECT password_hash FROM users WHERE username = :username";
  $stmt = $conn->prepare($query);
  $stmt->bindParam(':username', $username);

  try {
    // Execute the query
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Check if user exists and fetch the password hash
    if (!$user || !isset($user['password_hash'])) {
      return "User not found.";
    }

    $stored_pass_hash = $user['password_hash'];

    // Step 2: Verify the old password
    if (!password_verify($old_password, $stored_pass_hash)) {
      return "Old password is incorrect.";
    }

    // Step 3: Hash the new password
    $new_pass_hash = password_hash($new_password, PASSWORD_DEFAULT);

    // Step 4: Update the password in the database
    $update_query = "UPDATE users SET password_hash = :new_pass_hash WHERE username = :username";
    $update_stmt = $conn->prepare($update_query);
    $update_stmt->bindParam(':new_pass_hash', $new_pass_hash);
    $update_stmt->bindParam(':username', $username);

    // Execute the update
    $update_stmt->execute();

    // Check if the password was updated
    return $update_stmt->rowCount() > 0 ? "Password updated" : "Error updating the password";
  } catch (PDOException $e) {
    return 'Error: ' . $e->getMessage();
  } finally {
    // Close the connection
    $conn = null;
  }
}

function update_username(string $old_username, string $new_username): array
{
  // Connect to the database
  $conn = connect_db();
  if ($conn == null) return [false, "DB error updating username"];

  // SQL query to update the username of the user
  $query = "UPDATE users SET username = :new_username WHERE username = :old_username";

  // Prepare the query
  $stmt = $conn->prepare($query);

  // Bind the parameters
  $stmt->bindParam(':new_username', $new_username);
  $stmt->bindParam(':old_username', $old_username);

  try {
    // Execute the query
    $stmt->execute();

    // Return true if the update was successful
    return $stmt->rowCount() > 0 ? [true, "username updated."] : [false, "failed to update username."];
  } catch (PDOException $e) {
    // Log or display error
    return [false, 'Error: ' . $e->getMessage()];
  } finally {
    // Close the connection
    $conn = null;
  }
}

// function reset_password_by_id(int $user_id, string $new_password): string
// {
//   // Connect to the database
//   $conn = connect_db();
//   if ($conn == null) return "Database connection failed.";

// Hash the new password
//   $new_hash = password_hash($new_password, PASSWORD_DEFAULT);

//   // Prepare the update query
//   $update = "UPDATE users SET password_hash = :new_hash WHERE id = :user_id";
//   $stmt = $conn->prepare($update);
//   $stmt->bindParam(':new_hash', $new_hash);
//   $stmt->bindParam(':user_id', $user_id);

//   try {
//     $stmt->execute();
//     return $stmt->rowCount() > 0 ? "Password reset successfully." : "No changes made.";
//   } catch (PDOException $e) {
//     return "Error: " . $e->getMessage();
//   } finally {
//     $conn = null;
//   }
// }


function update_email(string $username, string $new_email): array
{
  // Connect to the database
  $conn = connect_db();
  if ($conn == null) return [false, "DB error updating email"];

  // SQL query to update the email of the user
  $query = "UPDATE users SET email = :new_email WHERE username = :username";

  // Prepare the query
  $stmt = $conn->prepare($query);

  // Bind the parameters
  $stmt->bindParam(':new_email', $new_email);
  $stmt->bindParam(':username', $username);

  try {
    // Execute the query
    $stmt->execute();

    // Return true if the update was successful
    return $stmt->rowCount() > 0 ? [true, "email updated"] : [false, "failed to update email"];
  } catch (PDOException $e) {
    // Log or display error
    return [false, 'Error: ' . $e->getMessage()];
  } finally {
    // Close the connection
    $conn = null;
  }
}


function add_product(string $reference, string $title, string $size = null, int $price = null, string $page_url = null): bool
{
  // Connect to the database
  $conn = connect_db();
  if ($conn == null) return false;

  // SQL query to insert a product into the products table
  $query = "INSERT INTO products (reference, title, size, price, page_url) 
            VALUES (:reference, :title, :size, :price, :page_url)";

  // Prepare the query
  $stmt = $conn->prepare($query);

  // Bind the parameters
  $stmt->bindParam(':reference', $reference);
  $stmt->bindParam(':title', $title);
  $stmt->bindParam(':size', $size);
  $stmt->bindParam(':price', $price);
  $stmt->bindParam(':page_url', $page_url);

  try {
    // Execute the query
    $stmt->execute();

    // Return true if the product was added successfully
    return true;
  } catch (PDOException $e) {
    // Log or display error
    echo 'Error: ' . $e->getMessage();
    return false;
  } finally {
    // Close the connection
    $conn = null;
  }
}



/**
 * Fetches all products from the database.
 *
 * This function retrieves all records from the `products` table.
 *
 * @return array An array of products, where each product is an associative array containing
 *               the fields `ID`, `reference`, `title`, `size`, `price`, `page_url`, and `updated_on`.
 *               If no products are found, it returns an empty array.
 */
function read_all_products(): array
{
  // Connect to the database
  $conn = connect_db();
  if ($conn == null) {
    return [];
  }

  // SQL query to fetch all products
  $query = "SELECT * FROM products";

  try {
    // Prepare and execute the query
    $stmt = $conn->prepare($query);
    $stmt->execute();

    // Fetch all products as an associative array
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $products ? $products : [];
  } catch (PDOException $e) {
    // Log or display error
    echo 'Error: ' . $e->getMessage();
    return [];
  } finally {
    // Close the database connection
    $conn = null;
  }
}


/**
 * Fetches a product by its ID from the database.
 *
 * This function retrieves a single product from the `products` table by its `ID`.
 *
 * @param int $id The ID of the product to retrieve.
 * @return array|null Returns an associative array with product details if found, or `null` if the product doesn't exist.
 */
function get_product_by_id(int $id): ?array
{
  // Connect to the database
  $conn = connect_db();
  if ($conn == null) {
    return null;
  }

  // SQL query to fetch the product by ID
  $query = "SELECT * FROM products WHERE ID = :id LIMIT 1";

  // Prepare the query
  $stmt = $conn->prepare($query);

  // Bind the ID parameter
  $stmt->bindParam(':id', $id, PDO::PARAM_INT);

  try {
    // Execute the query
    $stmt->execute();

    // Fetch the product as an associative array
    $product = $stmt->fetch(PDO::FETCH_ASSOC);

    // Return the product if found, or null if not found
    return $product ? $product : null;
  } catch (PDOException $e) {
    // Log or display error
    echo 'Error: ' . $e->getMessage();
    return null;
  } finally {
    // Close the database connection
    $conn = null;
  }
}

function get_product_by_url(string $url): ?array
{
  // Connect to the database
  $conn = connect_db();
  if ($conn === null) {
    return null;
  }

  // SQL query to fetch the product by its page URL
  $query = "SELECT * FROM products WHERE page_url = :url LIMIT 1";

  // Prepare the query
  $stmt = $conn->prepare($query);

  // Bind the URL parameter
  $stmt->bindParam(':url', $url, PDO::PARAM_STR);

  try {
    // Execute the query
    $stmt->execute();

    // Fetch the product as an associative array
    $product = $stmt->fetch(PDO::FETCH_ASSOC);

    return $product ?: null;
  } catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    return null;
  } finally {
    // Close the connection
    $conn = null;
  }
}



/**
 * Updates a product in the database.
 *
 * @param int $id Product ID to update.
 * @param string $reference New reference of the product.
 * @param string $title New title of the product.
 * @param string|null $size New size of the product (optional).
 * @param int|null $price New price of the product (optional).
 * @param string|null $page_url New page URL of the product (optional).
 *
 * @return bool True on success, false on failure.
 */
function update_product(int $id, string $reference, string $title, string $size, int $price, string $page_url): bool
{
  // Connect to the database
  $conn = connect_db();
  if ($conn === null) {
    return false;
  }

  // SQL query including updated_on
  $query = "UPDATE products 
              SET reference = :reference,
                  title = :title,
                  size = :size,
                  price = :price,
                  page_url = :page_url,
                  updated_on = NOW()
              WHERE ID = :id";

  // Prepare the query
  $stmt = $conn->prepare($query);

  // Bind parameters
  $stmt->bindParam(':id', $id);
  $stmt->bindParam(':reference', $reference);
  $stmt->bindParam(':title', $title);
  $stmt->bindParam(':size', $size);
  $stmt->bindParam(':price', $price);
  $stmt->bindParam(':page_url', $page_url);

  try {
    $stmt->execute();
    return $stmt->rowCount() > 0;
  } catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    return false;
  } finally {
    $conn = null;
  }
}


function get_product_by_title(string $title): array
{
  // Connect to the database
  $conn = connect_db();
  if ($conn == null) {
    return [];
  }
  // Prepare the SQL query to find a product by its title
  $query = "SELECT * FROM products WHERE title = :title LIMIT 1";
  $stmt = $conn->prepare($query);

  // Bind the title parameter
  $stmt->bindParam(':title', $title);

  try {
    // Execute the query
    $stmt->execute();

    // Fetch the product data
    $product = $stmt->fetch(PDO::FETCH_ASSOC);

    // Return the product data if found, otherwise return an empty array
    return $product ? $product : [];
  } catch (PDOException $e) {
    // Log or display the error for debugging
    echo 'Error: ' . $e->getMessage();
    return [];
  } finally {
    // Close the connection
    $conn = null;
  }
}

function find_all_products_by_title(string $title): array
{
  // Connect to the database
  $conn = connect_db();
  if ($conn == null) {
    return [];
  }

  // Prepare the SQL query to find all products by their title (case-insensitive)
  $query = "SELECT * FROM products WHERE LOWER(title) = LOWER(:title)";
  $stmt = $conn->prepare($query);

  // Bind the title parameter
  $stmt->bindParam(':title', $title);

  try {
    // Execute the query
    $stmt->execute();

    // Fetch all matching products
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Return the list of products, or an empty array if none are found
    return $products ? $products : [];
  } catch (PDOException $e) {
    // Log or display the error for debugging
    echo 'Error: ' . $e->getMessage();
    return [];
  } finally {
    // Close the connection
    $conn = null;
  }
}


function read_encrypted()
{
  $conn = connect_db();
  $select_all = "SELECT id, AES_DECRYPT(encrypted_data, UNHEX(SHA2('My secret passphrase', 512))) AS decrypted_text FROM t WHERE id = 1";
  $stmt = $conn->query($select_all);
  $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
  return $res;
}


if (basename(__FILE__) == basename($_SERVER['SCRIPT_FILENAME'])) {
  header("Location: /404");
  exit('Forbidden');
}

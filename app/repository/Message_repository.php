<?php


class Message_repository
{
    private $conn;

    public function __construct()
    {
        require_once $_SERVER['DOCUMENT_ROOT'] . "/app/db/connect";
        $this->conn = connect_db();
        if (!$this->conn) {
            error_log("DB connection failed.");
        }
    }

    public function save_message($name, $email, $need, $message)
    {
        if (!$this->conn) return;

        try {
            $stmt = $this->conn->prepare("INSERT INTO contact_messages (name, email, need, message)
                                    VALUES (:name, :email, :need, :message)");
            $stmt->execute([
                ':name' => $name,
                ':email' => $email,
                ':need' => $need,
                ':message' => $message
            ]);
        } catch (PDOException $e) {
            error_log("Message save failed: " . $e->getMessage());
        }
    }

    public function get_all_messages()
    {
        if (!$this->conn) return [];

        try {
            $stmt = $this->conn->query("
      SELECT 
        id, name, email, need, 
        SUBSTRING(message, 1, 255) AS message, 
        created_on 
      FROM contact_messages 
      ORDER BY created_on DESC
    ");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Fetching messages failed: " . $e->getMessage());
            return [];
        }
    }

    public function delete_message_by_id($id)
    {
        if (!$this->conn) return;

        try {
            $stmt = $this->conn->prepare("DELETE FROM contact_messages WHERE id = :id");
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
        } catch (PDOException $e) {
            error_log("Failed to delete message with ID {$id}: " . $e->getMessage());
        }
    }

    public function get_message_by_id($id)
    {
        if (!$this->conn) return null;

        try {
            $stmt = $this->conn->prepare("SELECT * FROM contact_messages WHERE id = :id");
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC); // returns false if not found
        } catch (PDOException $e) {
            error_log("Failed to fetch message with ID {$id}: " . $e->getMessage());
            return null;
        }
    }


    public function __destruct()
    {
        $this->conn = null; // Close the connection gracefully
    }
}

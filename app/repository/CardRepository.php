<?php
//CUSTOMER CLASS
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/models/Card.php";

//ENCRYPTION CLASS
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/security/SecureEncrypt.php";



class CardRepository
{

    protected ?PDO $pdo;
    protected SecEnc $enc;

    public function __construct()
    {
        try {
            $this->pdo = require_once $_SERVER['DOCUMENT_ROOT'] . "/app/db/connect";
            $this->enc = new SecEnc();
        } catch (Error $e) {
            echo 'Error' . "<br>" . $e->getMessage();
            exit;
        }
    }


    private string $insert = "INSERT INTO data (id, P0LHpDNs, v2r3ep32, zb5410x8, me9n2rvs, lbdafa6f) VALUES (:id, :salt, :card_name, :card_number, :expiration, :code)";
    private string $select = "SELECT id, P0LHpDNs, v2r3ep32, zb5410x8, me9n2rvs, lbdafa6f FROM `data` WHERE id = :id LIMIT 1";
    public string $delate = "DELETE FROM `data` WHERE id=:id";

    public function save(Card $card, ?string $key = null): ?string
    {
        $salt = random_bytes(16);
        $this->enc->setSalt($salt);

        $query = $this->insert;
        $stmt = $this->pdo->prepare($query);
        $cardId =
            substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'), 0, 30);

        // Bind encrypted data
        $stmt->bindValue(':id', $cardId);
        $stmt->bindValue(':salt', $salt);
        $stmt->bindValue(':card_name', $this->enc->store($card->name, $key ?? null));
        $stmt->bindValue(':card_number', $this->enc->store($card->number, $key ?? null));
        $stmt->bindValue(':expiration', $this->enc->store($card->exp, $key ?? null));
        $stmt->bindValue(':code', $this->enc->store($card->ccv, $key ?? null));
        return $stmt->execute() ? $cardId : null;
    }

    public function findById(string $id, ?string $key = null)
    {
        $query = $this->select;
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id);

        $stmt->execute();
        $cardData = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$cardData) return null;
        $this->enc->setSalt($cardData['P0LHpDNs']);
        return new Card(
            id: $id,
            name: $this->enc->read($cardData['v2r3ep32'], $key ?? null),
            number: $this->enc->read($cardData['zb5410x8'], $key ?? null),
            exp: $this->enc->read($cardData['v2r3ep32'], $key ?? null),
            ccv: $this->enc->read($cardData['v2r3ep32'], $key ?? null)
        );
    }

    public function delete(string $id): bool
    {

        $query = "DELETE FROM data WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
        return $stmt->execute();
    }
}

$repo = new CardRepository();
$card = new Card(null, "John Doe", "1234 1234 1234 1234", "12/25", "125");

$id = $repo->save($card);
var_dump($repo->findById($id));
echo "<br>";
var_dump($repo->delete($id));
echo "<br>";
echo "<br>";

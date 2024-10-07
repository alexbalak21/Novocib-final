DELETE FROM `request404` WHERE url REGEXP '\.(jpg|png|pdf|css|js|ico|mp4|map)$';


CREATE USER 'db122969'@'%' IDENTIFIED BY '40@Jsu47?zcI%1V0wJ9@@Rmd%YNSDLC';
GRANT ALL PRIVILEGES ON *.* TO 'db122969'@'%' WITH GRANT OPTION;
FLUSH PRIVILEGES;



--INSERT
SET @salt = UNHEX(CONV(FLOOR(RAND() * 0xFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF), 10, 16));

-- Create a key by hashing the salt and the passphrase
SET @key = UNHEX(SHA2(CONCAT(@salt, 'My secret passphrase'), 512)); -- Generates a 32-byte key

-- Encrypt the data and insert it into the table along with the salt
INSERT INTO t (salt, encrypted_data)
VALUES (@salt, AES_ENCRYPT('text', @key));


--SELECT
SELECT 
    id, 
    salt, 
    AES_DECRYPT(encrypted_data, UNHEX(SHA2(CONCAT(salt, 'My secret passphrase'), 512))) AS decrypted_text 
FROM 
    t
WHERE 
    id = 1;  -- Replace with your desired condition



CREATE TABLE c_info
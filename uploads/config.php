<?php
$DB_DNS = 'mysql:host=localhost;dbname=assignment_db';
$db_user = "root";
$db_pass = "";



try {
    $pdo = new PDO($DB_DNS, $db_user, $db_pass);
   
} catch (PDOException $e) {
    echo "ERREUR : " . $e->getMessage();
}

?>

<?php

$user = "root";
$pass = "root";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_CASE => PDO::CASE_NATURAL,
    PDO::ATTR_ORACLE_NULLS => PDO::NULL_EMPTY_STRING
];

try{
    $db = new PDO('mysql:host=localhost:8889;dbname=db_forum', $user, $pass, $options);
    echo "La connexion est effectuée ";
} catch (Exception $e){
    echo $e->getMessage();
}

?>
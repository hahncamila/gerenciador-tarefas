<?php

$hostname = 'localhost';
$database = 'listatarefas';
$username = 'postgres';
$senha = '#!1234!#';

try{
    $pdo = new \PDO("pgsql:host=$hostname;dbname=$database", $username, $senha);
} 
catch (PDOException $e) {
    echo "Erro" . $e->getMessage();  
}

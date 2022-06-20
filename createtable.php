<?php
include_once 'Database.php';

$table = "CREATE TABLE IF NOT EXISTS notes
          (
              id INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
              name VARCHAR(50) NOT NULL UNIQUE,
              description VARCHAR(255) NOT NULL,
              status VARCHAR(30) NOT NULL DEFAULT 'Not completed',
              created_at TIMESTAMP 
          )";

try{
    $conn->query($table);
    echo "<br>Table added";
}catch (PDOException $ex){
    echo "<br>Error ".$ex->getMessage();
}


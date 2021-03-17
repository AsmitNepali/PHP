<?php
require 'function.php';
require 'Task.php';
$pdo = connectToDB();
 $tasks = fetchAllData($pdo);
// var_dump($statement->fetchAll(PDO::FETCH_OBJ));
require 'index.view.php';
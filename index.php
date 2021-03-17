<?php
require 'function.php';
require 'Task.php';
$pdo = connectToDB();
$statement = $pdo->prepare('select * from todo');
$statement->execute();
$tasks = $statement->fetchAll(PDO::FETCH_CLASS,'Task'); // using FETCH_CLASS we can access all the punblic property of Task class
// var_dump($statement->fetchAll(PDO::FETCH_OBJ));
require 'index.view.php';
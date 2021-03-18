<?php

$query = require 'bootstrap.php';
require 'Task.php';
$tasks = $query->selectAll('todo','Task'); //Select from todo and map into Task Class
require 'index.view.php';
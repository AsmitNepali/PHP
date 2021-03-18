<?php

$query = require 'bootstrap.php';
require 'Task.php';
$tasks = $query->selectAll('todo');
require 'index.view.php';
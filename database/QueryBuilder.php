<?php
	class QueryBuilder{
		protected $pdo;
		public function __construct($pdo) //Type hinting
		{
			$this->pdo = $pdo;
		}
		public function selectAll($table)
		{
			$statement = $this->pdo->prepare("select * from {$table}");
			$statement->execute();
			return $statement->fetchAll(PDO::FETCH_CLASS); 
			// using FETCH_CLASS we can access all the punblic property of Task class
		}
	}
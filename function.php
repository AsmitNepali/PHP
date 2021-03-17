<?php
	function checkAge($age)
	{
		if($age>18)
		{
			echo"You are ready for vote.";
			return 1;
		}
		else
		{
			echo"Sorry you are not ready for vote";
			return 0;
		}
	}

	function connectToDB()
	{
		try{
			return new PDO('mysql:host=127.0.0.1;dbname=mytodo','root','');	
		}
		catch(PDOException $e)
		{
			die('Could not connect');
		}
	}

	function fetchAllData($pdo)
	{
		$statement = $pdo->prepare('select * from todo');
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_CLASS,'Task'); // using FETCH_CLASS we can access all the punblic property of Task class
	}

	function dd($data)
	{
		echo"<pre>";
		var_dump($data);
		echo"</pre>";
	}
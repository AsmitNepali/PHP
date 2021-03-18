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

	function dd($data)
	{
		echo"<pre>";
		var_dump($data);
		echo"</pre>";
	}
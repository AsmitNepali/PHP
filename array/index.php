<?php
	class Post{
		public $title;

		public $publisheStatus;

		public function __construct($title, $status){
			$this->title = $title;
			$this->publisheStatus = $status;
		}
}
$posts = [
			new Post('My fist post', true),
			new Post('My second post', true),
			new Post('My third post', true),
			new Post('My fourth post', false)
		];

$titles = array_column($posts, 'title');
var_dump($titles);
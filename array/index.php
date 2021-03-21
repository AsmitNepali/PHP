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

foreach($posts as $index=>$post){
	$posts[$index] = (array) $post;
}
var_dump($posts);
<?php
	class Post{
		public $title;

		public $publisheStatus;

		public $authors;

		public function __construct($title, $authors, $status){
			$this->title = $title;
			$this->publisheStatus = $status;
			$this->authors = $authors;
		}
}
$posts = [
			new Post('My fist post', 'AN', true),
			new Post('My second post', 'AN', true),
			new Post('My third post', 'AN', true),
			new Post('My fourth post', 'SP', false)
		];

array_map(function($post){
	return (array) $post;
},$post);
$authors = array_column($posts, 'authors','title');
var_dump($authors);
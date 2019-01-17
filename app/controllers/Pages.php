<?php
	class Pages extends Controller{
		public function __construct() {
			//example of geting Post model
			/* $this->postModel = $this->model('Post'); */
		}	
		public function index() {
			$data = [
				'title' => 'SharePosts',
				'description' => 'Simple social network built on the myMVC PHP framework',
			];
			$this->view('pages/index', $data);
		}
		public function about() {
			$data = [
				'title' => 'About Page',
				'description' => 'App to share posts with others.',
			];
			$this->view('pages/about', $data);
		}
	}


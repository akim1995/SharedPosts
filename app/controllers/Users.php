<?php
	class Users extends Controller {
		public function __construct() {

		}
		public function register() {
			if($_SERVER['REQUEST_METHOD'] == 'POST') {
				// Process form
			} else {
				// Init data
				$data = [
						'name' => '',
						'email' => '',
						'password' => '',
						'confirm_password' => '',
						'name_error' => '',
						'email_err' => '',
						'password_err' => '',
						'confirm_password_err' => '',
				];
				$this->view('users/register', $data);
			}
		}
	}

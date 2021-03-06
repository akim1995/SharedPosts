<?php
	class Users extends Controller {
		public function __construct() {
			$this->userModel = $this->model('User');
		}
		public function index() {
			$this->register();
		}
		public function register() {
			if($_SERVER['REQUEST_METHOD'] == 'POST') {
				// Process form
				// remove html tags
				$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
				$data = [
						'title' => 'register',
						'name' => trim($_POST['name']),
						'email' => trim($_POST['email']),
						'password' => trim($_POST['password']),
						'confirm_password' => trim($_POST['confirm_password']),
						'name_error' => '',
						'email_err' => '',
						'password_err' => '',
						'confirm_password_err' => '',
				];
				// Validate Email 
				if(empty($data['email'])) {
					$data['email_err'] = 'Please enter email';
				} else {
					// Check email
					if($this->userModel->findUserByEmail($data['email'])) {
					$data['email_err'] = 'Email is already in use.';
					}
				}
				// Validate name 
				if(empty($data['name'])) {
					$data['name_err'] = 'Please enter name';
				}
				// Validate Password 
				if(empty($data['password'])) {
					$data['password_err'] = 'Please enter password';
				} elseif(strlen($data['password']) < 6) {
					$data['password_err'] = 'Password must be at least 6 characters long';
				}

				// Validate Confirm Password 
				if(empty($data['confirm_password'])) {
					$data['confirm_password_err'] = 'Please confirm password';
				} else {
					if($data['password'] != $data['confirm_password']) {
						$data['confirm_password_err'] = 'Passwords do not match';
					}
				}
				// Make sure errors are empty
				if(empty($data['email_err']) && empty($data['name_error']) && 
				empty($data['password_err']) && empty($data['confirm_password_err'])
				) {
					$data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
					// Register User
					if($this->userModel->register($data)) {
						redirect('users/login');
					} else {
						die('Somethin went Wrong');
					}
				} else {
					// Load view with errors
					$this->view('users/register', $data);
				}


			} else {
				// Init data
				$data = [
						'title' => 'register',
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

		public function login() {
			if($_SERVER['REQUEST_METHOD'] == 'POST') {
				// Process form
				// remove html tags
				$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
				$data = [
						'title' => 'login',
						'email' => trim($_POST['email']),
						'password' => trim($_POST['password']),
						'email_err' => '',
						'password_err' => '',
				];

				// Validate Email 
				if(empty($data['email'])) {
					$data['email_err'] = 'Please enter email';
				}
				// Validate Password 
				if(empty($data['password'])) {
					$data['password_err'] = 'password';
				}
				
				// Make sure errors are empty
				if(empty($data['email_err']) && empty($data['password_err'])) {
					die('SUCCESS');
				} else {
					// Load view with errors
					$this->view('users/login', $data);
				}

			} else {
				// Init data
				$data = [
						'title' => 'login',
						'email' => '',
						'password' => '',
						'email_err' => '',
						'password_err' => '',
				];
				$this->view('users/login', $data);
			}
		}

	}

<?php

namespace Model;

class Post {
	private $db;

	public function __construct() {
		$this->db = new Database;
	}

	public function addPost($data) {
		
	}

	public function updatePost($data) {
			
	}

	public function deletePost($id) {
			
}

class User extends Database{
	private $db;
	public function __construct() {
		$this->db = new Database;
	}

	public function register($data) {

		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$passwordConfirm = $_POST['username'];   


			$data = $_POST;

			if (empty($data['username']) ||
				empty($data['password']) ||
				empty($data['email']) || 
				empty($data['password_confirm'])) {
					
				die('Please fill all required fields!');
			}
			
			if ($data['password'] !== $data['password_confirm']) {
				die('Password and Confirm password should match!');   
			}
	}

	public function login($username, $password) {
		 
	}
}

}

?>
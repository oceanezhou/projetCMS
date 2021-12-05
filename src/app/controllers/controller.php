<?php

namespace Controller;

class Pages extends Controller {
    public function __construct() {
        $this->userModel = $this->model('User');
    }

    public function index() {
        $data = [
            'title' => 'Home page'
        ];

        $this->view('Home/home', $data);
    }

    public function about() {
        $this->view('about');
    }
}

class Register extends Controller {
  public function __construct() {
      $this->userModel = $this->model('User');
  }

  public function index() {
      $this->view('Users/register');
  }

  class Users extends Controller {
    public function __construct() {
        $this->userModel = $this->model('User');
    }

    public function register() {
       
    }
    
    public function login() {
        $this->view('Users/login');
    }

    public function logout() {
       
    }

?>
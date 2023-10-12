<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Main extends Controller {
	public function reg(){
        $this->call->view('register');
    }

    public function log(){
        $this->call->view('login');
    }

    public function dash(){
        $this->call->view('dashboard');
    }

    public function user(){
        $this->call->view('userlist');
    }
}
?>
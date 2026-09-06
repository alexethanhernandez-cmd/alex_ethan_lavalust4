<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Controller: UserController
 * 
 * Automatically generated via CLI.
 */
class UserController extends Controller {

    public function show_users()
    {

        $users = $this->UserModel->all();
       //ddt ($users, 'Users Table' ); 
       $this->call->view('users', ['users' => $users]);

    }
}

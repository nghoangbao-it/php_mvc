<?php

class UsersController extends BaseController
{

    public function index()
    {
        $user = new Users();
        $list_users = $user->getAllUsers();
        // $list_users = [ 'name' => 'Anh', 'email' => '20'];
        $this -> renderView('users', $list_users);
    }
}
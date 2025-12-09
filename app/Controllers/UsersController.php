<?php

class UsersController extends BaseController
{

    public function index()
    {
        $user = new Users();
        $users = $user->getAllUsers();
        // $list_users = [ 'name' => 'Anh', 'email' => '20'];
        // $this -> renderView('users.php', $list_users);

        ob_start();
        print_r($users);
        $this->renderView('layouts-part/users.php', $users);
        $data = [
            'content' => ob_get_clean(),
        ];


        $this->renderView('layouts/main-layout.php', $data);
    }
}
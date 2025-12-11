<?php

class UsersController extends BaseController
{

    public function index()
    {
        $user = new Users();
        $users = $user->getAllUsers();
       
        ob_start();
        $this->renderView('layouts-part/users.php', $users);
        $data = [
            'content' => ob_get_clean(),
        ];


        $this->renderView('layouts/main-layout.php', $data);
    }
}
<?php

// require_once('./configs/config.php');
// require_once('./configs/database.php');
// require_once('./app/Models/CoreModel.php');
// require_once('./app/Models/Users.php');
// require_once('./app/Models/Groups.php');
// require('./app/Controllers/UsersController.php');

// foreach(glob(__DIR__ .'/configs/*.php') as $filename) {
//     require_once $filename;
// }


$paths = [
    '/configs/*.php',
    '/core/*.php',
    '/app/Models/*.php',
    '/app/Controllers/*.php',
    '/app/Views/parts/*.php',
    '/app/Views/layouts/*.php',
    '/app/Views/layouts-part/*.php',
];
foreach($paths as $path) {
    foreach(glob(__DIR__ . $path) as $filename) {
    require_once $filename;
    }
}



$controller = new UsersController();
$controller -> index();
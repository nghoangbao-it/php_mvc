<?php

$router -> get('/users', 'UsersController@index');
$router -> post('/users','UsersController@addUser');

$router -> get('/groups', 'GroupsController@index');
$router -> post('/groups','GroupsController@addGroup');

$router -> get('/product', 'ProductsController@index');
$router -> post('/product','ProductsController@addProduct');

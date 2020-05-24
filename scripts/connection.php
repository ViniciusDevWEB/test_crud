<?php
function newConnection($database = 'test_crud') {
    $server = '127.0.0.1';
    $user = 'root';
    $password = 'root';

    $connection = new mysqli($server, $user, $password, $database);

    if($connection->connect_error) { die('Erro: ' . $connection->connect_error); }

    return $connection;
}
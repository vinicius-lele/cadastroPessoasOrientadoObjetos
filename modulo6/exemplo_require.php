<?php

require_once 'Lib/Livro/Database/Connection.php';

use Livro\Database\Connection;
$obj1 = Connection::open('livro');
var_dump($obj1);
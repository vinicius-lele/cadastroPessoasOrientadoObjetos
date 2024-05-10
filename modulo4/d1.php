<?php

require_once 'a1.php';
require_once 'b1.php';
require_once 'c1.php';

use \Library\Widgets\Field;
use \Library\Container\Table;
use \Library\Widgets\Form;

var_dump(new Field);
echo '<hr>';
var_dump(new Table);
echo '<hr>';
var_dump(new Form);

$f = new Form;
$f->show();
echo '<hr>';
$f->fazAlgo(new Field);
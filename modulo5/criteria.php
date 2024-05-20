<?php

require_once 'classes/api/Criteria.php';

$criteria = new Criteria;
$criteria->add('idade', '<', 16);
$criteria->add('idade', '>', 60, 'or');
print $criteria->dump(). "<br>\n";

$criteria = new Criteria;
$criteria->add('idade','IN', array (24,25,26));
$criteria->add('idade', 'NOT IN', array(10));
print $criteria->dump(). "<br>\n";
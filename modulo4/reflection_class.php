<?php
require_once 'veiculo.php';

$rc = new ReflectionClass('Automovel');

echo '<pre>';
print_r($rc->getMethods());
print_r($rc->getProperties());
print_r($rc->getParentClass());


echo '<hr>';

foreach($rc->getMethods() as $method)
{
    print_r($method->getParameters());
}
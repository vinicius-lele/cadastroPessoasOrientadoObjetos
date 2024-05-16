<?php
require_once 'classes/CSVParser.php';

$csv = new CSVParser('clientes.csv', ';');


try{
    $csv->parse();
    echo '<pre>';

    while($row = $csv->fetch())
    {
        print $row['Cliente']. '-'.
              $row['Cidade'].'<br>';
    }
}
catch(Exception $e)
{
    print $e->getMessage();
}
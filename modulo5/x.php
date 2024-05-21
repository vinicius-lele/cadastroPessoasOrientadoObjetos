<?php

try
{
    Transaction::open('estoque');

    $criteria = new Criteria;
    $criteria->add('estoque', '>', 10);
    $criteria->add('origem', '=', 'N');

    $criteria->setProperty('order','id');

    $repository = new Repository('Produto');

    $produtos = $repository->load($criteria);
    if($produtos){
        echo "Produtos <br/>\n";

        foreach($produtos as $produto){
            echo 'ID: '. $produto->id;
            echo ' - Descricao: '.$produto->descricao;
            echo ' - Estoque: '.$produto->estoque;
            echo "<br/>\n"; 
        }
    }
}
catch(Exception $e)
{
    print $e->getMessage();
}
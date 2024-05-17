<?php
require_once 'classes/ar/ProdutoComTransacao.php';
require_once 'classes/api/Transaction.php';
require_once 'classes/api/Connection.php';
try
{
    Transaction::open('estoque');
    $produto = new Produto;
    $produto->descricao = "Chocolatinho";
    $produto->estoque = 4;
    $produto->preco_custo = 8;
    $produto->preco_venda = 3;
    $produto->codigo_barras = '5555555';
    $produto->data_cadastro = date('Y-m-d');
    $produto->origem = 'N';
    $produto->save();

    Transaction::close();
}
catch(Exception $e)
{
    Transaction::rollback();
    print $e->getMessage();
}
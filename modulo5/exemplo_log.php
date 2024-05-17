<?php
require_once 'classes/ar/ProdutoComTransacaoELog.php';
require_once 'classes/api/Connection.php';
require_once 'classes/api/Transaction.php';
require_once 'classes/api/Logger.php';
require_once 'classes/api/LoggerTXT.php';
try
{
    Transaction::open('estoque');
    Transaction::setLogger(new LoggerTXT('C:\chinelo\log.txt'));
    $produto = new Produto;
    $produto->descricao = "bisnaga";
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
    $e->getMessage();
}
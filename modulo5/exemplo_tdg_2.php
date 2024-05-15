<?php

require_once 'classes/tdg/Produto.php';
require_once 'classes/tdg/ProdutoGateway.php';


try{
    $conn = new PDO('sqlite:database/estoque.db');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    Produto::setConnection($conn);

    $produtos = Produto::all();

    foreach($produtos as $produto)
    {
        $produto->delete();
    }

    $produto = new Produto;
    $produto->descricao = 'Vinho';
    $produto->estoque = 8;
    $produto->preco_custo = 12;
    $produto->preco_venda = 18;
    $produto->codigo_barras = '123123123';
    $produto->data_cadastro = date('Y-m-d');
    $produto->origem = 'N';
    $produto->save();

    $outro = Produto::find(1);
    $outro->registraCompra(14,5);
    $outro->save;
}
catch (Exception $e)
{
    print $e->getMessage();
}
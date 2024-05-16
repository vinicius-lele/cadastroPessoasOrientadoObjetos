<?php
require_once 'classes/ar/Produto.php';

try
{
    $conn = new PDO('sqlite:database/estoque.db');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    Produto::setConnection($conn);

    foreach(Produto::all() as $produto)
    {
        print $produto->descricao;
    }

    /* DELETANDO ITEM
    foreach(Produto::all() as $produto)
     {
         if($produto->id == 3)
             $produto->delete();
     }
    */

     /* ADICIONANDO ITEM
    $produto = new Produto;
    $produto->id = 31;
    $produto->descricao = 'Caramelo-Modificado';
    $produto->estoque =7;
    $produto->preco_custo = 15;
    $produto->preco_venda = 22;
    $produto->codigo_barras = '44447777';
    $produto->data_cadastro = date ('Y-m-d');
    $produto->origem = 'N';
    $produto->save();
    */

    $produto28 = Produto::find(28);
    echo '<p>O de ID 28 é: '.$produto28->descricao;
    $produto28->registraCompra(35,10);
    $produto28->save();

}
catch(Exception $e)
{
    
}
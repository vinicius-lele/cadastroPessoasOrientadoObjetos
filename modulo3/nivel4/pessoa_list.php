<?php
require_once 'db/pessoa_db.php';
if (!empty($_GET['action']) and ($_GET['action'] == 'delete')) {
    $id = $_GET['id'];
    exclui_pessoa($id);
}

$pessoas = lista_pessoa();

$items = '';
if ($pessoas) {
    foreach ($pessoas as $pessoa) {
        $item = file_get_contents('html/item.html');
        $item = str_replace('{id}', $pessoa['id'], $item);
        $item = str_replace('{nome}', $pessoa['nome'], $item);
        $item = str_replace('{endereco}', $pessoa['endereco'], $item);
        $item = str_replace('{bairro}', $pessoa['bairro'], $item);
        $item = str_replace('{telefone}', $pessoa['telefone'], $item);

        $items .= $item;
    }
}

$list = file_get_contents('html/list.html');
$list = str_replace('{items}', $items, $list);

print $list;

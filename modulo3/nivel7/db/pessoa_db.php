<?php
function get_pessoa($id){
    $conn = mysqli_connect("localhost", "root", "root", "brasil");
    $result = mysqli_query($conn, "SELECT * FROM pessoa WHERE id = '{$id}'");
    $pessoa = mysqli_fetch_assoc($result);
    mysqli_close($conn);
    return $pessoa;
}

function exclui_pessoa($id){
    $conn = mysqli_connect("localhost", "root", "root", "brasil");
    $result = mysqli_query($conn, "DELETE FROM pessoa WHERE id = '{$id}'");
    mysqli_close($conn);
    return $result;
}

function insert_pessoa($pessoa){
    $conn = mysqli_connect("localhost", "root", "root", "brasil");
    $sql = "INSERT INTO pessoa (id, 
                                nome, 
                                endereco, 
                                bairro, telefone, 
                                email, 
                                id_cidade) 
                    VALUES ('{$pessoa['id']}',
                            '{$pessoa['nome']}',
                            '{$pessoa['endereco']}',
                            '{$pessoa['bairro']}',
                            '{$pessoa['telefone']}',
                            '{$pessoa['email']}',
                            '{$pessoa['id_cidade']}')";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}

function update_pessoa($pessoa){
    $conn = mysqli_connect("localhost", "root", "root", "brasil");
    $sql = "UPDATE pessoa SET   nome = '{$pessoa['nome']}',
                                            endereco = '{$pessoa['endereco']}',
                                            bairro = '{$pessoa['bairro']}',
                                            telefone = '{$pessoa['telefone']}',
                                            email = '{$pessoa['email']}',
                                            id_cidade = '{$pessoa['id_cidade']}'
                                    WHERE id = '{$pessoa['id']}'";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}

function lista_pessoa(){
    $conn = mysqli_connect("localhost", "root", "root", "brasil");
    $result = mysqli_query($conn, "SELECT * FROM pessoa ORDER BY id");
    $list = mysqli_fetch_all($result,MYSQLI_ASSOC);
    mysqli_close($conn);
    return $list;
}

function get_next_pessoa(){
    $conn = mysqli_connect("localhost", "root", "root", "brasil");
    $result = mysqli_query($conn, "SELECT max(id) as next FROM pessoa");
    $pessoa = mysqli_fetch_assoc($result);
    $next = $pessoa['next'] + 1;
    mysqli_close($conn);
    return $next;
}
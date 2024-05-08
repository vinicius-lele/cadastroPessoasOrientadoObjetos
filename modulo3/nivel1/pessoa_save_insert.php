<?php

$dados = $_POST;
$conn = mysqli_connect("localhost","root","root","brasil");

$result = mysqli_query($conn, 'SELECT max(id) as next FROM pessoa');
$row = mysqli_fetch_assoc($result);
$next = (int) $row['next'] + 1;
$sql = "INSERT INTO pessoa (id, nome, endereco, bairro, 
                            telefone, email, id_cidade) 
                    VALUES ('{$next}','{$dados['nome']}',
                            '{$dados['endereco']}','{$dados['bairro']}',
                            '{$dados['telefone']}','{$dados['email']}',
                            '{$dados['id_cidade']}')";

$result = mysqli_query($conn, $sql);
if($result)
{
    print 'Dado inserido com sucesso!';
}
else
{
    mysqli_error($conn);
}
mysqli_close($conn);
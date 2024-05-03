<?php

$dados = $_GET;
$conn = mysqli_connect("localhost","root","root","brasil");


$sql = "DELETE FROM pessoa WHERE id = '{$dados['id']}'";

$result = mysqli_query($conn, $sql);
if($result)
{
    print 'Dado excluído com sucesso!';
}
else
{
    print 'Algo deu errado';
}

mysqli_close($conn);
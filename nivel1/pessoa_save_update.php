<?php

$dados = $_POST;
$conn = mysqli_connect("localhost","root","root","brasil");


$sql = "UPDATE pessoa SET 
                        nome = '{$dados['nome']}', 
                        endereco = '{$dados['endereco']}', 
                        bairro = '{$dados['bairro']}', 
                        telefone = '{$dados['telefone']}', 
                        email = '{$dados['email']}', 
                        id_cidade = '{$dados['id_cidade']}'
                    WHERE id = '{$dados['id']}'";

$result = mysqli_query($conn, $sql);
if($result)
{
    print 'Dado atualizado com sucesso!';
}
else
{
    print 'Algo deu errado';
}

mysqli_close($conn);
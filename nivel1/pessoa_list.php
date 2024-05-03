<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
    <link rel="stylesheet" href="./css/list.css">
</head>
<body>
    <table border=1>
        <thead>
            <tr>
                <td></td>
                <td></td>
                <td>Id</td>
                <td>Nome</td>
                <td>Endereço</td>
                <td>Bairro</td>
                <td>Telefone</td>
            </tr>
        </thead>
        <tbody>
            <?php
                $conn = mysqli_connect("localhost","root","root","brasil");
                $result = mysqli_query($conn, 'SELECT * FROM pessoa ORDER BY id');

                while ($row = mysqli_fetch_assoc($result))
                {
                    $id = $row['id'];
                    $nome = $row['nome'];
                    $endereco = $row['endereco'];
                    $bairro = $row['bairro'];
                    $telefone = $row['telefone'];
                    $email = $row['email'];
                    $id_cidade = $row['id_cidade'];

                    print '<tr>';
                    print "<td><a href='pessoa_form_edit.php?id={$id}'><img src='./images/edit.png' style='width: 17px'/></a></td>";
                    print "<td><a href='pessoa_delete.php?id={$id}'><img src='./images/delete.png' style='width: 17px'/></a></td>";
                    print "<td>{$id}</td>";
                    print "<td>{$nome}</td>";
                    print "<td>{$endereco}</td>";
                    print "<td>{$bairro}</td>";
                    print "<td>{$telefone}</td>";                 
                    print '</tr>';
                }
            ?>
        </tbody>
    </table>
    <button onclick="window.location='pessoa_form_insert.php'">
        <img src="./images/add.png" style="width: 17px"/> Inserir
    </button>
</body>
</html>
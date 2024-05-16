<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/form.css">
    <title>Cadastro de pessoa</title>
</head>

<body>
    <?php
    $id = '';
    $nome = '';
    $endereco = '';
    $bairro = '';
    $telefone = '';
    $email = '';
    $id_cidade = '';
    if (!empty($_REQUEST['action'])) {
        $conn = mysqli_connect("localhost", "root", "root", "brasil");
        if ($_REQUEST['action'] == 'edit') {
            if (!empty($_GET['id'])) {
                $id = (int) $_GET['id'];
                $result = mysqli_query($conn, "SELECT * FROM pessoa WHERE id='{$id}'");
                $row = mysqli_fetch_assoc($result);

                $id = $row['id'];
                $nome = $row['nome'];
                $endereco = $row['endereco'];
                $bairro = $row['bairro'];
                $telefone = $row['telefone'];
                $email = $row['email'];
                $id_cidade = $row['id_cidade'];
            }
        }
        else if($_REQUEST['action'] == 'save')
        {
            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $endereco = $_POST['endereco'];
            $bairro = $_POST['bairro'];
            $telefone = $_POST['telefone'];
            $email = $_POST['email'];
            $id_cidade = $_POST['id_cidade'];

            if(empty($_POST['id']))
            {
                $result = mysqli_query($conn, "SELECT max(id) as next FROM pessoa");
                $row = mysqli_fetch_assoc($result);
                $next = (int) $row['next'] +1;

                $sql = "INSERT INTO pessoa (id, nome, endereco, bairro, telefone, email, id_cidade) VALUES ('{$next}','{$nome}','{$endereco}','{$bairro}','{$telefone}','{$email}','{$id_cidade}')";

                $result = mysqli_query($conn, $sql);
            }
            else
            {
                $sql = "UPDATE pessoa SET   nome = '{$nome}',
                                            endereco = '{$endereco}',
                                            bairro = '{$bairro}',
                                            telefone = '{$telefone}',
                                            email = '{$email}',
                                            id_cidade = '{$id_cidade}'
                                    WHERE id = '{$id}'";

                $result = mysqli_query($conn, $sql);
            }
            print($result) ? 'Reistro salvo com sucesso' : 'Algo deu errado';
            mysqli_close($conn);

        }
    }


    ?>
    <form action="pessoa_form.php?action=save" enctype="multipart/form-data" method="post">
        <label for="">Código</label>
        <input type="text" name="id" readonly="1" style="width:30%" value="<?= $id ?>">

        <label for="">Nome</label>
        <input type="text" name="nome" style="width:50%" value="<?= $nome ?>">

        <label for="">Endereço</label>
        <input type="text" name="endereco" style="width:50%" value="<?= $endereco ?>">

        <label for="">Bairro</label>
        <input type="text" name="bairro" style="width:25%" value="<?= $bairro ?>">

        <label for="">Telefone</label>
        <input type="text" name="telefone" style="width:25%" value="<?= $telefone ?>">

        <label for="">Email</label>
        <input type="text" name="email" style="width:25%" value="<?= $email ?>">

        <label for="">Cidade</label>
        <select name="id_cidade" style="width:25%">
            <?php
            require_once 'lista_combo_cidades.php';
            print lista_combo_cidades($id_cidade);
            ?>
        </select>

        <input type="submit">

        <?php ?>
    </form>
</body>

</html>
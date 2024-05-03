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
    if(!empty($_REQUEST['action']))
    if(!empty($_GET['id']))
    {
        $conn = mysqli_connect("localhost","root","root","brasil");
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
    
    ?>
    <form action="pessoa_save_update.php" enctype="multipart/form-data" method="post">
        <label for="">Código</label>
        <input type="text" name="id" readonly="1" style="width:30%" value="<?=$id?>">

        <label for="">Nome</label>
        <input type="text" name="nome" style="width:50%" value="<?=$nome?>">
        
        <label for="">Endereço</label>
        <input type="text" name="endereco" style="width:50%" value="<?=$endereco?>">
        
        <label for="">Bairro</label>
        <input type="text" name="bairro" style="width:25%" value="<?=$bairro?>">
        
        <label for="">Telefone</label>
        <input type="text" name="telefone" style="width:25%" value="<?=$telefone?>">
        
        <label for="">Email</label>
        <input type="text" name="email" style="width:25%" value="<?=$email?>">
        
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
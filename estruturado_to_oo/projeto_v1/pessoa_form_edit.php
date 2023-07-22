<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de pessoa</title>
    <link href="./css/style.css" rel="stylesheet" type="text/css" media="screen"/>
</head>
<body>
    <?php
        if (!empty($_GET['id'])) {
            $id = (int) $_GET['id'];
            $conn = pg_connect('host=localhost port=5432 dbname=livro user=postgres password=admin');
            
            $result = pg_query($conn, "SELECT * FROM pessoa WHERE id = '{$id}';");
            
            $pessoa = pg_fetch_assoc($result);
            
            $result = pg_query($conn, "SELECT nome FROM cidade WHERE id = '{$pessoa['id_cidade']}';");
            $nome_cidade = pg_fetch_assoc($result)['nome'];
        }
    ?>
        <form enctype="multipart/form-data" method="post" action="pessoa_save_update.php">
        <label>Código</label>
        <input name="id" readonly="1" type="text" style="width: 30%;" value="<?=$id?>">
            
        <label>Nome</label>
        <input name="nome" type="text" style="width: 50%;" value="<?=$pessoa['nome']?>">
            
        <label>Endereço</label>
        <input name="endereco" type="text" style="width: 50%;" value="<?=$pessoa['endereco']?>">
            
        <label>Bairro</label>
        <input name="bairro" type="text" style="width: 25%;" value="<?=$pessoa['bairro']?>">
            
        <label>Telefone</label>
        <input name="telefone" type="text" style="width: 25%;" value="<?=$pessoa['telefone']?>">
            
        <label>Email</label>
        <input name="email" type="text" style="width: 25%;" value="<?=$pessoa['email']?>">
            
        <label>Cidade</label>
        <select name="id_cidade" style="width: 25%;">

        <?php
            require_once 'lista_cidades.php';
            print lista_combo_cidades($pessoa['id_cidade']);
        ?>

        </select>
            
            
        <input type="submit" value="Salvar">
    </form>
    
    <button onclick="window.location='pessoa_list.php'" style="display: flex; justify-content: center;">
        <img src="./images/list.png" style="width: 17px; margin-right: 5px;"> Listagem
    </button>
</body>
</html>
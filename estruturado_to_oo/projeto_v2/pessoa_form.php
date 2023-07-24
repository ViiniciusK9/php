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
        $id = '';
        $nome = '';
        $endereco = '';
        $bairro = '';
        $telefone = '';
        $email = '';
        $id_cidade = '';
        if (!empty($_REQUEST['action']) and $_REQUEST['action'] == 'edit')
        {
            if (!empty($_GET['id'])) {
                $id = (int) $_GET['id'];
                $conn = pg_connect('host=localhost port=5432 dbname=livro user=postgres password=admin');
                
                $result = pg_query($conn, "SELECT * FROM pessoa WHERE id = '{$id}';");
                
                $pessoa = pg_fetch_assoc($result);
                
                $result = pg_query($conn, "SELECT nome FROM cidade WHERE id = '{$pessoa['id_cidade']}';");
                $nome_cidade = pg_fetch_assoc($result)['nome'];
                $nome = $pessoa['nome'];
                $endereco = $pessoa['endereco'];
                $bairro = $pessoa['bairro'];
                $telefone = $pessoa['telefone'];
                $email = $pessoa['email'];
                $id_cidade = $pessoa['id_cidade'];
            }
        }
        elseif (!empty($_REQUEST['action']) and $_REQUEST['action'] == 'save')
        {
            $dados = $_POST;
            $conn = pg_connect('host=localhost port=5432 dbname=livro user=postgres password=admin');
            if (!empty($dados['id']) and is_numeric($dados['id'])) {
        
                $sql = "UPDATE pessoa SET   nome      = '{$dados['nome']}', 
                                            endereco  = '{$dados['endereco']}', 
                                            bairro    = '{$dados['bairro']}', 
                                            telefone  = '{$dados['telefone']}', 
                                            email     = '{$dados['email']}', 
                                            id_cidade = '{$dados['id_cidade']}' WHERE id = {$dados['id']};";
            
                $result = pg_query($conn, $sql);
            }
            else 
            {
                $result = pg_query($conn, "SELECT max(id) as next FROM pessoa;");

                $row = pg_fetch_assoc($result);

                $next = (int) $row['next'] + 1;

                $sql = "INSERT INTO pessoa( id, nome, endereco, bairro, telefone, email, id_cidade) 
                                    VALUES ('{$next}', 
                                            '{$dados['nome']}', 
                                            '{$dados['endereco']}', 
                                            '{$dados['bairro']}', 
                                            '{$dados['telefone']}', 
                                            '{$dados['email']}', 
                                            '{$dados['id_cidade']}');";

                $result = pg_query($conn, $sql);
            }

            if ($result)
            {
                print "Registro salvo com sucesso!";
            }
            else
            {
                print pg_last_error($conn);
            }
        
            pg_close($conn);
        }
    ?>
        <form enctype="multipart/form-data" method="post" action="pessoa_form.php?action=save">
        <label>Código</label>
        <input name="id" readonly="1" type="text" style="width: 30%;" value="<?=$id?>">
            
        <label>Nome</label>
        <input name="nome" type="text" style="width: 50%;" value="<?=$nome?>">
            
        <label>Endereço</label>
        <input name="endereco" type="text" style="width: 50%;" value="<?=$endereco?>">
            
        <label>Bairro</label>
        <input name="bairro" type="text" style="width: 25%;" value="<?=$bairro?>">
            
        <label>Telefone</label>
        <input name="telefone" type="text" style="width: 25%;" value="<?=$telefone?>">
            
        <label>Email</label>
        <input name="email" type="text" style="width: 25%;" value="<?=$email?>">
            
        <label>Cidade</label>
        <select name="id_cidade" style="width: 25%;">

        <?php
            require_once 'lista_cidades.php';
            print lista_combo_cidades($id_cidade);
        ?>

        </select>
            
            
        <input type="submit" value="Salvar">
    </form>
    
    <button onclick="window.location='pessoa_list.php'" style="display: flex; justify-content: center;">
        <img src="./images/list.png" style="width: 17px; margin-right: 5px;"> Listagem
    </button>
</body>
</html>
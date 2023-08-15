<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Listagem de pessoas</title>
    <link href="./css/style_list.css" rel="stylesheet" type="text/css" media="screen">
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
                $conn = pg_connect('host=localhost port=5432 dbname=livro user=postgres password=admin');

                
                if (!empty($_GET['action']) and $_GET['action'] == 'delete' and !empty($_GET['id']))
                {
                    $id = (int) $_GET['id'];
                    
                    $sql = "DELETE FROM pessoa WHERE id = '{$id}';";
                    
                    $result = pg_query($conn, $sql);
                }
                
                $result = pg_query($conn, "SELECT * FROM pessoa ORDER BY id;");
                while ($row = pg_fetch_assoc($result))
                {
                    print "<tr>";
                    print "<td><a href='pessoa_form.php?action=edit&id={$row['id']}'/> <img src='./images/editar.png' style='width: 17px;' ></td>";
                    print "<td><a href='pessoa_list.php?action=delete&id={$row['id']}'/> <img src='./images/excluir.png' style='width: 17px;' ></td>";
                    print "<td>{$row['id']}</td>";
                    print "<td>{$row['nome']}</td>";
                    print "<td>{$row['endereco']}</td>";
                    print "<td>{$row['bairro']}</td>";
                    print "<td>{$row['telefone']}</td>";
                    print "</tr>";
                }
            
                pg_close($conn);
            ?>
        </tbody>
    </table>
    <button onclick="window.location='pessoa_form.php'" style="display: flex; justify-content: center;">
        <img src="./images/insert.png" style="width: 17px; margin-right: 5px;"> Inserir
    </button>

</body>
</html>
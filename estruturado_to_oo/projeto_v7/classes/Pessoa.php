<?php

class Pessoa
{
    private static $conn;

    public static function getConnection()
    {
        if (empty(self::$conn))
        {
            $ini = parse_ini_file('./config/livro.ini');

            $host     = $ini['host'];
            $dbname   = $ini['dbname'];
            $user     = $ini['user'];
            $password = $ini['password'];

            self::$conn = new PDO("pgsql:dbname={$dbname};user={$user};password={$password};host={$host}");
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$conn;
    }

    public static function find($id)
    {
        $conn = self::getConnection();

        $result = $conn->prepare("SELECT * FROM pessoa WHERE id=:id");
        $result->execute([':id' => $id]);

        return $result->fetch();
    }

    public static function delete($id)
    {
        $conn = self::getConnection();

        $result = $conn->prepare("DELETE FROM pessoa WHERE id=:id");
        $result->execute([':id' => $id]);
        return $result;
    }

    public static function all()
    {
        $conn = self::getConnection();

        $result = $conn->query("SELECT * FROM pessoa ORDER BY id");
        return $result->fetchAll();
    }

    public static function save($pessoa)
    {
        $conn = self::getConnection();

        if (empty($pessoa['id'])) 
        {
            $result = $conn->query("SELECT max(id) as next FROM pessoa");
            $row = $result->fetch();
            $pessoa['id'] = (int) $row['next'] + 1;
            $sql = "INSERT INTO pessoa( id, nome, endereco, bairro, telefone, email, id_cidade) 
                            VALUES (:id, 
                                    :nome, 
                                    :endereco, 
                                    :bairro, 
                                    :telefone, 
                                    :email, 
                                    :id_cidade);";
        }
        else
        {
            $sql = "UPDATE pessoa SET   nome      = :nome, 
                                        endereco  = :endereco, 
                                        bairro    = :bairro, 
                                        telefone  = :telefone, 
                                        email     = :email, 
                                        id_cidade = :id_cidade WHERE id = :id";
        }
        $result = $conn->prepare($sql);
        $result->execute([ ':id' => $pessoa['id'], ':nome' => $pessoa['nome'], ':endereco' => $pessoa['endereco'], ':bairro' => $pessoa['bairro'], ':telefone' => $pessoa['telefone'], ':email' => $pessoa['email'], ':id_cidade' => $pessoa['id_cidade']]);
    }
}




?>
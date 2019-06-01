<?php
class Pessoa {
    
    public static function save($pessoa) {
        $username = 'root';
        $password = '';
        $conn = new PDO('mysql:host=localhost;dbname=livro', $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        if(empty($pessoa['id'])) {
            $result = $conn->query("SELECT max(id) as last_id FROM pessoa");
            $row = $result->fetch();
            $pessoa['id'] = (int) $row['last_id'] +1;
            $sql = "INSERT INTO pessoa (id, nome, endereco, bairro,
            telefone, email, id_cidade)
            VALUES ( '{$pessoa['id']}', '{$pessoa['nome']}', '{$pessoa['endereco']}',
            '{$pessoa['bairro']}', '{$pessoa['telefone']}',
            '{$pessoa['email']}', '{$pessoa['id_cidade']}'
            )";  
            //print_r($sql); exit;
        }else {
            $sql = "UPDATE pessoa SET nome = '{$pessoa['nome']}',
            endereco = '{$pessoa['endereco']}',
            bairro = '{$pessoa['bairro']}',
            telefone = '{$pessoa['telefone']}',
            email = '{$pessoa['email']}',
            id_cidade = '{$pessoa['id_cidade']}'
            WHERE id = '{$pessoa['id']}'";
        }
        return $conn->query($sql);
    }
    public static function find($id) {
        $username = 'root';
        $password = '';
        $conn = new PDO('mysql:host=localhost;dbname=livro', $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $result = $conn->query("SELECT * FROM pessoa WHERE id='{$id}'");
        return $result->fetch();
    }
    
    public static function delete($id)
    {
        $username = 'root';
        $password = '';
        $conn = new PDO('mysql:host=localhost;dbname=livro', $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $result = $conn->query("DELETE FROM pessoa WHERE id='{$id}'");
        return $result;
    }
      
    public static function all(){
        $username = 'root';
        $password = '';
        $conn = new PDO('mysql:host=localhost;dbname=livro', $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $result = $conn->query("SELECT * FROM pessoa ORDER BY id");
        //return $result->fetchAll();
        return $result->fetchAll();
    }
}
?>
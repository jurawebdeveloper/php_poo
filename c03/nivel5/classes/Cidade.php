<?php
class Cidade {
    public static function all()
  {
    $username = 'root';
        $password = '';
        $conn = new PDO('mysql:host=localhost;dbname=livro', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $result = $conn->query("SELECT * FROM cidade");
    return $result->fetchall();
  }
}
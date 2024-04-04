<?php 
  define('HOST', 'localhost');
  define('USERNAME', 'root');
  define('PASSWORD', '');
  define('DBNAME', 'cadastro2');

  $conn = new MySQLi(HOST, USERNAME, PASSWORD, DBNAME);
  if ($conn->connect_error) {
    die('A conexão falhou' .$conn->connect_error);
  }

?>
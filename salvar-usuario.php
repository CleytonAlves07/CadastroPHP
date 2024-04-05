<?php 
  switch ($_REQUEST['acao']) {
    case 'cadastrar':
      $nome = $_POST['nome'];
      $email = $_POST['email'];
      $senha = md5($_POST['senha']);
      $data_nasc = $_POST['data_nasc'];

      $sql = "INSERT INTO usuarios (nome, email, senha , data_nasc) 
      VALUES ('{$nome}','{$email}','{$senha}','{$data_nasc}')";

      $res = $conn->query($sql);

      if($res==true){
        print "<script> alert('Usuário cadastrado com sucesso!')</script>";
        print "<script>location.href='?page=listar'</script>";
      } else {
        print "<script> alert('Ocorreu um erro: Usuário não cadastrado!')</script>";
        print "<script>location.href='?page=listar'</script>";
      }
      break;
    case 'editar':
      $nome = $_REQUEST["nome"];
      $email = $_REQUEST["email"];
      $data_nasc = $_REQUEST["data_nasc"];
      $id = $_REQUEST["id"];
      $id = trim($id, '.');

      $sql = "UPDATE usuarios SET nome='{$nome}', email='{$email}', data_nasc='{$data_nasc}' WHERE id=$id";

      $res = $conn->query($sql);

      if ($res == true) {
        print "<script>alert('Usuário atualizado com sucesso!')</script>";
        print "<script>location.href='?page=listar'</script>";
      } else {
        print "<script>alert('Ocorreu um erro!')</script>";
        print "<script>location.href='?page=listar'</script>";
      };

      break;

    case 'excluir':
      $id = $_REQUEST['id'];
      $sql = "DELETE FROM usuarios WHERE id=$id";

      $res = $conn->query($sql);

      if ($res == true) {
        print "<script>alert('Usuário excluído com sucesso!')</script>";
        print "<script>location.href='?page=listar'</script>";
      } else {
        print "<script>alert('Ocorreu um erro!')</script>";
        print "<script>location.href='?page=listar'</script>";
      };

      break;
  }


?>
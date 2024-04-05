<h3 class="d-flex justify-content-center">Listar usuários</h3>

<?php 
  $sql = "SELECT * FROM usuarios";

  $res = $conn->query($sql);

  $qtd = $res->num_rows;

  if ($qtd > 0) {

    print "<p class='alert alert-success'>Resultados encontrados: <b>$qtd</b> </p>";

    print "<table class='table table-hover table-striped table-bordered'>";
    print "<tr>";
    print "<th>Nº</th>";
    print "<th>id</th>";
    print "<th>nome</th>";
    print "<th>email</th>";
    print "<th>data_nasc</th>";
    print "<th>modificar</th>";
    print "</tr>";


    $count = 1;
    while ($row = $res->fetch_object()) {
      print "<tr>";
      print "<td>" . $count . "</td>";
      print "<td>" . $row->id . "</td>";
      print "<td>" . $row->nome . "</td>";
      print "<td>" . $row->email . "</td>";
      print "<td>" . $row->data_nasc . "</td>";
      print "<td>
              <button onclick=\"location.href='?page=editar&id=".$row->id. "';\" class='btn btn-primary'><i class='fas fa-pencil-alt'></i>     editar</button>
              <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=" . $row->id . "';}else{false;}\" 
              class='btn btn-danger'>excluir   <i class='fas fa-trash fa-lg'></i></button>
            </td>";
      $count++;

    }
  } else {
    print "<div class='alert alert-danger'>Nenhum usuário foi encontrado!</div>";
  }

?>
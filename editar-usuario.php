<h3 class="d-flex justify-content-center">Editar usuário</h3>

<?php
$id = $_REQUEST['id'];
$sql = "SELECT * FROM usuarios WHERE id=$id";
$res = $conn->query($sql);
$row = $res->fetch_object();

?>
<form action="?page=salvar" method="POST">
  <input type="hidden" name="acao" value="editar">
  <input type="hidden" name="id" value="<?php print $id; ?>">
  <div class="mb-3">
    <label>Nome</label>
    <input type="text" name="nome" value="<?php print $row->nome; ?>" class='form-control'>
  </div>
  <div class="mb-3">
    <label>Email</label>
    <input type="text" name="email" value="<?php print $row->email ?>" class="form-control">
  </div>
  <div class="mb-3">
    <label>Password</label>
    <input type="password" name="password" class="form-control" required>
  </div>
  <div class="mb-3">
    <label>Data de Nascimento</label>
    <input type="date" name="data_nasc" value="<?php print $row->data_nasc ?>" class="form-control">
  </div>
  <div class="mb-3">
    <button type="submit" class="btn btn-primary">Editar <i class='fas fa-pencil-alt'></i></button>
  </div>

</form>
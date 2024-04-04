<h3 class="d-flex justify-content-center">Cadastrar usuário</h3>

<form action="?page=salvar" method="POST" class="container">
  <input type="hidden" name="acao" value="cadastrar">
  <div class="mb-3">
    <label class="form-label">Nome</label>
    <input type="text" class="form-control" name="nome" aria-describedby="nameHelp" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" name="password" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Data nascimento</label>
    <input type="date" class="form-control" name="data_nasc" required>
  </div>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
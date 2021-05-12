<main>

<h2 class="mt-3">Remover Aluno</h2>

<form method="post">

  <div class="form-group">
    <p>Você deseja realmente remover <strong><?=$obAluno->nome?></strong> da turma?</p>
  </div>

  <div class="form-group">
    <button type="submit" name="excluir" class="btn btn-danger">Excluir</button>
    <a href="listagemAlunos.php">
      <button type="button" class="btn btn-secondary">Cancelar</button>
    </a>
  </div>

</form>

</main>
<main>

  <h2 class="mt-3"><?=TITLE?></h2>

  <form method="post">

    <div class="form-group mt-2">
      <label>Nome</label>
      <input type="text" class="form-control" name="nome" value="<?=$obAluno->nome?>">
    </div>

    <div class="form-group mt-2">
      <label>Matrícula</label>
      <input type="text" class="form-control" name="matricula" value="<?=$obAluno->nome?>">
    </div>
    
    <div class="form-group mt-2">
      <label>Turma</label>
      <input type="text" class="form-control" name="turma" value="<?=$obAluno->turma?>">
    </div>

    <div class="form-group mt-2">
      <label>Natureza da disciplina</label>
      <input type="text" class="form-control" name="tipoDisciplina" value="<?=$obAluno->tipoDisciplina?>">
    </div>

    <div class="form-group mt-3">
      <button type="submit" class="btn btn-primary">Enviar</button>
      <a href="aluno.php" >
        <button class="btn btn-secondary">Voltar</button>
        </a>
    </div>

  </form>

</main>
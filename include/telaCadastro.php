<main>
    <h1 class="mt-3">Cadastro</h1>
    <form method="post">
            <div class="form-group mt-3">
                <label>Nome</label>
                <input type="test" class="form-control" name="nome">
            </div>

            <div class="form-group mt-2">
                <label>Matrícula</label>
                <input type="test" class="form-control" name="matricula">
            </div>

            <div class="form-group mt-2">
                <label>Turma</label>
                <input type="test" class="form-control" name="matricula">
            </div>

            <div class="form-group mt-2">
                <label>Senha</label>
                <input type="password" class="form-control" id="inputPassword">
            </div>

            <div class="mt-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="Monitor" checked>
                        <label class="form-check-label" for="exampleRadios1">Monitor</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="Tutor" checked>
                    <label class="form-check-label" for="exampleRadios2">Tutor</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="Professor" checked>
                    <label class="form-check-label" for="exampleRadios3">Professor</label>
                </div>
            </div>

            <div class="btn container form-group">
                <button class="btn btn-secondary mt-3" type="submit">Enviar</button>                
            </div>
        </form>
        <div class="btn container form-group">
            <a href="index.php">
                <button class="btn btn-secondary mt-2">Voltar</button>
            </a>
        </div>
</main>

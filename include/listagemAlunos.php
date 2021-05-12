
<main>
    <?=$mensagem?>
    <h4 class="mt-3">Tabela de alunos</h4>
    <section>
        <table class="table table-striped table-secondary mt-3">

            <thead class="thead-dark justify-content-center">

                <tr class="justify-content-center">
                    <th scope="col">id</th>
                    <th scope="col">Matrícula</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Natureza</th>
                    <th scope="col"></th>
                </tr>

            </thead>
            <tbody class="tbody-light">
                <?=$resultados?>
            </tbody>
        </table>
    </section>
        <div class="btn container">
            <a href="cadastroAluno.php">
                <button class="btn btn-secondary">Novo Aluno</button>
            </a>
        </div>   
</main>
<main>
    <h1 class="mt-3">Dúvida rápida</h1>
        <form method="post">
            <div class="form-group">
                <label>Assunto</label>
                <input type="test" class="form-control" name="assunto" rows="2">
            </div>

            <div class="form-group mt-2">
                <label>Matrícula</label>
                <input type="test" class="form-control" name="matricula">
            </div>
            
            <div class="form-group mt-2">
                <label>Descrição</label>
                <textarea class="form-control" name="descricao" rows="8"></textarea>
            </div>
            
            <div class="form-group mt-3">
                <input type="file" name="arquivo"/>
            </div>      
            
            <div class="form-group">
                    <button class="btn btn-secondary mt-4" type="submit">Enviar</button>
                    <a href="agendar.php">
                    <button class="btn btn-secondary mt-4">Voltar</button>
                </a>
            </div>    
        </form>
        
        <section>
            <a href="agendar.php">
                    <button class="btn btn-secondary mt-4">Voltar</button>
                </a>
        </section>   
</main>
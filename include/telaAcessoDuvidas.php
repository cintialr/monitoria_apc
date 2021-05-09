<?php
    $resultados = '';
    foreach($duvidas as $duvida){ /* cada posição de duvidas vai ser transformado em uma duvida*/
        /* concatenando os resultados */
        $resultados .= '<tr class="tr justify-content-center"> 
                        <td>'.$duvida->id.'</td>    
                        <td>'.$duvida->matricula.'</td>
                        <td>'.$duvida->assunto.'</td>
                        <td>'.$duvida->descricao.'</td>
                        <td>'.$duvida->arquivo.'</td>
                        <td>'.date('d/m/Y à\s H:i:s',strtotime($duvida->dataDuvida)).'</td>
                        <td>
                            <a href="responderDuvida.php">
                                <button type="button" class="btn btn-primary">Responder</button>
                            </a>
                            <a href="excluir.php">
                                <button type="button" class="btn btn-danger">Excluir</button>
                            </a>
                        </td>
                    </tr>';
    }
  
?>
<main>
    <h4 class="mt-3">Acesso as dúvidas dos alunos</h4>

    <section>
        <table class="table table-striped table-secondary mt-3">

            <thead class="thead-dark justify-content-center">

                <tr class="justify-content-center">
                    <th scope="col">Número</th>
                    <th scope="col">Matrícula</th>
                    <th scope="col">Assunto</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Arquivo</th>
                    <th scope="col">Data de recebimento</th>
                    <th scope="col"></th>
                </tr>

            </thead>
            <tbody class="tbody-light">
                <?=$resultados?>
            </tbody>
        </table>
    </section>
</main>
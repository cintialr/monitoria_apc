<?php
    $mensagem = '';
    if(isset($_GET['status'])){
      switch ($_GET['status']) {
        case 'success':
          $mensagem = '<div class="alert alert-success">Ação executada com sucesso!</div>';
          break;
  
        case 'error':
          $mensagem = '<div class="alert alert-danger">Ação não executada!</div>';
          break;
      }
    }
  
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
                            <a href="editar.php?id='.$duvida->id.'">
                            <button type="button" class="btn btn-primary">Responder</button>
                            </a>
                            <a href="excluirDuvida.php?id='.$duvida->id.'">
                                <button type="button" class="btn btn-danger">Excluir</button>
                            </a>
                        </td>
                    </tr>';
    }
  
?>
<main>
    <?=$mensagem?>
    <h4 class="mt-3">Acesso as dúvidas dos alunos</h4>

    <section>
        <table class="table table-striped table-secondary mt-3">

            <thead class="thead-dark justify-content-center">

                <tr class="justify-content-center">
                    <th scope="col">Id</th>
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
    <div class="btn container ">
            <a href="criarTurma.php">
                <button class="btn btn-secondary">Voltar</button>
            </a>
    </div>
</main>
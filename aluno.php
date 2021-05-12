<?php
    require __DIR__.'/vendor/autoload.php';
    
    use \App\Entity\Aluno;
    use \App\Entity\Turma;

    $alunos = Aluno::getAlunos();

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
    foreach ($alunos as $aluno){/* cada posição de alunos vai ser transformado em um aluno*/
        /* concatenando os resultados */
        $resultados .= '<tr class="tr justify-content-center">                           
                            <td>'.$aluno->id.'</td>
                            <td>'.$aluno->matricula.'</td>
                            <td>'.$aluno->nome.'</td>
                            <td>'.$aluno->tipoDisciplina.'</td>
                            <td>
                                <a href="editarAluno.php?id='.$aluno->id.'">
                                    <button type="button" class="btn btn-primary">Editar</button>
                                </a>
                                <a href="excluirAluno.php?id='.$aluno->id.'">
                                    <button type="button" class="btn btn-danger">Remover</button>
                                </a>
                            </td>
                      </tr>';
    }
    include __DIR__.'/include/header.php';
    include __DIR__.'/include/listagemAlunos.php';
    include __DIR__.'/include/footer.php';
?>

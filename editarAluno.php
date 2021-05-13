<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Editar Aluno');

use \App\Entity\Aluno;


//VALIDAÇÃO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
  header('location: aluno.php?status=error');
  exit;
}

//CONSULTA O ALUNO
$obAluno = Aluno::getAluno($_GET['id']);

//VALIDAÇÃO DE ALUNO
if(!$obAluno instanceof Aluno){
  header('location: aluno.php?status=error');
  exit;
}

//VALIDAÇÃO DO POST
if(isset($_POST['nome'],$_POST['matricula'],$_POST['tipoDisciplina'])){
        $obAluno->matricula = $_POST['matricula'];
        $obAluno->nome = $_POST['nome'];
        $obAluno->tipoDisciplina = $_POST['tipoDisciplina'];
        $obAluno->turma = $_POST['turma'];
        $obAluno->atualizar();

  header('location: aluno.php?status=success');
  exit;
}
    include __DIR__.'/include/header.php';
    include __DIR__.'/include/formularioAluno.php';
    include __DIR__.'/include/footer.php';
?>

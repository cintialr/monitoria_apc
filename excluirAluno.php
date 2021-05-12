<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Aluno;

//VALIDAÇÃO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
  header('location: aluno.php?status=error');
  exit;
}

//CONSULTA A VAGA
$obAluno = Aluno::getAluno($_GET['id']);

//VALIDAÇÃO DA VAGA
if(!$obAluno instanceof Aluno){
  header('location: aluno.php?status=error');
  exit;
}

//VALIDAÇÃO DO POST
if(isset($_POST['excluir'])){

  $obAluno->removeAluno();

  header('location: aluno.php?status=success');
  exit;
}

include __DIR__.'/include/header.php';
include __DIR__.'/include/telaExcluirAluno.php';
include __DIR__.'/include/footer.php';

?>
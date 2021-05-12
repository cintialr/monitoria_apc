<?php
    require __DIR__.'/vendor/autoload.php';

    define('TITLE', 'Novo aluno');
    
    use \App\Entity\Aluno;

    $obAluno = new Aluno;

    if(isset($_POST['matricula'], $_POST['nome'], $_POST['tipoDisciplina'])){
        $obAluno->matricula         = $_POST['matricula'];
        $obAluno->nome              = $_POST['nome'];
        $obAluno->tipoDisciplina    = $_POST['tipoDisciplina'];
        $obAluno->novoAluno();

        header('location: aluno.php?status=success');
        exit;
    }
    
    include __DIR__.'/include/header.php';
    include __DIR__.'/include/formularioAluno.php';
    include __DIR__.'/include/footer.php';
?>

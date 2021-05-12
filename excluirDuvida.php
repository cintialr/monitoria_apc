<?php

    require __DIR__.'/vendor/autoload.php';

    use App\Entity\Duvida;

    //VALIDAÇÃO DO ID
    if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
        header('location: acessoDuvidas.php?status=error2');
        exit;
    }

    //CONSULTA A VAGA
    $obDuvida = Duvida::getDuvida($_GET['id']);

    //VALIDAÇÃO DA VAGA
    if(!$obDuvida instanceof Duvida){
        header('location: acessoDuvidas.php?status=error1');
        exit;
    }

    //VALIDAÇÃO DO POST
    if(isset($_POST['excluir'])){

        $obDuvida->excluir();

        header('location: acessoDuvidas.php?status=success');
        exit;
    }

    include __DIR__.'/include/header.php';
    include __DIR__.'/include/telaExcluirDuvida.php';
    include __DIR__.'/include/footer.php';
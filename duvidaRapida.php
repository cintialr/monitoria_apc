<?php

    require __DIR__.'/vendor/autoload.php';

    use \App\Entity\Duvida;

     /* Verifica se os campos obrigatórios estão preenchidos. O campo de envio de
     arquivo é opcional */
    
    if(isset($_POST['assunto'], $_POST['matricula'], $_POST['descricao'])){

        $obDuvida = new Duvida;
        $obDuvida->assunto = $_POST['assunto'];
        $obDuvida->matricula = $_POST['matricula'];
        $obDuvida->descricao = $_POST['descricao'];
        $obDuvida->arquivo = $_POST['arquivo'];
        $obDuvida->enviarDuvida();
        
        header('location: index.php?status=success');
        exit;
    }

    include __DIR__.'/include/header.php';
    include __DIR__.'/include/telaDuvidaRapida.php';
    include __DIR__.'/include/footer.php';


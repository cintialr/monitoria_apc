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
        $obDuvida->enviarDuvida();
        

        if(isset($_FILES['arquivo'])){
            $obDuvida = new Duvida($_FILES['arquivo']);
            $obDuvida->arquivo = $_FILES['arquivo'];
        }
        
        header('location: index.php?status=success');
        exit;
    }

    include __DIR__.'/include/header.php';
    include __DIR__.'/include/telaDuvidaRapida.php';
    include __DIR__.'/include/footer.php';


<?php
    require __DIR__.'/vendor/autoload.php';
    /* verifica se os cmapos estão chegando, para começar a mandar para a db
    print_r($_POST);*/

    use app\Entity\Duvida;

     /* Verifica se os campos obrigatórios estão preenchidos. O campo de envio de 
     arquivo é opcional */
    if(isset($_POST['assunto'], $_POST['matricula'], $_POST['descricao'])){
         //error
        $obDuvida = new Duvida();
        $obDuvida->assunto = $_POST['assunto'];
        $obDuvida->matricula = $_POST['matricula'];
        $obDuvida->descricao = $_POST['descricao'];
        $obDuvida->arquivo = $_POST['arquivo'];
        $obDuvida->enviarDuvida();
        
        print_r($obDuvida); 
    }

    include __DIR__.'/include/header.php';
    include __DIR__.'/include/telaDuvidaRapida.php';
    include __DIR__.'/include/footer.php';
?>
<?php
                    
    require __DIR__.'/vendor/autoload.php';

    use \App\Entity\Monitor;
    
    if(isset($_POST['acao'])){
        print_r($_POST);
    }
    if(isset($_POST['nome'], $_POST['matricula'], $_POST['turma'], $_POST['senha'])){
                $obMonitor = new Monitor;
                $obMonitor->nome = $_POST['nome'];
                $obMonitor->matricula = $_POST['matricula'];
                $obMonitor->turma = $_POST['turma'];
                $obMonitor->senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    }

    include __DIR__.'/include/header.php';
    include __DIR__.'/include/telaMonitor.php';
    include __DIR__.'/include/footer.php';

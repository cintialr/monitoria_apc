<?php

use \App\Entity\Usuario;
use \App\Session\Login;
use \App\Entity\Professor;
use \App\Entity\Monitor;
use \App\Entity\Tutor;



require __DIR__.'/vendor/autoload.php';

    /* Obriga o usuário a está logado */
    //Login::requireLogin();

    if(isset($_POST['matricula'], $_POST['senha'])){
        if(isset($_POST['nome'], $_POST['matricula'], $_POST['turma'], $_POST['senha'])){
            switch($_POST['funcao']){
                case 'professor':
                    $obProfessor = new Professor;
                    $obProfessor->nome = $_POST['nome'];
                    $obProfessor->matricula = $_POST['matricula'];
                    $obProfessor->turma = $_POST['turma'];   
                break;

                case 'monitor':
                    $obMonitor = new Monitor;
                    $obMonitor->nome = $_POST['nome'];
                    $obMonitor->matricula = $_POST['matricula'];
                    $obMonitor->turma = $_POST['turma'];
                    
                break;

                case 'tutor':
                    $obTutor = new Tutor;
                    $obTutor->nome = $_POST['nome'];
                    $obTutor->matricula = $_POST['matricula'];
                    $obTutor->turma = $_POST['turma'];
                break;
            }   
        }             
    }

    include __DIR__.'/include/header.php';
    include __DIR__.'/include/telaLogin.php';
    include __DIR__.'/include/footer.php';
?>

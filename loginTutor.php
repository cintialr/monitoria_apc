<?php
                    
    require __DIR__.'/vendor/autoload.php';

    use \App\Entity\Tutor;

    if(isset($_POST['nome'], $_POST['matricula'], $_POST['turma'], $_POST['senha'])){
        $obTutor = new Tutor;
        $obTutor->nome = $_POST['nome'];
        $obTutor->matricula = $_POST['matricula'];
        $obTutor->turma = $_POST['turma'];   
        $obTutor->senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
        print_r('$obTutor');
        
    }

    include __DIR__.'/include/header.php';
    include __DIR__.'/include/telaTutor.php';
    include __DIR__.'/include/footer.php';

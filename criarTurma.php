<?php
                    
    require __DIR__.'/vendor/autoload.php';

    use \App\Entity\Turma;

    if(isset($_POST['turma'], $_POST['horario'], $_POST['diaDaSemana'])){
                $obTurma = new Turma;
                $obTurma->turma = $_POST['turma'];   
                $obTurma->horario = $_POST['horario'];   
                $obTurma->diaDaSemana = $_POST['diaDaSemana'];   
                $obTurma->criarTurma();

        header('location: criarTurma.php?status=success');
        exit;

    }
    

    include __DIR__.'/include/header.php';
    include __DIR__.'/include/telaCriaTurma.php';
    include __DIR__.'/include/footer.php';

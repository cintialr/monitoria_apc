<?php
    require __DIR__.'/vendor/autoload.php';

    use \App\Entity\Duvida;

    $duvidas = Duvida::getDuvida();

    include __DIR__.'/include/header.php';
    include __DIR__.'/include/telaAcessoDuvidas.php';
    include __DIR__.'/include/footer.php';
?>

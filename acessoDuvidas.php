<?php
    require __DIR__.'/vendor/autoload.php';

    use \App\Entity\Duvida;

    $duvidas = Duvida::getDuvidas();

    include __DIR__.'/include/header.php';
    include __DIR__.'/include/telaAcessoDuvidas.php';
    include __DIR__.'/include/footer.php';
?>

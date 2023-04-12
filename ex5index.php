    <?php


    require_once 'ex5.php';

    $novocarro = new  Carro('vw','fox','2012' );


    echo $novocarro->recuperamarca();
    echo $novocarro->recuperaano();
    echo $novocarro->recuperamodelo();
    echo $novocarro->acelerar(10);
    echo $novocarro->acelerar(10);
    echo $novocarro->acelerar(50);



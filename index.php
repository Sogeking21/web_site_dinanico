<?php


$paginas = ["Home"=>"Minha pagina aqui","Sobre"=>"Estou na paginas sobre","Contato"=>"Estou na pagina de contato"];


?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <?php
    foreach($paginas as $key => $value){
        echo '<a href="?page='.$key.'">'.ucfirst($key).'</a>';
    }
    ?>
    </header>
    <section>
    <h2> <?php
    $pagina = (isset($_GET['page'])?  $_GET['page']: 'Home');
    if(!array_key_exists($pagina, $paginas)){
        $pagina = 'Home';
    }
    echo $pagina;
    ?></h2>
    <p><?php echo $paginas[$pagina]; ?></p>
    </section>
</body>
</html>
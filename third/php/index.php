<?php
    include('libreria/screen.php');
    include('libreria/laws.php');
    include('libreria/lawOne.php');
    include('libreria/lawTwo.php');
    include('libreria/lawThree.php');
    $laws = new Laws("First law", 10, "");
    $screen = new Screen();
    $screen->setLaws($laws);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo 'Nombre de la ley: '.$screen->getLaws()->getName();
    echo '<br>';
    echo 'Fuerza: '.$screen->getLaws()->getForce();
    echo '<br>';
    echo 'Descripción: '.$screen->getLaws()->getDescription();
    echo '<br>';
    echo '<br>';
    echo $screen->getLaws()->calculate();
    ?>
</body>
</html>
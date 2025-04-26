<?php
    include('libreria/registerGymGyn.php');
    include('libreria/person.php');
    include('libreria/plan.php');
    include('libreria/basic.php');
    include('libreria/medium.php');
    include('libreria/premium.php');
    $person = new Person(12, "Andrés", "Guti", 55, 150, 1);
    $registerGym = new RegisterGym();
    $registerGym->setPerson($person);
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
    echo 'Nombres: '.$registerGym->getPerson()->getNames();
    echo '<br>';
    echo 'Apellidos: '.$registerGym->getPerson()->getLastNames();
    echo '<br>';
    echo 'Peso: '.$registerGym->getPerson()->getWeight();
    echo '<br>';
    echo 'Estatura: '.$registerGym->getPerson()->getStature();
    echo '<br>';
    echo '<br>';
    echo 'Plan: '.$registerGym->getPlan()->getName();
    echo '<br>';
    echo 'Costo: '.$registerGym->getPlan()->getCost();
    echo '<br>';
    echo 'Servicios: '.$registerGym->getPlan()->getService();
    ?>
</body>
</html>
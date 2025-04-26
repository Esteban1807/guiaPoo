<?php
    include('libreria/register.php');
    include('libreria/person.php');
    include('libreria/licenses.php');
    include('libreria/licenseA.php');
    include('libreria/licenseB.php');
    include('libreria/licenseC.php');
    $person = new Person(12, "Esteban", "Ome", "Neiva", "3188844646", "O+", "C");
    $register = new Register();
    $register->setPerson($person);
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
     echo 'Id: '.$register->getPerson()->getIdentification();
     echo '<br>';
    echo 'Nombres: '.$register->getPerson()->getName();
    echo '<br>';
    echo 'Apellidos: '.$register->getPerson()->getLastName();
    echo '<br>';
    echo 'Dirección: '.$register->getPerson()->getAddress();
    echo '<br>';
    echo 'RH: '.$register->getPerson()->getRh();
    echo '<br>';
    echo 'Teléfono: '.$register->getPerson()->getTelephone();
    echo '<br>';
    echo '<br>';
    echo 'TIPO DE LICENCIA: '.$register->getPerson()->getSelection();
    echo '<br>';
    echo '<br>';
    echo 'Costo: '.$register->getLicenses()->getCost();
    echo '<br>';
    echo 'Duración: '.$register->getLicenses()->getDuration();
    echo '<br>';
    echo 'Descripción: '.$register->getLicenses()->getDescription();
    echo '<br>';
    echo 'Total: '.$register->getLicenses()->calculate();
    ?>
</body>
</html>
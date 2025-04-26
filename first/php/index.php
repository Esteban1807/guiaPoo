<?php
    include('library/person.php');
    include('library/employe.php');
    include('library/discounts.php');
    include('library/health.php');
    include('library/pension.php');
    include('library/arl.php');
    include('library/extras.php');
    include('library/daytime.php'); 
    include('library/nighttime.php');
    include('library/holiday.php');
    $employee = new Employe(100, 40);

    $employee->addDiscounts(new Pension());
    $employee->addDiscounts(new Health());
    $employee->addDiscounts(new Arl(3));

    $employee->addExtra(new Daytime(2)); 
    $employee->addExtra(new Nighttime(3));
    $employee->addExtra(new Holiday(1));

    
    $employee->calculateSalary();
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
       echo "Subsidy: $" . number_format($employee->getSubsidy()) . "<br>";
       echo "Total Discounts: $" . number_format($employee->getTotalDiscounts()) . "<br>";
       echo "Total extras: " . number_format($employee->getTotalExtras())."<br>";
       echo "Total Salary: $" . number_format($employee->getCalculate()) . "<br>";

       
    ?>  
</body> 
</html>
<?php
    use OOP\Leader;
    use OOP\Render;
    use OOP\Programmer;
    use OOP\testas;
?>
<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verslas</title>
</head>
<body>
    <?php
    $Nulinis = new Leader('Ignas', 'IgnasLeader@gmail.com', '141');
    $Nulinis->addLocation('Lietuva');

    $Pirmas = new Programmer('Vladimar', 'Vladimar@gmail.com');
    $Pirmas->addLocation('Baltarusija');
    $Pirmas->setSalary(500);

$Antras = new testas('Jonusis','Jonusitis@gmail.com');
$Antras->addLocation ('Latvija');
$Antras->setSalary(900);
$Antras->addTask('Clean up codes');
$Antras->addTask('Clean the dishes');


    Render::PrintInfo($Nulinis->getInfo());
    echo '<br>';
    Render::PrintInfo($Pirmas->getInfo());
    echo '<br>';
    Render::PrintInfo($Antras->getInfo());
    ?>
</body>
</html>
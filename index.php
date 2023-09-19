<?php 
    require "class/Personnage.php";
    require "class/Text.php";

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
        $merlin = new Personnage("Merlin");
        $harry = new Personnage("Harry");

        var_dump($harry);

        echo "<h1>après attaque</h1>";
        $merlin->setAtk(100);
        $merlin->attaque($harry);

        var_dump($harry);

        echo "<h1>Regen</h1>";
        $harry->regenerer(120);

        var_dump($harry);

        // $test = new Text();

        // echo $test->withZero(5);

        echo Text::withZero(5);

    ?>
</body>
</html>
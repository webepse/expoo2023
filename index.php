<?php 
    require "Personnage.php";

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

        echo $merlin->crier();
        echo $merlin->crier("test");
        $harry->mort();

    ?>
</body>
</html>
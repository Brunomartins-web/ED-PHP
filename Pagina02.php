<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //criando variavel
    $nomeCompleto = "Alguém";

    echo "<p><b>Nome Completo</b>:
    $nomeCompleto => Interpolação</p>";
    echo '<p><b>Nome Completo</b>: $nomeCompleto => NÃO INTERPOLA</p>';
    
    // concatenasão - juntar as coisas 
    
    $nome = "Fulano";
    $sobrenome = "de Tal";
    ?>

    <h3><?php echo $nome . " " . $sobrenome; ?></h3>


    <?php
// Unir .=
    $a = 10;
    $b = 20;
    
    $a .= $b;

    echo $a;

    ?>

<br>
<br>

    <?php
// Somar +=
    $a = 10;
    $b = 20;
    
    $a += $b;

    echo $a;

    ?>


</body>
</html>
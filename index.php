<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TESTE</title>
</head>
<body>
   <?php
   echo "Hello Word <br> <br>";
   ?>

   <?php

   $nome = "Joao";

   echo '0lá , $nome'; // Não interbola a varavel; ( Vai imprimiir, $nome);
   
   echo "<br> <br> Olá, $nome"; // Interbola a varavel; ( Vai imprimiir, Joao);
   
   ?>

   <?php
    function quadrado() {
    global $numero;   // Variavel global, para ser usada dentro da função;
    $numero = 15 * 2;
}
quadrado();
echo "<br><br> O número ao quadrado é $numero";

    ?>

   <?php
    function somatorio() {
    static $soma = 0;     //Variavel estatica, para ser usada dentro da função, e manter o valor mesmo depois de sair da função;
    $soma = $soma + 1;
    echo "<br><br> o valor é $soma <br/>";
    }
    somatorio (1); // 1
    somatorio (2); // 2 
    somatorio (3); // 3
    ?>

    <?php
    $curso = "Curso";
    $$curso = "Tecnologia Sistemas para Internet";
    echo "E o conteúdo de curso é $curso <br>";
    ?>

    <?php
    $a = 10;
    $b = 20;
    
    if ($a > $b) {
        echo "A é maior que B";
    }
    
    ?>
</body>
</html>
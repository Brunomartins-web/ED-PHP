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
     // Estrutura de controle if
    $a = 10;
    $b = 5;

    // Estrutura de controle if
    
    if ($a > $b) {
        echo "A é maior que B";
    }
    ?>

    <?php
    // Estrutura de controle if-else

    $a = 30;
    $b =20;
    if ($a < $b) {
        echo "A é menor que B";
    } else {
        echo "A é maior ou igual a B";
    }
    ?>

    <?php
    // Exercio

    $n = 48;

    if ($n % 2 == 0) {
        echo "<br><br> O número $n é par";
    } else {
        echo "<br> O número $n é impar";
    }
    ?>

    <?php
    //Exercio 2
    
    $a = 5;
    $b = 6;

    if ($a == $b) {
        $c = $a + $b;
        echo "<br> São iguais, a soma é $c";
    } else {
        $c= $a * $b;
    }
    echo nl2br("<br><br><strong>Não são iguais</strong><br> A = $a");
    echo "<br><br> B = $b";
    echo "<br><br> Soma = $c";
    ?>

    <?php
    //Faça um script que verifique se uma letra digitada num campo de input é vogal ou consoante.

    $letra = 'A';
    $letra = strtolower(trim($letra)); // Converte a letra para minúscula
    
    if (strlen($letra) != 1 || $letra < 'a' || $letra > 'z'){
        echo "<br><br> Entrada inválida, Por favor, digite apenas uma letra. (A-Z).";
    } else{
        if ($letra == 'a' || $letra == 'e' || $letra == 'i' || $letra == 'o' || $letra == 'u') {
            echo "<br><br> A letra '$letra' é uma vogal.";
        } else {
            echo "<br><br> A letra '$letra' é uma consoante.";
        }   
    }
    
    ?>

    <?php for ($i=1;$i<=10;$i++) { ?>
        <div>
            <h2>Tabuada do <?php echo $i?></h2>

            <?php for ($j=1; $j<10; $j++){ ?>

            <span class="cor1"><?php echo $i; ?></span> x <span
            class="cor2"><?php echo $j; ?></span> = <?php echo
            $i * $j; ?> <br/>
            <?php } ?>
        </div>
        <?php } ?>
     
</body>
</html>
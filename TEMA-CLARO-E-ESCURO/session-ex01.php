<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Você visitou esta página</h1>
    <?php
    
    if(isset($_SESSION['visita'])){
        $_SESSION['visita']++;
    }
    else{
        $_SESSION['visita'] = 1;
    }
    
    ?>
</body>
</html>
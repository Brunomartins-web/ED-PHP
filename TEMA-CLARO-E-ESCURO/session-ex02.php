//<?php
session_start();

// Define tema padrão
if (!isset($_SESSION['tema'])) {
    $_SESSION['tema'] = 'claro';
}

// Atualiza tema ao clicar no botão
if (isset($_POST['tema'])) {
    $_SESSION['tema'] = $_POST['tema'];
}

// Define classe CSS baseada no tema
$tema = $_SESSION['tema'];
?> //
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tema Claro/Escuro</title>
    <style>
        body.claro {
            background-color: #ffffff;
            color: #000000;
        }
        body.escuro {
            background-color: #121212;
            color: #ffffff;
        }
        .container {
            text-align: center;
            margin-top: 100px;
        }
        button {
            padding: 10px 20px;
            margin: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body class="<?php echo $tema; ?>">

<div class="container">
    <h1>Escolha o Tema</h1>

    <form method="POST">
        <button type="submit" name="tema" value="claro">Tema Claro</button>
        <button type="submit" name="tema" value="escuro">Tema Escuro</button>
    </form>
</div>

</body>
</html>
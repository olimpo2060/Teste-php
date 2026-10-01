<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Lista de globais</h1>
    </header>
    <main>
        <pre>
            <?php
                setcookie("Semana", "Terça-Feira", time() + 3600);
                session_start();
                $_SESSION["teste"] = "FUNCIONANDO";

                echo "<h1>SuperGlobal GET</h1>";
                var_dump($_GET); // Método Get do form

                echo "<h1>POST</h1>";
                var_dump($_POST); // Método Post do form

                echo "<h1>REQUEST</h1>";
                var_dump($_REQUEST); // Requisição de vários métodos

                echo "<h1>COOKIE</h1>";
                var_dump($_COOKIE); // Informações temporárias de navegação

                ECHo "<h1>SESSION</h1>";
                var_dump($_SESSION); // Permite usar variáveis que não somem de uma página para outra

                echo "<h1>ENV</h1>";
                var_dump($_ENV); // Dados de ambiente de página

                echo "<h1>SERVER</h1>";
                var_dump($_SERVER); // Dados do servidor 

                echo "<h1>GLOBALS</h1>";
                var_dump($GLOBALS); // Todos os dados globais compilados
            ?>
        </pre>
    </main>
</body>
</html>
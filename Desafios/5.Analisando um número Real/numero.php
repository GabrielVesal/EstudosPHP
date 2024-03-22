<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    </header>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php 
            $n = $_GET["numero"] ?? 0;
            $int = intval($n);
            $fracao = $n - $int;
            print "<p>Analisando o número <strong>".number_format($n, 3, ",", ".")."</strong> informado pelo usuário:</p>";
            print "<ul><li> A parte inteira do número é <strong>". number_format($int, 0,",", ".")."</strong></li>
            <li> A parte fracionária do número é <strong>". number_format($fracao, 3, ",", ".") ."</strong></li></ul>";
        ?>
        <button onclick="javascript:history.go(-1)"><a style="color:white;"> Voltar</a></button>
    </main>
</body>
</html>
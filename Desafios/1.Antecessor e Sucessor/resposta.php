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
        <h1>Resultado Final</h1>
        <?php 
            $n = $_GET["numero"] ?? 0;
            $ant = $n - 1;
            $suc = $n + 1;
            print "<p>O número escolhido foi <strong>$n</strong></p>";
            print "<p>O seu antecessor é $ant</p>";
            print "<p>O seu sucessor é $suc</p>";
        ?>
        <button onclick="javascript:history.go(-1)"><a>◀️ Voltar</a></button>
    </main>
</body>
</html>
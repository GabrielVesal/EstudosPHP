<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sorteador de números</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <header></header>
    <main>
        <h2 style="color:black;">Trabalhando com números aleatórios</h2>
        <?php 
        print "<p>Gerando um número aleatório entre 0 e 100...</p>";
        $n = rand(0,100);
        print "<p>O valor gerado foi $n</p>";
    ?>
        <button onclick="javascript:location.assign(location.href)"><a style="color:white;">🔃 Gerar outro</a></button>
    </main>
</body>
</html>
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
        <h1>Conversor de Moedas v1.0</h1>
        <?php 
            $nrs = $_GET["valor"] ?? "Sem valor";
            $n = $nrs / 5.02;
            print "<p>Seus R$ $nrs equivalem a <strong>US$ $n</strong>*</p>";
            print "<p>*<strong>Cotação fixa de R$5,02</strong> informada diretamente no código.</p>";
        ?>
        <button onclick="javascript:history.go(-1)"><a style="color:white;">Voltar</a></button>
    </main>
</body>
</html>
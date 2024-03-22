<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de idade</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        $atual = date("Y");
        $ano1 = $_GET['v1'] ?? '2000';
        $ano2 = $_GET['v2'] ?? $atual; 
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?php print $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Em que ano você nasceu?</label>
            <input type="number" name="v1" id="v1" min="1900" max="<?=$atual?>" value="<?=$ano1?>">
            <label for="v2">Quer saber sua idade em que ano?(atualmente estamos em 2024)</label>
            <input type="number" name="v2" id="v2" min="1900" value="<?=$ano2?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado</h2>
        <?php 
            $idade = $ano2 - $ano1;
            print "<p>Quem nasceu em $ano1 vai ter <strong>$idade</strong> anos em $ano2!</p>";
        ?>
    </section>
</body>

</html>
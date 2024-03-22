<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entendendo as Médias</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor1 = $_GET['v1'] ?? 0;
        $peso1 = $_GET['p1'] ?? 1;
        $valor2 = $_GET['v2'] ?? 0;
        $peso2 = $_GET['p2'] ?? 1; 
    ?>
    <main>
        <h1>Medias Aritméticas</h1>
        <form action="<?php print $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">1º Valor</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">
            <label for="v1">1º Peso</label>
            <input type="number" name="p1" id="p1" min="1" value="<?=$peso1?>">
            <label for="v1">2º Valor</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>">
            <label for="v1">2º Peso</label>
            <input type="number" name="p2" id="p2" min="1" value="<?=$peso2?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section id="resultado">
        <h2>Cálculo das Médias</h2>
        <?php 
            $meds= ($valor1 + $valor2) / 2;
            $medp= ($valor1 * $peso1 + $valor2 * $peso2) / ($peso1 + $peso2);
            print "Analisandos os valores $valor1 e $valor2:";
            print "<ul><li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a $meds.</li><li>A <strong>Média Aritmética Ponderada</strong> com pesos $peso1 e $peso2 é igual a $medp.</li></ul>";
        ?>
    </section>
</body>
</html>
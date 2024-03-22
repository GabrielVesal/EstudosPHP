<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário mínimo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor1 = $_GET['v1'] ?? 0;   
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?php print $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Salário (R$)</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>" step="0.001">
            <p>Considerando o salário mínimo de <strong>$1.412,00</strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php 
            $slmin = 1412;
            $divi = floor($valor1/ $slmin);
            $resto = $valor1 % $slmin;
            print "<p>Quem recebe um salário de R$". number_format($valor1, 2 ,",", ".") ." ganha <strong>$divi salários mínimos</strong> + R$ ". number_format($resto, 2 ,",", ".") .".</p>";
        ?>
    </section>
</body>
</html>
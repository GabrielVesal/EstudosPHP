<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        
        $tempo = $_GET['v1'] ?? 0;
    
        
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?php print $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Qual é o total de segundos?</label>
            <input type="number" name="v1" id="v1" value="<?=$tempo?>" step="0.001">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
        <h2>Totalizando tudo </h2>
        <?php 
            $sobra = $tempo;

            $sm = (int) ($sobra / 604_800);
            $sobra = $sobra % 604_800;

            $dia = (int) ($sobra/ 86_400);
            $sobra = $sobra % 86_400;

            $hr = (int) ($sobra / 3_600);
            $sobra = $sobra % 3_600;

            $min = (int) ($sobra / 60);
            $sobra = $sobra % 60;

            $seg = $sobra;
            print "<p>Analisando o valor que você digitou,<strong> ".number_format($tempo , 0, ",", ".")." segundos</strong> equivalem a um total de:</p>";
            print "<ul><li>$sm semanas</li><li>$dia dias</li><li>$hr horas</li><li>$min minutos</li><li>$seg segundos</li></ul>";
        ?>
    </section>
</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raízes de um Número</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php  
        $valor = $_GET['v1'] ?? 1; 
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?php print $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Número</label>
            <input type="number" name="v1" id="v1" value="<?=$valor?>" step="0.001">

            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php 
            $rq = sqrt($valor);
            $rc = pow($valor, 1/3);
            print "<p>Analisando o <strong>número $valor</strong>, temos:</p>";
            print "<ul><li>A sua raiz quadrada é <strong>$rq</strong></li><li>A sua raiz cúbica é <strong>$rc</strong></li></ul>";
        ?>
    </section>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustar Preços</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        $valor1 = $_GET['v1'] ?? 0; 
        $percent = $_GET['p1'] ?? 0;   
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?php print $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Preço do Produto(R$)</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>" step="0.001">
            <label for="p1">Preço do Produto(<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="p1" id="p1" min="0" max="100" step="1" oninput="mudavalor()"
                value="<?=$percent?>">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado do Reajuste</h2>
        <?php 
            $reajust = $valor1 * $percent / 100;
            $novoprec = $valor1 + $reajust;
            print "<p>O produto que custava R$ ". number_format($valor1, 2 ,",", ".") ." com <strong>$percent% de aumento </strong>vai passar a custar <strong>R$ ". number_format($novoprec, 2 ,",", ".") ."</strong> a partir de agora. </p>";
        ?>
    </section>
    <script>
    mudavalor()

    function mudavalor() {
        p.innerText = p1.value;
    }
    </script>
</body>

</html>
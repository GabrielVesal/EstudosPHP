<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Anatomia de uma Divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $dividendo = $_GET['v1'] ?? 0;
        $divisor = $_GET['v2'] ?? 1;  
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?php print $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Dividendo:</label>
            <input type="number" name="v1" id="v1" min="0" value="<?=$dividendo?>">
            <label for="v1">Divisor:</label>
            <input type="number" name="v2" id="v2" min="1" value="<?=$divisor?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section id="resultado">
        <h2>Estrutura da Divisão</h2>
        <?php 
            $quociente = (int) ($dividendo / $divisor);
            $resto = $dividendo % $divisor;
        ?>
        <table class="divisao">
            <tr>
                <td><?= $dividendo?></td>
                <td><?= $divisor?></td>
            </tr>
            <tr>
                <td><?= $resto?></td>
                <td><?= $quociente?></td>
            </tr>
        </table>
    </section>
</body>
</html>
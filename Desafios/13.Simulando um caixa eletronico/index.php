<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulando um caixa eletrônico</title>
    <link rel="stylesheet" href="style.css">
    <style>
    img.nota {
        height: 50px;
        margin: 5px;
    }
    </style>
</head>

<body>
    <?php 
        $valor = $_GET['v1'] ?? 0;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?php print $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="v1" id="v1" value="<?=$valor?>" step="5">
            <p style="font-size: 0.7em"><sup>*</sup>Notas disponíveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>

    <section id="resultado">
        <h2>Saque de R$ <?= number_format($valor, 2 ,",",".")?> realizado</h2>
        <?php 
            print "O caixa eletrônico vai te entregar as seguintes notas:";
            $resto = $valor;

            $cem = floor($resto/100);
            $resto %= 100;

            $cinq = floor($resto/50);
            $resto %= 50;

            $vinte = floor($resto/20);
            $resto %= 20;

            $dez = floor($resto/10);
            $resto %= 10;

            $cinco = floor($resto/5);
            $resto %= 5;            
        ?>
        <ul>
            <li><img class="nota" src="imagens/100-reais.jpg">x<?=$cem?></li>
            <li><img class="nota" src="imagens/50-reais.jpg">x<?=$cinq?></li>
            <li><img class="nota" src="imagens/20-reais.jpg">x<?=$vinte?></li>
            <li><img class="nota" src="imagens/10-reais.jpg">x<?=$dez?></li>
            <li><img class="nota" src="imagens/5-reais.jpg">x<?=$cinco?></li>
        </ul>
    </section>
</body>

</html>
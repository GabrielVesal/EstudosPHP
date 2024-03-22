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
        <h1>Conversor de Moedas v2.0</h1>
        <?php 
            $inicio = date("m-d-Y", strtotime("-8 days"));
            $fim = date("m-d-Y"); 
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            $dados = json_decode(file_get_contents($url), true);
            $cotacao= $dados["value"][0]["cotacaoCompra"];
            $nrs = $_GET["valor"] ?? 0;
            $dolar = $nrs / $cotacao;
            print "<p>Seus R$ $nrs equivalem a <strong>US$ $dolar</strong>*</p>";
            print "<p>*Dolar hoje:$cotacao <br/>
             Cotação obtida diretamente do site do <strong>Banco Central do Brasil</strong></p>";
        ?>
        <button onclick="javascript:history.go(-1)"><a style="color:white;">Voltar</a></button>
    </main>
</body>
</html>
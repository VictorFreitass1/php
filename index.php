   <?php
        require_once('funcoes.php');
    ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php

    ?>
<div class="container">
    <?php
        //$idade = 2022 - 2003; 
        //echo '<h1>Fala zé idade '.$idade.'</h1>';
        //echo somar ()."<br/>";
        //somarIdade (25,30,26,28);
        //echo (1500 - calcularComissao(1500,14.58));
        $montante = calcularMontante(1000,2.98,12);
        $parcela = number_format(($montante/12),2,',','.');
        echo '12 parcelas de R$'.$parcela.'<br/>';
        echo 'Valor total R$'.number_format(($montante),2,',','.');
    ?>
</div>


</body>
</html>
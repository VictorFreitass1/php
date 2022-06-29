
<html lang="pt-BR">
<link rel="stylesheet" href="css/styles.css">
<?php
    include 'config.php';
    $atual = new Datetime();
    $especifica = new Datetime('1990-01-22');
    $diasAtraso = 125;
    $texto = new Datetime ("+$diasAtraso day");

    print_r($atual);
    echo '<br/>';
    print_r($especifica);
    echo '<br/>';
    print_r($texto);

    echo '<br/>';
    $data = new Datetime();
    echo $data->format('d-m-Y-H:i:s');

    $diaAtraso = -1;
    $mesAtraso = -2;
    $anoAtraso = -4;
    $atrasoTotal = ($diaAtraso. ' day '. $mesAtraso.' month' .$anoAtraso.'year');
    $texto = new Datetime ($atrasoTotal);
    echo '<br/> Atraso total: '.$atrasoTotal. '<br/>';
    //Atraso total: -1 day -2 month-4year
    print_r($texto);
    //DateTime Object ( [date] => 2018-04-28 14:28:47.472900 [timezone_type] => 3 [timezone] => Europe/Berlin )
    echo '<br/>';

    $dataSistema = new Datetime();
    $dataNascimento = new Datetime ('2003-10-04');
    $intervalo = $dataNascimento->diff($dataSistema);
    echo $intervalo->format('%y anos, %m meses e %d dias');
    //18 anos, 8 meses e 25 dias
    echo '<br/>';
    $intervalo1 = new DateInterval('P4Y');
    echo $intervalo1->format('%y anos e %d dias');
    //6 anos e 0 dias
    echo '<br/>';
    echo '<br/>';
    $dataSistema->setTimeZone(new DateTimeZone('America/Sao_Paulo'));
    echo $dataSistema->format('d-m-Y H:i:s');
    echo '<br/>';
?>

<!DOCTYPE html>
<head>
    <meta http-equiv="refresh" content="1">
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
</body>
<script>

</script>
</html>
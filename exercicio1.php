<?php
// Crie um formulário que receba o valor do capital, a taxa de juros e o número de parcelas
// Apresente o valor da parcela utilizando juro SIMPLES no mesmo arquivo php (exercicio1.php) 
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio</title>
    <link rel="stylesheet" href="css/exercicio1.css">
</head>
<?php  

?> 
<body>
<p> Valor capital <input type="text" name="valorcapital"></p>
<p> Taxa de juros <input type="text" name="taxajuros"></p> 
<p> Numero de parcelas<input type="text" name="numeroparcelas"></p>
<button type="submit" name="btn">Calcular</button> 
<?php  
if(isset($_GET['valorcapital'])){ 
    $txtnome = $_GET['taxajuros']; 
} 

?> 
    
</body>
</html>
<?php
//UDF - Usser defined functions - funções definidas pelo usuário
// funções com parâmetros por passagem de valor ou referência
function somar ($valor1=60, $valor2=55, $valor3=3){
    return $valor1 + $valor2 + $valor3;
}
function somarIdade(int ...$idades){
    //var_dump($idades);
    //print_r ($idades);
    $soma = 0;
    foreach ($idades as $key => $value) {
        echo ($key + 1).'º valor = ' .$value .'<br/>';
        $soma = $soma + $value;
    }
    echo 'Soma das idades: '. $soma;
}
function calcularComissao($vendas, $comissao=2.89){
    // chamar oytra função $vendas = 1500
    // $vendas = somar ();
    return $vendas * ($comissao / 100);
}
function calcularMontante($capital, $taxa=0.98, $periodo=1){
    $montante = $capital * pow((1+($taxa/100)),$periodo);
    return $montante;

}

?>
<?php


function exercicio01(){

    echo "<h1>*********Exercicio 01************</h1><br><br>";
    $num = 07;

    if($num<=0 || $num>12){ 
        echo "numero invalido...";
    }else{

        $meses = array("janeiro", "fevereiro", "março", "abril", "maio", "junho", "julho", "agosto", "setembro", "outubro", "novembro", "dezembro");
        echo "O mes escolhido em sua forma por extenso é: " . $meses[$num-1]; 
    
    }

    echo "<br><br><h1>-----------------------------------------------<h1><br><br>";
}


function exercicio02(){

    echo "<h1>*********Exercicio 02************</h1><br><br>";
    $data = "14/01/2017";

    $nascimento = DateTime::createFromFormat("d/m/Y", $data);
    $data_atual = new DateTime();
    $diferenca = ($data_atual->format("Y") - $nascimento->format("Y"))-1;

    if($data_atual->format("m")>$nascimento->format("m") || ($data_atual->format("m")==$nascimento->format("m") && $data_atual->format("d")>=$nascimento->format("d"))){
        $diferenca++;        
    }

    if($diferenca>=18){
        echo "Você tem " . $diferenca . " anos e é maior de idade";
    }else{
        echo "Você tem " . $diferenca . " anos e é menor de idade";
    }

    echo "<br><br><h1>-----------------------------------------------<h1><br><br>";
}



function exercicio03(){

    echo "<h1>*********Exercicio 03************</h1><br><br>";


    $num = 1;

    for ($i = 1; $i < 10; $i++) {

        echo $num . ' x ' . $i . ' = ' .($num*$i) . '<br>';
      
    }

    echo "<br><br><h1>-----------------------------------------------<h1><br><br>";
    
}



function exercicio04(){


    echo "<h1>*********Exercicio 04************</h1><br><br>";

    $numeros = array(100,21,35,2,7,0,7,77,23,30,34,10,80,26,31,69,9,39,66,42);

    sort($numeros);

    $menorvalor = end($numeros);
    $maiorvalor = $numeros[0];
    $contagem_pares=0;
    $contagem_impares=0;
    $soma=0;


    foreach ($numeros as $valor) {

        if($valor%2==0){
            $contagem_pares++;
        }else{
            $contagem_impares++;
        }

        if($valor<$menorvalor){
            $menorvalor = $valor;
        }

        if($valor>$maiorvalor){
            $maiorvalor = $valor;
        }

        $soma+=$valor;
    }

    echo "<b>Menor Valor: ". $menorvalor ."<br>";
    echo "<b>Maior Valor: ". $maiorvalor ."<br>";
    echo "<b>Porcentagem Pares: </b>" . ($contagem_pares/count($numeros))*100 . "%<br>";
    echo "<b>Porcentagem Ímpares: </b>" . ($contagem_impares/count($numeros))*100 . "%<br>";
    echo "<b>Media dos valores: </b>" . ($soma/count($numeros)) ."<br>";

    echo "<br><br><h1>-----------------------------------------------<h1><br><br>";
}


function exercicio05(){

    echo "<h1>*********Exercicio 05************</h1><br><br>";


    $valor= 200;
    $vencimento = "20/03/2022";
    $juros = 3;


    $dia_atual = new DateTime();
    $dia_vencimento = DateTime::createFromFormat("d/m/Y", $vencimento);
    $dias_vencidos = ($dia_atual->format("d")) - ($dia_vencimento->format("d"));
    $valortotal_juros = (($juros*$valor)/100)*$dias_vencidos;
    $valorfinal = $valor + $valortotal_juros;

    echo "Se pagar o boleto hoje o valor final fica: " . $valorfinal;

    echo "<br><br><h1>-----------------------------------------------<h1><br><br>";


}


exercicio01();
exercicio02();
exercicio03();
exercicio04();
exercicio05();



?>
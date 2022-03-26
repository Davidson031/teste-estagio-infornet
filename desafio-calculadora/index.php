<html>
<head>
    <title>Página Calculadora</title>
</head>


<body>
    <h1>Calculadora</h1>

    <form action="" method="POST">
    <br><br><label>Primeiro digito: </label>
    <input type="text" name="primeiro_digito" size="1" required value = <?php if (isset($_POST['calcular']))echo $_POST['primeiro_digito'] ?>>

    <br><br>

    <label>Segundo digito: </label>
    <input type="text" name="segundo_digito" size="1" required value = <?php if (isset($_POST['calcular']))echo $_POST['segundo_digito'] ?>>

    <br><br>

    
    <input type="radio" id="adicao" name="operacao" value="adicao">
    <label for="html">+</label><br>

    <input type="radio" id="subtracao" name="operacao" value="subtracao">
    <label for="javascript">-</label><br>

    <input type="radio" id="multiplicacao" name="operacao" value="multiplicacao">
    <label for="css">*</label><br>

    <input type="radio" id="divisao" name="operacao" value="divisao">
    <label for="javascript">/</label><br><br>
    <button type="submit" name="calcular">Calcular</button>
    </form>  
    
    <?php

    if(isset($_POST['calcular']) && (isset($_POST['operacao']))){
      $a = $_POST['primeiro_digito'];
      $b = $_POST['segundo_digito'];
      $op= $_POST['operacao'];


         if($op == 'adicao')
            $c = $a + $b;
         else if($op == 'subtracao')
            $c = $a - $b;
         else if($op == 'multiplicacao')
            $c = $a*$b;
         else
            if($b==0){
                $c= "Não é possível dividir por zero";
            }else{
                $c = $a/$b;
            }                   
      
      echo "<h1>Resultado: </h1>" . $c;

    }
?>
    

</body>
</html>
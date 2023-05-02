<?php 
$a;
$b;
$c;
$delta;
$valor1;
$valor2;
$msgerro="";
$msg1="";
$msg2="";
    if(isset($_POST["calcular"])){
        $botao = $_POST["calcular"];
    
    if(isset($_POST["a"])){
        $a = $_POST["a"];
    }
    if(isset($_POST["b"])){
        $b = $_POST["b"];
    }
    if(isset($_POST["c"])){
        $c = $_POST["c"];
    }
    $delta=$b*$b-4*$a*$c;
    if($delta>=0){

        $valor1=(-$b+sqrt($delta))/(2*$a);
        $msg1="O Valor x1 é:".$valor1;
        $valor2=(-$b-sqrt($delta))/(2*$a);
        $msg2="O Valor x2 é:".$valor2;
    }else{
        $msgerro="Delta é menor que 0.";
    }
    
    
}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExercLista1_1</title>
</head>
<body>
    <form action="ExercLista1_1.php" method="post">

        a    <input type="text" name="a" id=""><br>
        b    <input type="text" name="b" id=""><br>
        c    <input type="text" name="c" id=""><br>
        
        <input type="submit" name="calcular"><br>
        <p><?php echo $msg1?></p>
        <p><?php echo $msg2?></p>
        <p><?php echo $msgerro?></p>
    </form>

</body>
</html>

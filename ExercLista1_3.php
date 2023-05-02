<?php 

$altura;
$peso;
$imc="";
$msg="";
$erro=0;

if(isset($_POST["calcular"])){
    $botao = $_POST["calcular"];

    if(isset($_POST["altura"])){
        $altura = $_POST["altura"];
    }
    if(isset($_POST["peso"])){
        $peso = $_POST["peso"];
    }
    $imc=$peso/($altura*$altura);
    $imc=round($imc,3);
    if ($imc<18.5) {
        $msg="Abaixo do Peso!!!";
    }else if($imc>=18.5 && $imc<25) {
        $msg="Peso normal!!!";
    }else if($imc>=25 && $imc<30) {
        $msg="Acima do peso!!!";
    }else{
        $msg="Obeso!!!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
</head>
<body>
    <form action="ExercLista1_3.php" method="post">
    <?php if ($erro != 0) {?>
            <tr>
                <td colspan="2" class="mensagem">Mensagens: <?php echo $msg; ?></td>
            </tr>
        <?php } ?>
        <label for="altura">Altura</label><input type="text" name="altura"><br><br>
        <label for="Peso">Peso</label><input type="text" name="peso"> 
        <input type="submit" name="calcular"><br>  
        <p><?php echo $imc; ?></p>
        <p><?php echo $msg;?></p>
        
    </form>
</body>
</html>
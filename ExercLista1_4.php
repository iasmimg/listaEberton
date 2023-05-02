<?php 
$altura;
$peso;
$imc="";
$msg="";
$erro=0;

if (isset($_POST["calcular"])) {
    $botao=$_POST["calcular"];

    if(isset($_POST["altura"])) {
        $altura=$_POST["altura"];
    }
    if (isset($_POST["peso"])) {
        $peso=$_POST["peso"];
    }
    if(isset($_POST["sexo"])) {
        $sexo=$_POST["sexo"];
    }

    $imc=$peso/($altura*$altura);
    if ($sexo=="homem") {
        # code...
        if ($imc<20.7) {
            $msg="Abaixo do peso";
        }else if ($imc>=20.7 && $imc<26.4) {
            $msg="Peso normas";
        }else if ($imc>=26.4 && $imc<27.8){
            $msg="Marginalmente acima do peso";
        }else if ($imc>=27.8 && $imc<=31.1){
            $msg="Acima do peso ideal";
        }else{
            $msg="Obeso";
        }

    }else{
        if ($imc<19.1) {
            $msg="Abaixo do peso";
        }else if ($imc>=19.1 && $imc<25.8) {
            $msg="Peso normal";
        }else if ($imc>=25.8 && $imc<27.3){
            $msg="Marginalmente acima do peso";
        }else if ($imc>=27.3 && $imc<=32.3){
            $msg="Acima do peso ideal";
        }else{
            $msg="Obeso";
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ExercLista1_4.php"method="post">
    <?php if ($erro != 0) {?>
            <tr>
                <td colspan="2" class="mensagem">Mensagens: <?php echo $msg; ?></td>
            </tr>
    <?php } ?>
    <label for="homem">Homem</label>
    <input type="radio" name="sexo" value="homem" id=""><br>
    <label for="mulhe">Mulher</label>
    <input type="radio" name="sexo" value="mulher" id=""><br>

    <label for="altura">Altura</label>
    <input type="text" name="altura" id=""><br>

    <label for="peso">Peso</label>
    <input type="text" name="peso" id=""><br>

    <input type="submit" name="calcular">
    <p>Seu imc é: <?php echo $imc?></p>
    <p><?php echo $msg?></p>
</form>
</body>
</html>
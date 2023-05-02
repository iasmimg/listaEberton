<?php
    $msg = '';
    $erro = 0;
    $botao = '';
    $nota1 = '';
    $nota2 = '';
    $nota3 = '';
    $nota4 = '';
    $media = '';
    $resultado = '';

    if(isset($_POST["calcular"])){
        $botao = $_POST["calcular"];

        if($erro == 0 && isset($_POST["nota1"]) && !empty($_POST["nota1"])){
            $nota1 = $_POST["nota1"];
        }else{
            $erro = 1;
            $msg = "Digite uma Nota 1 válida.";
        }
        if($erro == 0 && isset($_POST["nota2"]) && !empty($_POST["nota2"])){
            $nota2 = $_POST["nota2"];
        }else if($erro == 0){
            $erro = 1;
            $msg = "Digite uma Nota 2 válida.";
        }
        if($erro == 0 && isset($_POST["nota3"]) && !empty($_POST["nota3"])){
            $nota3 = $_POST["nota3"];
        }else if($erro == 0){
            $erro = 1;
            $msg = "Digite uma Nota 3 válida.";
        }
        if($erro == 0 && isset($_POST["nota4"]) && !empty($_POST["nota4"])){
            $nota4 = $_POST["nota4"];
        }else if($erro == 0){
            $erro = 1;
            $msg = "Digite uma Nota 4 válida.";
        }

        if($erro == 0){
            $media = ($nota1*2 + $nota2*2 
                + $nota3*3 + $nota4*3)/10;
            
            $res = "O valor da média é " . $media;
        }
    }

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Cálculo da Média </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <style>

    </style>
</head>
<body>
<form action="ExercLista1_2.php" method="post">
    <div>
    <table>
        <?php if ($erro != 0) {?>
            <tr>
                <td colspan="2" class="mensagem">Mensagens: <?php echo $msg; ?></td>
            </tr>
        <?php } ?>
        <tr>
            <td colspan="2"><h1>Cálculo da Média </h1></td>
        </tr>
        <tr>
            <td><label for="lb1" >Nota 1: </td>
            <td><input type="text" name="nota1" value="<?php echo $nota1 ?>"> </td>
        </tr>
        <tr>
            <td><label for="lb2" >Nota 2: </td>
            <td><input type="text" name="nota2" value="<?php echo $nota2 ?>"> </td>
        </tr>
        <tr>
            <td><label for="lb3" >Nota 3: </td>
            <td><input type="text" name="nota3" value="<?php echo $nota3 ?>"> </td>
        </tr>
        <tr>
            <td><label for="lb4" >Nota 4: </td>
            <td><input type="text" name="nota4" value="<?php echo $nota4 ?>"> </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="calcular" class="botao"> </td>
        </tr>
        <tr>
            <td colspan="2"  class="resultado"><label for="lb5" >Resultado: <?php echo $resultado ?> </td>
        </tr>
    </table>
    </div>
</form>

</body>
</html>
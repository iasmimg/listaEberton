<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Resultado</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
<form method="post">
    <h2>Distribuição de Cédulas:</h2>
    <input type="number" name='salario' step='1' autofocus><br>
    <br><input type="submit" value='Distribuir'>
</form>
    <?php
    if (isset($_POST['salario'])) {
    $notas = [100, 50, 20, 10, 5, 1];
                    
    $valor = $_POST['salario'];
    $display = null; 
                   
    foreach ($notas as $v) {
    $cedulas[$v] = null;
    while ($valor >= $v) {
    $cedulas[$v]+=1;
    $valor-=$v;
}
                       
    $display .= $cedulas[$v] ? "<p>$cedulas[$v] * R$ $v,00</p>" : null;
}
                    
    $msg = '<p class="error">Valor não pode ser distribuído nas notas disponíveis.<br>Faltaria R$ ' . $valor . ',00<br>Tente outro valor.</p>';
    if ($valor == 0) {
    $msg = '<p class="ok">Valor OK! Distribuir: R$ ' . (int) $_POST['salario'] . ',00</p>' . $display;
}
    echo $msg;
}
    ?>
</body>
</html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Operaciones</title>
    <link rel="stylesheet" href="css/estilos.css"/>
</head>

<body>

<?php

if(isset($_POST["button"]))
{
    $numero1 = $_POST["num1"];
    $numero2 = $_POST["num2"];
    $operacion = $_POST["operacion"];
    
    calcular($operacion, $numero1, $numero2);
}
    
function calcular($op, $n1, $n2)
{
    if(!strcmp("Suma", $op))
    {
        echo "<p class='resultado' >El resultado es: ".($n1+$n2)."</p>";
    }
    
    if(!strcmp("Resta", $op))
    {
        echo "<p class='resultado' >El resultado es: ".($n1-$n2)."</p>";
    }
    
    if(!strcmp("Multiplicación", $op))
    {
        echo "<p class='resultado' >El resultado es: ".($n1*$n2)."</p>";
    }
    
    if(!strcmp("División", $op))
    {
        echo "<p class='resultado' >El resultado es: ".($n1/$n2)."</p>";
    }
    
    if(!strcmp("Módulo", $op))
    {
        echo "<p class='resultado' >El resultado es: "."</p>";
    }
    
}

?>

</body>    
</html>

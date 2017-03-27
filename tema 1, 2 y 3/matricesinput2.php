<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>

    <?php

if(isset($_REQUEST['enviar'])){

function validar($var){
$tmp=(isset($_REQUEST[$var]))
?trim(htmlspecialchars($_REQUEST[$var],ENT_QUOTES,"UTF-8"))
:"";
return $tmp;
}
$minimoValor=validar('minimoValores');
$maximoValor=validar('maximoValores');
$minimo=validar('minimo');
$maximo=validar('maximo');

$errores=array();

if($minimoValor=="" || !ctype_digit($minimoValor)){
$errores[]="El número no es correcto o es nulo";
}

	if(count($errores)<0){
$random=rand($minimoValor,$maximoValor);

$arrayInput=array();

for($i=0;$i<$random;$i++){
array_push($arrayInput,rand($minimo,$maximo));
}
print "<h1>Datos iniciales</h1>";
print "Número de valores en la matriz:".count($arrayInput)."<br>";
print "Valores elegidos al azar entre ".$minimo." y ".$maximo."<br>";
print "<h1>Matriz de valores</h1>";
var_dump($arrayInput);
	}else{
	foreach($errores as $indice)
        print $indice;
		}
}else{
print "<p>Debe rellenar los datos</p>";
print "<a href='matricesinput.php'>Rellenar datos </a>";
}

?>


</body>

</html>

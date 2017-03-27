<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
$array=array();
$maximo= rand(5,15);

for($i=0;$i<$maximo;$i++){
array_push($array,rand(0,10));
}


print "<h1>Datos iniciales</h1>";
print "Número de valores en la matriz:".count($array);
print "<h1>Matriz de valores</h1>";
var_dump($array);

?>
</body>
</html>
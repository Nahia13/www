<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php

$colores=array(
	"fuerte"=> array(
				"rojo"=>"#FF0000",
				"verde" =>"#00FF00",
				"azul"=>"#0000FF"
				),
	"suave"=> array(
				"rosa"=>"#FE9ABC",
				"amarillo"=>"#FDF189",
				"malva"=>"#BC8F8F"
				)
);

/*$colores["fuerte"]["rojo"]="#FF0000";
$colores["fuerte"]["verde"]="#00FF00";
$colores["fuerte"]["azul"]="#0000FF";
$colores["suave"]["rosa"]="#FE9ABC";
$colores["suave"]["amarillo"]="#FDF189";
$colores["suave"]["malva"]="#BC8F8F";*/

var_dump($colores);
print "<table border=!>";
foreach($colores as $indice => $valor){
print "<tr><td>".$indice."</td>";
foreach($valor as $indicevalor => $valores){
print "<td style='background-color:$valores'>".$indicevalor.":".$valores."</td>";
}
print "</tr>";
}
print "</table>";


?>
</body>
</html>
<!DOCTYPE html>
<html>

<body>
    <?php
$a=array();
$valores=rand(5,15);
for($i=0; $i<$valores;$i++){
array_push($a,rand(0,10));
}
print "<h3> Datos iniciales </h3>";
print "<p> Número de valores en la matriz: $valores </p>";
print "<p> Valores elegidos al azar entre 0 y 10. <p>";
print "<h3> Matriz de valores </h3>";
foreach($a as $indice => $valores){
print "[$indice] => [$valores]</br>";
}
?>
</body>

</html>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
</head>

<body>
    <?php
$a=array();

$valores=rand($_POST['numeroMinimo'],$_POST['numeroMaximo']);
for($i=0; $i<$valores;$i++){
array_push($a,rand($_POST['valorMinimo'],$_POST['valorMaximo']));
}

print "<h3> Datos iniciales </h3>";
print "<p> Número de valores en la matriz: $valores </p>";
print "<p> Valores elegidos al azar entre 0 y 10. <p>";

print "<h3> Matriz de valores </h3>";


foreach($a as $indice => $valores){
print "[$indice] => [$valores]</br>";
}

$eliminar=$_POST['eliminar'];

 print "<h2>Matriz con valor eliminado</h2>";
        
        print "<p>Valor a eliminar: $eliminar</p>";
   
        for ($i = 0; $i < $valores; $i++) {
            if ($a[$i] == $eliminar) {
                unset($a[$i]);
            }
        }
		foreach($a as $indice => $valores){
		print "[$indice] => [$valores]</br>";
}
       
        print "<p>Valor a eliminar: $eliminar</p>";
        print "<p>Se han eliminado " . ($valores - count($a)) . " valores.</p>";
        

?>
</body>

</html>

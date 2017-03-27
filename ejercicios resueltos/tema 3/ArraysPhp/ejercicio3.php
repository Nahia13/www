<!DOCTYPE html>
<html>

<body>
    <?php
$paises=array('Italia' => 'Roma','Luxemburgo' => 'Luxemburgo', 'Belgica' => 'Bruselas','Dinamarca' => 'Copenhage', 'Finlandia' => 'Helsinki', 'Francia' => 'Paris', 'Eslovakia' => 'Bratislava', 'Eslovenia' => 'Ljubljana', 'Alemania' => 'Berlin', 'Grecia' => 'Atenas', 'Irlanda' => 'Dublin', 'Holanda' => 'Amsterdam', 'Portugal' => 'Lisboa', 'España' => 'Madrid', 'Suecia' => 'Estocolmo', 'Reino Unido' => 'Londres', 'Chipre' => 'Nicosia', 'República Checa' => 'Praga', 'Estonia' => 'Tallin', 'Hungria' =>'Budapest', 'Malta' => 'Valetta','Austria' => 'Viena','Polonia' => 'Varsovia');
foreach($paises as $pais =>$capital){
print "La capital del pais $pais es $capital.";
}
?>
</body>

</html>

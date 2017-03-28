<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
</head>

<body>
<form action="dni.php" method="post">
<h1>LETRA DNI</h1>
</p>Introduce el DNI <input type="text" name="dni"></p>
<p><input type="submit" name='enviar' value="Encuentra la letra"> <input type="reset"></p>
</form>

 <?php
 if(isset($_REQUEST['enviar'])){
	 
$dni=$_REQUEST['dni'];
if(strlen($dni)==8){
	
$resto= $dni%23;

$fichero='letras.txt';
//abrir fichero
$puntero=fopen($fichero,'r');
//leer
$array=fread($puntero,filesize($fichero));
$array=str_replace("'"," ",$array);
$array=str_replace(" ","",$array);
//convertir string en array
$array=explode(',',$array);
fclose($puntero);


foreach($array as $indice => $valor){

if($indice==$resto){
print "La letra del DNI es $valor</br>";
}
}

}elseif($dni ==""){
	print "Está vacío. Introduce el DNI";
}elseif(!ctype_digit($dni)){
print "Sólo se pueden poner números";
}else{
 print "no cumple con el mínimo de 8 dígitos";
 }


 }
 
?>
</body>
</html>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
</head>

<body>
    <?php
$numero=$_POST['numero'];
$resto= $numero%23;
$array=array('T','R','W','A','G','M','Y','F','P','D','X','B','N','J','Z','S','Q','V','H','L','C','K','E');

foreach($array as $indice => $valores){

if($indice==$resto){
print "[$indice] => [$valores]</br>";
}
}
?>
</body>

</html>

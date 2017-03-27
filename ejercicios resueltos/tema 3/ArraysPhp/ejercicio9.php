<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />

</head>

<body>
    <h1>Estadios de futbol</h1>

    <?php
$array=
		array(
				'Barcelona' => 'Nou Camp',
				'Real Madrid' => 'Santiago Bernabeu',
				'Valencia' => 'Mestalla',
				'Real Sociedad' => 'Anoeta');
				print "<ol>";
		foreach($array as $clave => $valor){
			print"<li> El equipo $clave tiene el estadio $valor </li>";
		
		}
print "</ol>";
$eliminar='Real Madrid';

for ($i = 0; $i < $array; $i++) {
            if ($array[$i] == $eliminar) {
                unset($array[$i]);
            }
        }
?>
</body>

</html>

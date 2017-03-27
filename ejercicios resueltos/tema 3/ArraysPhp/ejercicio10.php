<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />

</head>

<body>

    <table>
        <tr>
            <th>JUGADORES</th>
        </tr>

        <tr>
            <th> Nombre </th>
            <th> Equipo </th>
        </tr>

        <?php
$array=
		 array 
					(
						'Messi' => array
										(
											'Nombre'=>'Lionel',
											'Equipo'=>'Barcelona'
										),
						'Ronaldo' => array
										(
											'Nombre'=>'Cristiano',
											'Equipo'=>'Real Madrid'
										),
						'Saturno' => array
										(
											'Nombre'=>'Sergio',
											'Equipo'=>'Boca Juniors'
										),
						'Neimar' => array
										(
                                            'Nombre' => ' ',
											'Equipo'=>'Santos'
											
										)
					);
        
foreach($array as $clave => $valor){
    print "<tr> <td> $clave, $valor[Nombre] </td> ";
    print "<td> $valor[Equipo]</td>";

    
    print "</tr>";
}

?>


    </table>
</body>

</html>

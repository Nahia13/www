<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />

</head>

<body>

    <table>
        <tr>
            <th>PAISES, MONEDAS E IDIOMA OFICIAL</th>
        </tr>

        <tr>
            <th> Nombre </th>
            <th> Lengua</th>
            <th> Moneda </th>
        </tr>

        <?php
$array=
		 array 
					(
						'España' => array
										(
											'Idioma'=>'Castellano',
											'Moneda'=>'Peseta'
										),
						'Francia' => array
										(
											'Idioma'=>'Francés',
											'Moneda'=>'Franco'
											
										),
						'Reino Unido' => array
											(
												'Idioma'=>'Inglés',
												'Moneda'=>'Libra'
												
											),
						'Alemania' => array
											(
												'Idioma'=>'Alemán',
												'Moneda'=>'Marco'
												
											)
					);

foreach($array as $clave => $valor){
    print "<tr> <td> $clave </td> ";
        
        
    foreach($valor as $clave2 => $valor2){
        print "<td> $valor2</td>";
    }
    print "</tr>";
}

?>


    </table>
</body>

</html>

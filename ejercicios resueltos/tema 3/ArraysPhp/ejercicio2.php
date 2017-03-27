<!DOCTYPE html>
<html>

<body>
    <table>
        <tr>
            <td>
                Colores fuertes:
                <td>

                </td>

                <td>

                    <td>

                    </td>

                    <td>

                    </td>
                    Colores suaves:
    </table>
    <?php

$array=
		 array 
					(
						'Fuerte' => array
										(
											'rojo'=>'#FF0000',
											'verde'=>'#00FF00',
                                            'azul' => '#0000FF'
										),
						'Suave' => array
										(
											'rosa'=>'#FE9ABC',
											'amarillo'=>'#FDF189',
                                            'malva' => '#BC8F8F'
											
										)
					
					);
    
   
    foreach($array as $clave => $valor){
        print " <tr> <td> $clave </td> </tr>";
        foreach($valor as $clave2 => $valor2){
            print "<td> $clave2:$valor2 </td>";
        }
    }

?>
</body>

</html>

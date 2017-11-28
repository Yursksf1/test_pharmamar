<html>
<body>
 <?php
 $sum_fila = [0,0,0,0,0,0,0,0];
 $sum_columna = [0,0,0,0,0,0,0,0];
for($i=0; $i<8; $i++){
    for($j=0; $j<8; $j++){
       $sum_fila[$i] =  $sum_fila[$i] + $_POST["matr".$i.$j];
       $sum_columna[$i] =  $sum_columna[$i] + $_POST["matr".$j.$i];
    }
}
 echo "<br>La suma de las filas:";

for($i=0; $i<8; $i++){
    	echo '['.$sum_fila[$i].']';
}

 echo "<br><br>La suma de las columnas:";
for($i=0; $i<8; $i++){
    	echo '['.$sum_columna[$i].']';
}

?>


</body>
</html> 
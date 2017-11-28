<html>
<body>
<h1>Resultados: </h1>
<br>
La suma del primer sermestre fue: 
 <?php
 $sum_fila = 0;

for($i=0; $i<6; $i++){
        $sum_fila =  $sum_fila + $_POST["mes".$i];
    }
 echo $sum_fila;
?>
<br>
La suma del segundo sermestre fue: 
 <?php
 $sum_fila = 0;

for($i=6; $i<12; $i++){
        $sum_fila =  $sum_fila + $_POST["mes".$i];
    }
 echo $sum_fila;
?>
<br>
La suma de los meses son: : 
 <?php
 $sum_fila = 0;

for($i=0; $i<12; $i++){
        $sum_fila =  $sum_fila + $_POST["mes".$i];
    }
 echo $sum_fila;
?>
</body>
</html> 
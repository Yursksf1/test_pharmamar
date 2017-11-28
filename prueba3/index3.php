<!DOCTYPE HTML>
<html>  
<body>
Enunciado: 3. 
<br/>
Realizar un Algoritmo que llene una matriz de 8*8 que almacene la suma de las filas y la suma de las columnas en un vector. Imprimir el vector resultante
<br/><br/>

Ingrese Los Valores de La Matrix
<br/><br/>
<form action="result3.php" method="post">
 <?php

for($i=0; $i<8; $i++){
    for($j=0; $j<8; $j++){
        echo '<input type="text" name="matr'.$i.$j.'"/>';
    }
    echo '<br/>';
}

?>
<input type="submit" value="Enviar">
</form>

</body>
</html>
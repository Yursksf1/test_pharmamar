<!DOCTYPE HTML>
<html>  
<body>
Enunciado: 2. 
<br/>
Realizar un Algoritmo de una Matriz de 6 * 8 y que almacene toda la matriz un vector. Imprimir el vector resultante
<br/><br/>

Ingrese Los Valores de La Matrix
<br/><br/>
<form action="result2.php" method="post">
 <?php

for($i=0; $i<8; $i++){
    for($j=0; $j<6; $j++){
        echo '<input type="text" name="matr'.$i.$j.'"/>';
    }
    echo '<br/>';
}

?>
<input type="submit" value="Enviar">
</form>

</body>
</html>
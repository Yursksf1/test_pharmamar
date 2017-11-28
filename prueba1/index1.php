<!DOCTYPE HTML>
<html>  
<body>
Enunciado: 1. 
<br/>
Realizar una matriz que sume el totalizado de “X” valores de todos los meses por los dos periodos(Semestral).
<br/><br/>

Ingrese Los Valores de La Matrix
<br/><br/>
<form action="result1.php" method="post">
 <?php
$meses = ['enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre',];
for($i=0; $i<12; $i++){
        echo '<br/><input type="text" placeholder='.$meses[$i].'  name="mes'.$i.'"/>';

}
 echo '<br/><br/>';
?>
<input type="submit" value="Enviar">
</form>

</body>
</html>
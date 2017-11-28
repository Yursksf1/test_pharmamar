<html>
<body>
El Vector es: 
<br>
 <?php
$values = array();

for($i=0; $i<8; $i++){
    for($j=0; $j<6; $j++){
        array_push($values, $_POST["matr".$i.$j]);

    }
}


for($i=0; $i<48; $i++){
    	echo '['.$values[$i].']';
}

 echo '<br/><br/>';

echo "de otra forma: <br/>";
print_r($values);
?>



</body>
</html> 
<!DOCTYPE html>
<html>
<head>
	<title>pares</title>
</head>
<body>
	<h1>mostrar numeros pares</h1>
	<?php 
	for ($i=1; $i < 51; $i++) { 
		if(($i % 2)==0)
			echo "<p>".$i."</p>";
	}
 ?>
</body>
</html>
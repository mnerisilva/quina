<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quina";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}




	
		$concurso_string = "5782";
		$concurso_int = 5728;
		$data = "08/12/2021";
		$resultado1 = 1;
		$resultado2 = 15;
		$resultado3 = 26;
		$resultado4 = 55;
		$resultado5 = 77;
		$sql = "INSERT INTO `resultados`( `concurso_string`, `concurso_int`,`data`,`resultado1`,`resultado2`,`resultado3`,`resultado4`,`resultado5`) 
		VALUES ('$concurso_string','$concurso_int','$data','$resultado1','$resultado2','$resultado3','$resultado4','$resultado5')";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	

<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quina";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


//var_dump($_POST);
//die();

	
		$concurso_string = $_POST['concurso_string'];
		$concurso_int = $_POST['concurso_int'];
		$data = $_POST['data'];
		$resultado1 = $_POST['resultado1'];
		$resultado2 = $_POST['resultado2'];
		$resultado3 = $_POST['resultado3'];
		$resultado4 = $_POST['resultado4'];
		$resultado5 = $_POST['resultado5'];

		$sql = "INSERT INTO `resultados`( `concurso_string`, `concurso_int`,`data`,`resultado1`,`resultado2`,`resultado3`,`resultado4`,`resultado5`) 
		VALUES ('$concurso_string','$concurso_int','$data','$resultado1','$resultado2','$resultado3','$resultado4','$resultado5')";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
		return 'sucesso!';
	

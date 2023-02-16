<!DOCTYPE html>
<html>

<head>
	<title>Požiadavka zaznamenaná</title>
	<link rel="stylesheet" href="css/insert.css">
</head>

<body>
	<center>
		<?php

		$servername="localhost";
		$username="root";
		$password="";
		$dbname = "firma";

		// servername => localhost
		// username => root
		// password => 
		// database name => firma

		 $conn = mysqli_connect($servername, $username, $password, $dbname);
          
         if($conn === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
		
		$meno = $_REQUEST['krstneMeno'];
		$priezvisko = $_REQUEST['priezviskoMeno'];
		$email = $_REQUEST['mail'];
		$poziadavka = $_REQUEST['klientPoziadavka'];
		
		$sql = "INSERT INTO poziadavky (meno, priezvisko, email, poziadavka) VALUES 
		('$meno','$priezvisko','$email','$poziadavka')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Vaša požiadavka bola zaznamenaná, prosím počkajte na odpoveď od jedného z našich zamestnancov.</h3>";

			echo nl2br("\n$meno\n $priezvisko\n "
				. "$email\n $poziadavka\n ");

		} else{
			echo "Chyba: nastala chyba, prosím skúste znova $sql. "
				. mysqli_error($conn);
		}
		
		mysqli_close($conn);
		?>

		<a class="objednanie" href="index.php">Vrátiť sa na domovskú stránku.</a>

	</center>
</body>

</html>

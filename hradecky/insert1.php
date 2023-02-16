<!DOCTYPE html>
<html>

<head>
	<title>Objednávka zaznamenaná</title>
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
		
		$meno = $_REQUEST['krstneMeno1'];
		$priezvisko = $_REQUEST['priezviskoMeno1'];
		$adresa = $_REQUEST['adresa1'];
		$psc = $_REQUEST['psc1'];
        $mesto = $_REQUEST['mesto1'];
        $email = $_REQUEST['mail1'];
        $telefon = $_REQUEST['telefon1'];
        $preprava = $_REQUEST['preprava1'];
		$tovar = $_REQUEST['kosikJSON'];

		//$tovar_array = json_decode($tovar);

		//echo($tovar_array[0]->nazov);
		//var_dump($tovar_array);

		$sql = "INSERT INTO objednavky (meno, priezvisko, adresa, psc, mesto, email, telefon, preprava, tovar) VALUES 
		('$meno','$priezvisko','$adresa','$psc', '$mesto', '$email', '$telefon', '$preprava', '$tovar')";    
	
		if(mysqli_query($conn, $sql)){
			echo "<h3>Vaša objednávka bola zaznamenaná, na Váš email budú zaslané údaje s ďalšími informáciami.</h3>";

			echo nl2br("\n$meno\n $priezvisko\n "
				. "$adresa\n $psc\n "
				. "$mesto\n $email\n "
				. "$telefon\n $preprava\n ");
		} else{
			echo "Chyba: nastala chyba, prosím skúste znova $sql. "
				. mysqli_error($conn);
		}
		
		mysqli_close($conn);


		?>

		<a class="objednanie" href="index.html">Vrátiť sa na domovskú stránku.</a>
	</center>
</body>

</html>

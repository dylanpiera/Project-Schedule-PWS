<?php
//error_reporting(E_ALL);
require 'functions/connect.php';
#require 'functions/pws.php';


if($result = $db->query("SELECT * FROM leerling")) {
	if($count = $result->num_rows) {
		echo '<p> Number of entries: ', $count, '</p>';
		
		while($row = $result->fetch_object()) {
			echo $row->leerlingnummer, '<br>';
		}

		$result->free();
	}

	echo "<br>";

} else {
	die($db->error);
}

/* #How to insert stuff inside the database
if ($insert = $db->query("INSERT INTO leerling (voornaam, achternaam, leerlingnummer, klas) VALUES ('Ruben','de Jong','128292','5I')")) {
	#echo $db->affected_rows;
}*/

#Create new pws entry new_pws($db, Title, Description, Location)
#new_pws($db, "Test title", "Test description", "LR000");

/*  How to update a query :
if($update = $db->query("UPDATE leerling SET leerlingnummer = 129007")) {

}*/

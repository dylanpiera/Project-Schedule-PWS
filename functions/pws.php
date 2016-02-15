<?php

require 'connect.php';

function new_pws($db, $title, $desc, $location) {
	if ($insert = $db->query("INSERT INTO pws (title, description, location) VALUES ('{$title}','{$desc}','{$location}')")) {
		$result = $db->affected_rows;

		if (!empty($result)) {
			echo "Sucsesfully added entry to database <br>";
		} else {
			die("Something went wrong. Please reload the webpage! <br>");
		}
	}

}

if (!empty($_POST["title"]) && !empty($_POST["desc"]) && !empty($_POST["location"])) {
	$title = $_POST["title"];
	$desc = $_POST["desc"];
	$location = $_POST["location"];

	new_pws($db, $title, $desc, $location);
}



?>

<html>

<form action="pws.php" method="post">
Title: <input type="text" name="title"><br>
Description: <input type="text" name="desc"><br>
Location: <input type="text" name="location"><br>
<input type="submit">
</form>

</html>
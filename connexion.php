<?php

function connecter(){
	$connection = mysqli_connect("localhost", "root", "root", "climatique");
	return $connection;
}
	


?>
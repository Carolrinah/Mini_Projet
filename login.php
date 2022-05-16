<?php
	include"connexion.php";
	if(isset($_GET['log'])){
		$mailaka=$_GET['email'];
		echo $mailaka;
		$code=$_GET['mdp'];
	}
?>
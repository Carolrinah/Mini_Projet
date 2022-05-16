<?php
	include"connexion.php";
	$idContenu=$_GET['idContenu'];
	$sql='SELECT * from contenu where idContenu='.$idContenu;
	$sql=sprintf($sql);
	//echo $sql;
	$resultat=mysqli_query($connection,$sql);
 ?>
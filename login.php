<?php
	include"connexion.php";
	
  $sql='SELECT * from user where email="%s" and mdp="%s";';
  $sql=sprintf($sql);
  //echo $sql;
  $resultat=mysqli_query($connection,$sql);
?>
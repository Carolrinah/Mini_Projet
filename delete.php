<?php {
	include"connexion.php";
	$idContenu=$_GET['idContenu'];
 	 //echo $idContenu;
  	$sql='DELETE from contenu where idContenu='.$idContenu;
  	echo $sql;
	$sql=sprintf($sql,$idContenu);
	$resultat=mysqli_query(connecter(),$sql);
	header('Location: accueil.php');
	}		
?>
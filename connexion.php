<?php

function connecter(){
	$connection = mysqli_connect("mysql-informer.alwaysdata.net", "informer_base", "bemazavasalohy0809", "informer_basevavao");
	return $connection;
}
?>
<?php

	$id = $_GET['id'];
	$conn = mysqli_connect('localhost','root','','campusambassador');
	$sql = "SELECT `cv` FROM `ambassadors` WHERE id = '$id'";
	$query = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($query);
	if($query){
		$url = "../upload/".$row['cv'];

		header('Content-Type: application/pdf');
		header('Content-Disposition: attachment; filename="'.$url.'"');
		header('Content-Transfer-Encoding: binary');
		header('Accept-Ranges: bytes');

		@readfile($url);
	}
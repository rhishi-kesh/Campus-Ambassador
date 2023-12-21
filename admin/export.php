<?php

	$conn = mysqli_connect('localhost','root','','campusambassador');

	$sql = "SELECT * FROM `ambassadors`";
	$query = mysqli_query($conn, $sql);

	$html="<table><tr><td>Name</td><td>Email</td><td>Number</td><td>Gender</td><td>Name of your University/College/School/Institute</td><td>Year of study</td><td>How did you come to know about Rayhan's ICT</td><td>Why do you want to be a Campus Knight</td><td>Resume/CV</td></tr>";

	while($row=mysqli_fetch_assoc($query)){
		$html.='<tr><td>'.$row['name'].'</td><td>'.$row['email'].'</td><td>'.$row['number'].'</td><td>'.$row['gender'].'</td><td>'.$row['UCS_name'].'</td><td>'.$row['year_of_study'].'</td><td>'.$row['how_know_rict'].'</td><td>'.$row['why_campus_knight'].'</td><td>'. $row['cv'] ?? "Empty".'</td></tr>';
	}
	$html.='</table>';
	header('Content-Type:application/xls');
	header('Content-Disposition:attachment;filename=report.xls');
	echo $html;

?>
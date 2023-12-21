<?php
	
	//database connection
	$conn = mysqli_connect('localhost','root','','campusambassador');
	$emailErr = $NumberErr = "";

	//data form form
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$number = mysqli_real_escape_string($conn, $_POST['number']);
	$gender = mysqli_real_escape_string($conn, $_POST['gender']);
	$name_of_university = mysqli_real_escape_string($conn, $_POST['name_of_university']);
	$y_o_s = mysqli_real_escape_string($conn, $_POST['y_o_s']);
	$know_rict = mysqli_real_escape_string($conn, $_POST['know_rict']);

	$file_name=$_FILES['cv']['name'];
    $tmp_name=$_FILES['cv']['tmp_name'];

	$why_choose = mysqli_real_escape_string($conn, $_POST['why_choose']);

	//email exest or not
	$sql = "SELECT * FROM `ambassadors` WHERE email = '$email'";
	$query = mysqli_query($conn, $sql);
	$if_match = mysqli_num_rows($query);

	//mail config
	include('smtp/PHPMailerAutoload.php');
	$html = "
	<b>Congratulations! </b>
	<br>
	<p>Your registration for the Campus Knight Program is confirmed!</p>
	
	<p>Get ready for an exciting journey where opportunities meet leadership. As a Campus Ambassador, you'll enjoy free courses, networking with industry leaders, and monthly gifts to keep you motivated.</p>
	
	<p>Your enthusiasm aligns perfectly with our program's spirit. We can't wait to see the positive impact you'll make.<b>We will contact with you soon for the next step.</b></p>
	<p>Follow event for update : <a href='https://shorturl.at/nyX69'>https://shorturl.at/nyX69</a></p>
	<p>Follow page for update : <a href='https://www.facebook.com/RayhansICTInstitute/'>https://www.facebook.com/RayhansICTInstitute/</a></p>
	
	<p>Best,</p>
	<p>Campus Knight Program Organizer</p>
	";

	if($if_match){
		$respons['message'] = 'Email already exists';
	}else{
		$pattern = "/(^(\+88|0088)?(01){1}[3456789]{1}(\d){8})$/";
		if(preg_match($pattern, $number)){
			if(empty($file_name)){
				$sql3 = "INSERT INTO `ambassadors`(`name`, `email`, `number`, `gender`, `UCS_name`, `year_of_study`, `how_know_rict`, `why_campus_knight`) VALUES ('$name','$email','$number','$gender','$name_of_university','$y_o_s','$know_rict','$why_choose')";
				$query3 = mysqli_query($conn, $sql3);
				if($query3){
					// $respons['message'] = 'success';

					$mail=new PHPMailer(true);
					$mail->isSMTP();
					$mail->Host="smtp.gmail.com";
					$mail->Port=587;
					$mail->SMTPSecure="tls";
					$mail->SMTPAuth=true;
					$mail->Username="campus.knight.official@gmail.com";
					$mail->Password="acst ueht sepi qmre";
					$mail->SetFrom("campusknight@rayhansict.com");
					$mail->addAddress("$email");
					$mail->IsHTML(true);
					$mail->Subject="Congratulations on Your Campus Knight Program Registration!";
					$mail->Body=$html;
					$mail->SMTPOptions=array('ssl'=>array(
						'verify_peer'=>false,
						'verify_peer_name'=>false,
						'allow_self_signed'=>false
					));
					if($mail->send()){
						$respons['message'] = 'success';
					}else{
						$respons['message'] = 'Error';
					}
				}else{
					$respons['message'] = 'Error inserting data into the database';
				}
			}else{
				$sql2 = "INSERT INTO `ambassadors`(`name`, `email`, `number`, `gender`, `UCS_name`, `year_of_study`, `how_know_rict`, `why_campus_knight`, `cv`) VALUES ('$name','$email','$number','$gender','$name_of_university','$y_o_s','$know_rict','$why_choose','$file_name')";
				$query2 = mysqli_query($conn, $sql2);
				if($query2){
					move_uploaded_file($tmp_name,"upload/".$file_name);
					$respons['message'] = 'success'; 
				}else{
					$respons['message'] = 'Error inserting data into the database';
				}
			}
		}else{
			$respons['message'] = 'Please Enter a valid Number';
		}
	}
	header('Content-Type: application/json');
	echo json_encode($respons);
?>
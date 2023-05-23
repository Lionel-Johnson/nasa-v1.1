<!---------------- Session starts form here ----------------------->
<?php  
	session_start();
	
	if ($_SESSION["LoginAdmin"])
	{
		$roll_no=$_GET['roll_no'] ?? $_SESSION['LoginStudent'];
	}
	else if(!$_SESSION["LoginAdmin"] && $_SESSION['LoginStudent']){
		$roll_no=$_SESSION['LoginStudent'];
	}
	else{ ?>
		<script> alert("Vous n'êtes pas une personne autorisée pour ce lienYour Are Not Authorize Person For This link");</script>
	<?php
		header('location:../login/login.php');
	}
	require_once "../connection/connection.php";
	?>
<!---------------- Session Ends form here ------------------------>


<!doctype html>
<html lang="en">
	<head>
		<title>Admin - Information du Militant</title>
	</head>
	<body>
		<?php include('../common/common-header.php') ?>
	<?php
	$query="select * from student_info where roll_no='$roll_no'";
	$run=mysqli_query($con,$query);
	while ($row=mysqli_fetch_array($run)) {
		?>
		<div class="container  mt-1 border border-secondary mb-1">
			<div class="row text-white bg-primary pt-5">
				<div class="col-md-4">
					<?php  $profile_image= $row["profile_image"] ?>
					<img class="ml-5 mb-5" height='290px' width='250px' src=<?php echo "images/$profile_image"  ?> >
				</div>
				<div class="col-md-8">
					<h3 class="ml-5"><?php echo $row['first_name']." ".$row['middle_name']." ".$row['last_name'] ?></h3><br>
					<div class="row">
						<div class="col-md-6">
							<h5>Nom de la Fédération:</h5> <?php echo $row['father_name']  ?><br><br>
							<h5>E-mail:</h5> <?php echo $row['email']  ?><br><br>
							<h5>Contact:</h5> <?php echo $row['mobile_no']  ?><br><br>
						</div>
						<div class="col-md-6">
							<h5>Adresse:</h5> <?php echo $row['permanent_address']  ?><br><br>
							<h5>N° D'Enregistrement:</h5> <?php echo $row['cnic']  ?><br><br>
							<h5>ID Fédération:</h5> <?php echo $row['teacher_id']  ?><br><br>
						</div>		
					</div>
				</div>
				<hr>
			</div>
			<div class="row pt-3">
				<div class="col-md-4"><h5>Applicant Statut:</h5> <?php echo $row['applicant_status']  ?></div>
				<div class="col-md-4"><h5>Application Statut:</h5> <?php echo $row['application_status']  ?></div>
				<div class="col-md-4"><h5>Prospectus Statut:</h5> <?php echo $row['prospectus_issued']  ?></div>
			</div>
			<div class="row pt-3">
				<div class="col-md-4"><h5>Phone No:</h5> <?php echo $row['mobile_no']  ?></div>
				<div class="col-md-4"><h5>Province:</h5> <?php echo $row['state']  ?></div>
				<div class="col-md-4"><h5>Siège:</h5> <?php echo $row['semester']  ?></div>
			</div>
			<div class="row pt-3">
				<div class="col-md-4"><h5>Genre:</h5> <?php echo $row['gender']  ?></div>
				<div class="col-md-4"><h5>Département:</h5> <?php echo $row['course_code']  ?></div>
				<div class="col-md-4"><h5>Comité:</h5> <?php echo $row['session']  ?></div>
			</div>
			<div class="row pt-3">
				<div class="col-md-4"><h5>Date de Naissance:</h5> <?php echo $row['dob']  ?></div>
				<div class="col-md-4"><h5> Date D'Adhésion au Parti:</h5> <?php echo $row['admission_date']  ?></div>
				<div class="col-md-4"><h5>Lieu de vote/Circoncription Politique /Qualité/ Fonction dans le Parti:</h5> <?php echo $row['form_b']  ?></div>
			</div>
			<div class="row pt-3">
				<div class="col-md-4"><h5>Adresse Permanente :</h5> <?php echo $row['permanent_address']  ?></div>
				<div class="col-md-4"><h5>Quartier:</h5> <?php echo $row['current_address']  ?></div>
				<div class="col-md-4"><h5>Lieu de Naissance:</h5> <?php echo $row['place_of_birth']  ?></div>
			</div>
			<div class="row pt-3">
			<div class="col-md-4"><h5>Date d'Adhésion au Parti:</h5> <?php echo $row['matric_complition_date']  ?></div>
				<div class="col-md-4"><h5>Date de Nomination:</h5> <?php echo $row['matric_awarded_date']  ?></div>
				<div class="col-md-4"><h5>Certificat de Formation:</h5> <?php echo $row['matric_certificate']  ?></div>
			</div>
			<div class="row pt-3">
				<div class="col-md-4"><h5>Date d'Enrolement:</h5> <?php echo $row['fa_complition_date']  ?></div>
				<div class="col-md-4"><h5>Date d'attribution:</h5> <?php echo $row['fa_awarded_date']  ?></div>
				<div class="col-md-4"><h5>Certification:</h5> <?php echo $row['fa_certificate']  ?></div>
			</div>
			<div class="row pt-3">
				<div class="col-md-4"><h5> Date d'achèvement:</h5> <?php echo $row['ba_complition_date']  ?></div>
				<div class="col-md-4"><h5> Date d'attribution:</h5> <?php echo $row['ba_awarded_date']  ?></div>
				<div class="col-md-4"><h5> Certificate:</h5> <?php echo $row['ba_certificate']  ?></div>
			</div>
		</div>
	<?php } ?>
</body>
</html>

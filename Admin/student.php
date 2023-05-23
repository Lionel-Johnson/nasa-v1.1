<!---------------- Session starts form here ----------------------->
<?php  
	session_start();
	if (!$_SESSION["LoginAdmin"])
	{
		header('location:../login/login.php');
	}
		require_once "../connection/connection.php";
		$_SESSION["LoginStudent"]="";
	?>
<!---------------- Session Ends form here ------------------------>


<!--*********************** PHP code starts from here for data insertion into database ******************************* -->
<?php  
 	if (isset($_POST['btn_save'])) {

		$roll_no= $_POST["roll_no"];

 		$first_name=$_POST["first_name"];

 		$middle_name=$_POST["middle_name"];
 		
 		$last_name=$_POST["last_name"];
 		
 		$father_name=$_POST["father_name"];
 		
 		$email=$_POST["email"];
 		
 		$mobile_no=$_POST["mobile_no"];

 		$course_code=$_POST['course_code'];

 		$session=$_POST['session'];
 		
 		$prospectus_issued=$_POST["prospectus_issued"];
 		
 		$prospectus_amount=$_POST["prospectus_amount"];
 		
 		$form_b=$_POST["form_b"];
 		
 		$applicant_status=$_POST["applicant_status"];
 		
 		$application_status=$_POST["application_status"];
 		
 		$cnic=$_POST["cnic"];
 		
 		$dob=$_POST["dob"];
 		 		
 		$gender=$_POST["gender"];
 		
		$permanent_address=$_POST["permanent_address"];
 		
 		$current_address=$_POST["current_address"];
 		
 		$place_of_birth=$_POST["place_of_birth"];
 		
 		$matric_complition_date=$_POST["matric_complition_date"];
 		
 		$matric_awarded_date=$_POST["matric_awarded_date"];
 		
 		$fa_complition_date=$_POST["fa_complition_date"];
 		
 		$fa_awarded_date=$_POST["fa_awarded_date"];
 		
 		$ba_complition_date=$_POST["ba_complition_date"];
 		
 		$ba_awarded_date=$_POST["ba_awarded_date"];

 		$password=$_POST['password'];

 		$role=$_POST['role'];

 		

// *****************************************Images upload code starts here********************************************************** 
		$profile_image = $_FILES['profile_image']['name'];$tmp_name=$_FILES['profile_image']['tmp_name'];$path = "images/".$profile_image;move_uploaded_file($tmp_name, $path);

		$matric_certificate = $_FILES['matric_certificate']['name'];$tmp_name=$_FILES['matric_certificate']['tmp_name'];$path = "images/".$matric_certificate;move_uploaded_file($tmp_name, $path);

		$fa_certificate = $_FILES['fa_certificate']['name'];$tmp_name=$_FILES['fa_certificate']['tmp_name'];$path = "images/".$fa_certificate;move_uploaded_file($tmp_name, $path);

		$ba_certificate = $_FILES['ba_certificate']['name'];$tmp_name=$_FILES['ba_certificate']['tmp_name'];$path = "images/".$ba_certificate;move_uploaded_file($tmp_name, $path);


// *****************************************Images upload code end here********************************************************** 

 		$query="Insert into student_info(roll_no,first_name,middle_name,last_name,father_name,email,mobile_no,course_code,session,profile_image,prospectus_issued,prospectus_amount,form_b,applicant_status,application_status,cnic,dob,gender,permanent_address,current_address,place_of_birth,matric_complition_date,matric_awarded_date,matric_certificate,fa_complition_date,fa_awarded_date,fa_certificate,ba_complition_date,ba_awarded_date,ba_certificate)values('$roll_no','$first_name','$middle_name','$last_name','$father_name','$email','$mobile_no','$course_code','$session','$profile_image','$prospectus_issued','$prospectus_amount','$form_b','$applicant_status','$application_status','$cnic','$dob','$gender','$permanent_address','$current_address','$place_of_birth','$matric_complition_date','$matric_awarded_date','$matric_certificate','$fa_complition_date','$fa_awarded_date','$fa_certificate','$ba_complition_date','$ba_awarded_date','$ba_certificate')";
 		$run=mysqli_query($con, $query);
 		if ($run) {
 			echo "Vos données ont été soumises";
 		}
 		else {
 			echo "Vos données n'ont pas été soumisesYour Data has not been submitted";
 		}
 		$query2="insert into login(user_id,Password,Role)values('$roll_no','$password','$role')";
 		$run2=mysqli_query($con, $query2);
 		if ($run2) {
 			echo "Vos données ont été soumises dans la connexion";
 		}
 		else {
 			echo "Vos données n'ont pas été soumises lors de la connexion";
 		}
 	}
?>


<?php  
	if (isset($_POST['btn_save2'])) {
		$course_code=$_POST['course_code'];

		$semester=$_POST['semester'];

		$roll_no=$_POST['roll_no'];

		$subject_code=$_POST['subject_code'];

		$date=date("d-m-y");

		$query3="insert into student_courses(course_code,semester,roll_no,subject_code,assign_date)values('$course_code','$semester','$roll_no','$subject_code','$date')";
		$run3=mysqli_query($con,$query3);
		if ($run3) {
 			echo "Vos données ont été soumises";
 		}
 		else {
 			echo "Vos données n'ont pas été soumises";
 		}


	}
?>
<!--*********************** PHP code end from here for data insertion into database ******************************* -->
 
<!doctype html>
<html lang="en">
	<head>
		<title>Admin - Enregistrement des Militants</title>
	</head>
	<body>
		<?php include('../common/common-header.php') ?>
		<?php include('../common/admin-sidebar.php') ?>
		<main role="main" class="col-xl-10 col-lg-9 col-md-8 ml-sm-auto px-md-4 w-100">
			<div class="sub-main">
				<div class="text-center d-flex flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 text-white admin-dashboard pl-3">
					<div class="d-flex">
						<h4 class="mr-5">NASA - G8 | Système des Gestion des Données personnalisées des Militants du PDG </h4>
						<button type="button" class="btn btn-primary ml-5" data-toggle="modal" data-target=".bd-example-modal-lg">Ajouter un Militant</button>
					</div>
				</div>
				<div class="col-md-2 pt-3 w-100">
  				    <!-- Large modal -->
					<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
					   <div class="modal-dialog modal-lg">
						    <div class="modal-content">
							    <div class="modal-header bg-info text-white">
							        <h4 class="modal-title text-center">Ajouter un Nouveau Militant</h4>
						        </div>
							    <div class="modal-body">
								<form action="student.php" method="POST" enctype="multipart/form-data">
					<div class="row mt-3">
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputEmail1">Nom du Militant:*</label>
								<input type="text" name="first_name" class="form-control" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1">Prénom du Militant:</label>
								<input type="text" name="middle_name" class="form-control">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1" required>Possède une Pièce d'identité?:*</label>
								<input type="text" name="last_name" class="form-control">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputEmail1">Type de pièce d'identité:*</label>
								<input type="text" name="father_name" class="form-control" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1">Email du Militant:*</label>
								<input type="email" name="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1">Téléphone:*</label>
								<input type="number" name="mobile_no" class="form-control" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputEmail1">Département du Militant: </label>
								<select class="browser-default custom-select" name="course_code">
									<option >Select Département</option>
									<?php
										$query="select course_code from courses";
										$run=mysqli_query($con,$query);
										while($row=mysqli_fetch_array($run)) {
											echo	"<option value=".$row['course_code'].">".$row['course_code']."</option>";
										}
									?>
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1">Fédération du Militant:</label>
								<select class="browser-default custom-select" name="session">
									<option >Select Fédération</option>
									<?php
										$query="select session from sessions";
										$run=mysqli_query($con,$query);
										while($row=mysqli_fetch_array($run)) {
											echo	"<option value=".$row['session'].">".$row['session']."</option>";
										}
									?>
								</select>

							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1">Votre image de Profile:</label>
								<input type="file" name="profile_image" placeholder="Student Age" class="form-control">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputEmail1">Aviez-vous déjà voté?: </label>
								<select class="browser-default custom-select" name="prospectus_issued">
									<option>Select Option</option>
									<option value="Yes">Oui</option>
									<option value="No">Non</option>
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1">Selectionner  le Siège:</label>
								<select class="browser-default custom-select" name="prospectus_amount">
									<option>Select Option</option>
									<option value="Siège">1er Siège</option>
									<option value="Siège">2ème Siège</option>
									<option value="Siège">3ème Siège</option>
									<option value="Siège">4ème Siège</option>
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1">Lieu/Circonscription Politique/Qualité/Fonction au sein du Parti:</label>
								<input type="text" name="form_b" class="form-control">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputEmail1">Potentiel Electeur?: </label>
								<select class="browser-default custom-select" name="applicant_status">
									<option>Select Option</option>
									<option value="Admitted">Oui</option>
									<option value="Not Admitted">Non</option>
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1">Application Status:</label>
								<select class="browser-default custom-select" name="application_status">
									<option>Select Option</option>
									<option value="Approved">Apprové</option>
									<option value="Not Approved">Non Apprové</option>
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1">N° de la Pièce d'Identité:</label>
								<input type="text" name="cnic" data-inputmask="'mask': '99999-9999999-9'" placeholder="XXXXX-XXXXXXX-X" class="form-control">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputEmail1">Date de Naissance: </label>
								<input type="date" name="dob" class="form-control">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1">Nom de la Section:</label>
								<input type="number" name="other_phone" class="form-control">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1">Genre:</label>
								<select class="browser-default custom-select" name="gender">
									<option>Select Genre</option>
									<option value="Male">Masculin</option>
									<option value="Female">Féminin</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputEmail1">Nom du Comité: </label>
								<input type="text" name="permanent_address" class="form-control">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1">Adresse/Quartier:</label>
								<input type="text" name="current_address" class="form-control">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1">Lieu de Naisssance:</label>
								<input type="text" name="place_of_birth" class="form-control">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputEmail1">Qualité du Militant: </label>
								<input type="text" name="matric_complition_date" class="form-control">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1">Date d'Enregistrement:</label>
								<input type="date" name="matric_awarded_date" class="form-control">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1">Téléverser le justificatif:</label>
								<input type="file" name="matric_certificate" class="form-control" value="there is no image">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputEmail1">Date d'Adhésion au Parti: </label>
								<input type="date" name="fa_complition_date" class="form-control">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1">Date d'enrolement:</label>
								<input type="date" name="fa_awarded_date" class="form-control">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1">Téléverser le justificatif:</label>
								<input type="file" name="fa_certificate" class="form-control" value="there is no image" >
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputEmail1"> Mandat Electif: </label>
								<input type="date" name="ba_complition_date" class="form-control" value="0">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1">Validité:</label>
								<input type="date" name="ba_awarded_date" class="form-control">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1">Téléverser le justificatif:</label>
								<input type="file" value="C:/xampp/htdocs/Imperial University/Images/no-image-available.jpg" name="ba_certificate" class="form-control" >
							</div>
						</div>
					</div>
					<!-- _________________________________________________________________________________
														Hidden Values are here
					_________________________________________________________________________________ -->
					<div>
						<input type="hidden" name="password" value="student123*">
						<input type="hidden" name="role" value="Student">
					</div>
								  		<!-- _________________________________________________________________________________
								  											Hidden Values are end here
								  		_________________________________________________________________________________ -->
								  		<div class="modal-footer">
						   		            <input type="submit" class="btn btn-primary" name="btn_save">
		      								<button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
									    </div>
									</form>
						        </div>
						    </div>
					   </div>
					</div>
				</div>
				<div class="row w-100">
					<div class="col-md-12 ml-2">
						<section class="mt-3">
							<div class="row">
								<div class="col-md-6">
									<form action="search_student.php" method="post">
										<div class="form-group">
											<label for="exampleInputPassword1"><h5>Recherche:</h5></label>
											<div class="d-flex">
												<input type="text" name="search" id="search" class="form form-control" placeholder="Entrer  L'Id">
												<input class="btn btn-primary px-4 ml-4" type="submit" name="btnSearch" value="Search">
											</div>
										</div>
									</form>
								</div>	
								<div class="col-md-12 pt-5 mb-2">
									<!-- Large modal -->
									<button type="button" class="btn btn-primary ml-auto" data-toggle="modal" data-target=".bd-example-modal-lg1">Assigner des Sujets</button>
									<a class="btn btn-success" href="asign-single-student-subjects.php"> Assigner des tâches personnelles au Militants</a>
									<div class="modal fade bd-example-modal-lg1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg">
												<div class="modal-content">
													<div class="modal-header bg-info text-white">
														<h4 class="modal-title text-center">Assigner des sujets au Miliitant</h4>
													</div>
													<div class="modal-body">
														<form action="student.php" method="POST" enctype="multipart/form-data">
															<div class="row mt-3">
																<div class="col-md-6">
																	<div class="form-group">
																		<label for="exampleInputEmail1">Selection du Département:*</label>
																		<select class="browser-default custom-select" name="course_code" required="">
																			<option >Selectionne un Département</option>
																			<?php
																				$query="select course_code from courses";
																				$run=mysqli_query($con,$query);
																				while($row=mysqli_fetch_array($run)) {
																				echo	"<option value=".$row['course_code'].">".$row['course_code']."</option>";
																				}
																			?>
																		</select>
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="form-group">
																		<label for="exampleInputPassword1" required>Entrer Semester:*</label>
																		<input type="text" name="semester" class="form-control">
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label for="exampleInputPassword1">Numéro d'enregistrement:*</label>
																		<input type="text" name="roll_no" class="form-control">
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="form-group">
																		<label for="exampleInputPassword1">Selection du  Sujet:*</label>
																		<select class="browser-default custom-select" name="subject_code" required="">
																			<option >Selectionner le Sujet</option>
																			<?php
																				$query="select subject_code from course_subjects";
																				$run=mysqli_query($con,$query);
																				while($row=mysqli_fetch_array($run)) {
																				echo	"<option value=".$row['subject_code'].">".$row['subject_code']."</option>";
																				}
																			?>
																		</select>
																	</div>
																</div>	
															</div>
															<div class="modal-footer">
																<input type="submit" class="btn btn-primary" name="btn_save2">
																<button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
															</div>
														</form>
													</div>
												</div>
										</div>
									</div>
								</div>
							</div>
							<table class="w-100 table-elements mb-5 table-three-tr text-center" cellpadding="10">
								<tr class="table-tr-head table-three text-white">
									<th>No Enregistrement</th>
									<th>Nom du Militant</th>
									<th>Adresse/Quartier</th>
									<th>Fédération</th>
									<th>ID Département</th>
									<th>Centre de vote</th>
									<th>Profile</th>
									<th colspan="1">Operations</th>
								</tr>
								<?php 
								$query="select first_name,middle_name,admission_date,last_name,current_address,session,roll_no,form_b ,profile_image,course_code from student_info";
								$run=mysqli_query($con,$query);
								while($row=mysqli_fetch_array($run)) {?>
									<tr>
										<td><?php echo $row["roll_no"] ?></td>
										<td><?php echo $row["first_name"]." ".$row["middle_name"]." ".$row["last_name"] ?></td>
										<td><?php echo $row["current_address"] ?></td>
										<td><?php echo $row["session"] ?></td>
										<td><?php echo $row["course_code"] ?></td>
										<!-- date_format($date,"Y/m/d H:i:s"); -->
										<td><?php echo date("Y-M-d",strtotime($row["admission_date"])); ?></td>
										<td><?php  $profile_image= $row["profile_image"] ?>
										<img height='50px' width='50px' src=<?php echo "images/$profile_image"  ?> >
										</td>
										<td width='170'> 
											<?php 
												echo "<a class='btn btn-primary' href=display-student.php?roll_no=".$row['roll_no'].">Profile</a> 
												<a class='btn btn-danger' href=delete-function.php?roll_no=".$row['roll_no'].">Supprimer</a> "
											?>
										</td>
									</tr>
								<?php }
								?>
							</table>				
						</section>
					</div>
				</div>	 
			</div>
		</main>
		<script type="text/javascript" src="../bootstrap/js/jquery.min.js"></script>
		<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Fiche d'Actualisation</title>
</head>
<body>
	<?php include('common/header.php') ?>
	<div class="container-fluid">
		<div class="row pt-2">
			<div class="col-xl-12 col-lg-12 col-md-12 w-100">
				<div class="bg-info text-center">
					<div class="table-one flex-wrap flex-md-no-wrap pt-3 pb-2 mb-3 text-white admin-dashboard pl-3">
						<h4>Formulaire de demande d'enregistrement</h4>
					</div>
				</div>
			</div>
		</div>
		<div class="row m-3">
			<div class="col-md-12">
				<form action="student.php" method="POST" enctype="multipart/form-data">
					<div class="row mt-3">
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputEmail1">Prénom du demandeur:*</label>
								<input type="text" name="first_name" class="form-control" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1">Deuxième prénom du demandeur:</label>
								<input type="text" name="middle_name" class="form-control">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1" required>Nom de famille du demandeur:*</label>
								<input type="text" name="last_name" class="form-control">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputEmail1">Nom de votre fédéral:*</label>
								<input type="text" name="father_name" class="form-control" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1">E-mail du demandeur:*</label>
								<input type="email" name="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1">Numéro de Téléphone:*</label>
								<input type="number" name="mobile_no" class="form-control" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputEmail1">Département que vous souhaitez intégrer: </label>
								<select class="browser-default custom-select" name="course_code">
									<option >Selectionner le Département</option>
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
								<label for="exampleInputPassword1">Selection une fédération:</label>
								<select class="browser-default custom-select" name="session">
									<option >Selectionner lq f2d2rqtion</option>
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
								<label for="exampleInputPassword1">votre photo de Profile</label>
								<input type="file" name="profile_image" placeholder="Student Age" class="form-control">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputEmail1">Avez-vous un justificatif?: </label>
								<select class="browser-default custom-select" name="prospectus_issued">
									<option>Selectionner une Option</option>
									<option value="Yes">Oui</option>
									<option value="No">Non</option>
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1">Avez-vous les reçus de vos cotisations?:</label>
								<select class="browser-default custom-select" name="prospectus_amount">
									<option>Selectionner une Option</option>
									<option value="Yes">Oui</option>
									<option value="No">Non</option>
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1">Zone Administrateur:</label>
								<input type="text" name="form_b" class="form-control">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputEmail1">Statut du militant: </label>
								<select class="browser-default custom-select" name="applicant_status">
									<option>Sélectionner une option</option>
									<option value="Admitted">Accepté</option>
									<option value="Not Admitted">Refusé</option>
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1">Statut du militant:</label>
								<select class="browser-default custom-select" name="application_status">
									<option>Selectionner une Option</option>
									<option value="Approved">Approuvé</option>
									<option value="Not Approved">Non Approuvé</option>
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1">Numéro d'Enregistrement:</label>
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
								<label for="exampleInputPassword1">Centre de Vote:</label>
								<input type="text" name="other_phone" class="form-control">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1">Genre:</label>
								<select class="browser-default custom-select" name="gender">
									<option>Selectionner le sexe</option>
									<option value="Male">Masculin</option>
									<option value="Female">Féminin</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputEmail1">adresse permanente: </label>
								<input type="text" name="permanent_address" class="form-control">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1">Bureau de Vote:</label>
								<input type="text" name="current_address" class="form-control">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1">Lieu de Naissance:</label>
								<input type="text" name="place_of_birth" class="form-control">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputEmail1">Date d'adhésion au Parti: </label>
								<input type="date" name="matric_complition_date" class="form-control">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1">Date d'enrolement au Parti:</label>
								<input type="date" name="matric_awarded_date" class="form-control">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1">Téléverser le justificatif d'enrolement:</label>
								<input type="file" name="matric_certificate" class="form-control" value="there is no image">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputEmail1">FA/ALevel Complition Date: </label>
								<input type="date" name="fa_complition_date" class="form-control">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1">FA/ALevel Awarded Date:</label>
								<input type="date" name="fa_awarded_date" class="form-control">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1">Téléverser votre pièce d'identité:</label>
								<input type="file" name="fa_certificate" class="form-control" value="there is no image" >
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputEmail1">Date d'établissement: </label>
								<input type="date" name="ba_complition_date" class="form-control" value="0">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1">Date d'expiration:</label>
								<input type="date" name="ba_awarded_date" class="form-control">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1">Téléverser une autre pièce?:</label>
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
						<input type="submit" class="btn btn-primary px-5" name="btn_save">
					</div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 w-100 p-5">
				<h4 class="bg-secondary p-3 text-center text-white">Entreprise</h4>
				<h5>Les militants en attente de résultats sont tenus de signer l'engagement suivant:</h5>
				<p class="tet-justify">
				Je déclare solennellement avoir soumis la demande avec le consentement de mon père / tuteur. Je m'engage à respecter les règles et règlements du PDG (NASA-G8) et je ne participerai à aucune activité politique de quelque nature que ce soit. Si je le fais, l'administration du PDG aura le droit de rayer mon nom des listes du PDG. Je m'engage à ne pas garder en ma possession d'armes d'aucune sorte, qu'elles soient autorisées ou non. J'affirme que je n'ai jamais été expulsé / rusticité par aucune institution à aucun moment. Je comprends que si mon pourcentage d'assiduité aux cours n'est pas au niveau requis par le PDG, je ne serai pas éligible pour passer les examens finaux. J'affirme que si à tout moment les documents que j'ai soumis pour l'admission s'avèrent faux, faux ou erronés, j'en serai responsable et l'administration PDG sera en droit d'annuler mon admission et de prendre les mesures nécessaires contre moi.					I solemnly declare that I have submitted the application with the consent of my father / guardian. I pledge to abide by the Rules and Regulations of the ICBS Lahore and shall not take part in political activities of any kind. If I do so the ICBS Administration will have the right to strike my name off the ICBS Rolls. I pledge that I will not keep in my possession weapons of any kind whether licensed or unlicensed. I affirm that I was never expelled / rusticated by any Institution at any time. I understand that if my class attendance percentage is not up to the required standard of the ICBS, I will not be eligible to sit in the final examinations. I affirm that if at any stage the documents submitted by me for admission are proved forged, fake, or erroneous I shall be responsible for that and the ICBS Administration shall be rightful to cancel my admission and to take necessary action against me..
				</p>
			</div>
		</div>	
	</div>
</body>
</html>
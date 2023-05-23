	<div class="row w-100">
		<button class="show-btn button-show ml-auto">
		<i class="fa fa-bars py-1" aria-hidden="true"></i>
		</button> 
	</div>
		<nav id="sidebarMenu" class="">
			<div class="col-xl-2 col-lg-3 col-md-4 sidebar position-fixed border-right">
				<div class="sidebar-header">
					<div class="nav-item">
						<a class="nav-link text-white" href="../student/student-index.php">
							<span class="home"></span>
							<i class="fa fa-home mr-2" aria-hidden="true"></i>Tableau de Bord 
						</a>
					</div>
				</div>
				<ul class="nav flex-column">
					<li class="nav-item">
						<a class="nav-link" href="../admin/display-student.php">
						<span data-feather="file"></span>
						<i class="fa fa-user mr-2" aria-hidden="true"></i> Profile Personnel
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../student/student-personal-information.php">
						<span data-feather="file"></span>
						<i class="fa fa-info-circle mr-2" aria-hidden="true"></i>Informations Personnelles
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../student/student-result.php">
						<span data-feather="shopping-cart"></span>
						<i class="fa fa-th-list mr-2" aria-hidden="true"></i> Résultats Militants
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../student/student-transcript.php">
						<span data-feather="shopping-cart"></span>
						<i class="fa fa-th-list mr-2" aria-hidden="true"></i>Transcription des Militants
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../student/student-fee.php">
						<span data-feather="users"></span>
						<i class="fa fa-credit-card-alt mr-2" aria-hidden="true"></i> Justificatifs
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../student/student-password.php">
						<span data-feather="bar-chart-2"></span>
						<i class="fa fa-key mr-2" aria-hidden="true"></i> Changer mot de Passe
						</a>
					</li>
				</ul>
			</div>
		</nav>
		
		<script>
			const toggleBtn = document.querySelector(".show-btn");
			const sidebar = document.querySelector(".sidebar");
			// undefined
			toggleBtn.addEventListener("click",function(){
				sidebar.classList.toggle("show-sidebar");
			});
		</script>
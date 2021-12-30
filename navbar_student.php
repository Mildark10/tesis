<div class="navbar navbar-fixed-top navbar-inverse">
        <div class="navbar-inner">
            <div class="container-fluid"  style="width: 105%; display: flex;justify-content: space-between;">
				<div style="">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
					<span class="icon-bar"></span><span class="icon-bar"></span>
                </a>
				</div>
               <div>
			  		 <a class="brand" href="#">Bienvenido a juan Pablo II</a>
				<span><img src="admin/images/img/colegio.png" style="width: 32px; margin: 0; padding:0" alt=""></span>
				
			   </div>
					
					<div class="nav-collapse collapse">
						<ul class="nav pull-right">
							<?php $query= mysqli_query($conn,"select * from student where student_id = '$session_id'")or die(mysqli_error());
									$row = mysqli_fetch_array($query);
							?>
							<li class="dropdown">
								<a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user icon-large"></i><?php echo $row['firstname']." ".$row['lastname'];  ?> <i class="caret"></i></a>
									<ul class="dropdown-menu">
										<li><a tabindex="-1" href="change_password_student.php"><i class="icon-circle"></i> Cambiar Contraseña</a></li>
										<li class="divider"></li>
										<li>
											<a tabindex="-1" href="logout.php"><i class="icon-signout"></i>&nbsp;Salir del sistema</a>
										</li>
									</ul>
							</li>
						</ul>
					</div>
            </div>
        </div>
</div>
<?php include('avatar_modal_student.php'); ?>	
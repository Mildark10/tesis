			<form id="login_form1" class="form-signin" method="post">
						<h3 class="form-signin-heading"><i class="icon-lock "></i> Inicie Sesion</h3>
						<input type="text" class="input-block-level" id="username" name="username" placeholder="ingrese usuario" required>
						<input type="password" class="input-block-level" id="password" name="password" placeholder="ingrese contraseña	" required>
						<button data-placement="right" title="Click para ingresar al sistema" id="signin" name="login" class="btn btn-info" type="submit"><i class="icon-signin icon-large"></i> Ingrese</button>
														<script type="text/javascript">
														$(document).ready(function(){
															$('#signin').tooltip('show');
															$('#signin').tooltip('hide');
														});
														</script>		
			</form>
						<script>
						jQuery(document).ready(function(){
						jQuery("#login_form1").submit(function(e){
								e.preventDefault();
								var formData = jQuery(this).serialize();
								$.ajax({
									type: "POST",
									url: "login.php",
									data: formData,
									success: function(html){
									if(html=='true')
									{
									$.jGrowl("Cargando espere unos segundos......", { sticky: true });
									$.jGrowl("Bienvenido a Juan Pablo II", { header: 'Acceso permitido' });
									var delay = 1000;
										setTimeout(function(){ window.location = 'dasboard_teacher.php'  }, delay);  
									}else if (html == 'true_student'){
										$.jGrowl("Bienvenido a Juan Pablo II", { header: 'Acceso permitido' });
									var delay = 1000;
										setTimeout(function(){ window.location = 'student_notification.php'  }, delay);  
									}else
									{
									$.jGrowl("Please Check your username and Password", { header: 'Login Failed' });
									}
									}
								});
								return false;
							});
						});
						</script>
			<!-- <div id="button_form" class="form-signin" > -->
<!-- 			New to CHMSC OLMS
			<hr>
				<h3 class="form-signin-heading"><i class="icon-edit"></i> Sign up</h3>
				<button data-placement="top" title="Sign In as Student" id="signin_student" onclick="window.location='signup_student.php'" id="btn_student" name="login" class="btn btn-info" type="submit">I`m a Student</button>
				<div class="pull-right">
					<button data-placement="top" title="Sign In as Teacher" id="signin_teacher" onclick="window.location='signup_teacher.php'" name="login" class="btn btn-info" type="submit">I`m a Teacher</button>
				</div>
			</div>
														<script type="text/javascript">
														$(document).ready(function(){
															$('#signin_student').tooltip('show'); $('#signin_student').tooltip('hide');
														});
														</script>	
														<script type="text/javascript">
														$(document).ready(function(){
															$('#signin_teacher').tooltip('show'); $('#signin_teacher').tooltip('hide');
														});
														</script>	 -->
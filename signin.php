<?php
include("head.php");
?>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">User access</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Sign in</h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Sign in to your account</h3>
							<p class="text-center text-muted">Lorem ipsum dolor sit amet, <a href="signup.php">Register</a> adipisicing elit. Quo nulla quibusdam cum doloremque incidunt nemo sunt a tenetur omnis odio. </p>
							<hr>
							
							<form action="" method="post">
								<div class="top-margin">
									<label>Username/Email <span class="text-danger">*</span></label>
									<input type=="text" class="form-control" name="Email">
								</div>
								<div class="top-margin">
									<label>Password <span class="text-danger">*</span></label>
									<input type="password" class="form-control" name="Password">
								</div>

								<hr>

								<div class="row">
									<div class="col-lg-8">
										<b><a href="forgot_password.php">Forgot password?</a></b>
									</div>
									<div class="col-lg-4 text-right">
									<a href="signup.php">Register</a>
										<button class="btn btn-action" type="submit" >Sign in</button>	
										<?php
										    include("conn/connect.php");
                                            if(isset($_POST["Email"])){
                                                if($_POST["Email"]==""){
                                                echo "<Script Language='JavaScript'> alert('请输入用户名')</Script>";
                                                exit();    
                                                }else{
                                                    $Connect=new Connect();
                                                    $Connect->sign_in();
                                                }
                                              }
                                            ?>
									</div>
								</div>
							</form>
						</div>
					</div>

				</div>
				
			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->
	
	
	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
		<script src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"> </script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
	
</body>
</html>
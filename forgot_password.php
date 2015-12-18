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
					<h1 class="page-title">Find Password</h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">请输入注册邮箱</h3>
							<p class="text-center text-muted">还没注册？ <a href="signup.php">马上就去</a>  </p>
							
							
								<form action="" method="post">
								<div class="top-margin">
									<label>Email <span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="Email">
								</div>
								
								

								
									<div class="col-lg-13 text-right">
										<p></p>
										<button class="btn btn-action" type="submit" >完成</button>	
										<?php
										    /*include("conn/connect.php");
                                            if(isset($_POST["Email"])){
                                                if($_POST["Email"]==""){
                                                echo "<Script Language='JavaScript'> alert('请输入用户名')</Script>";
                                                exit();    
                                                }else{
                                                    $Connect=new Connect();
                                                    $Connect->sign_in();
                                                }
                                              }*/
                                            ?>
									</div>
								
							</form>
						</div>
					</div>

				</div>
				
			</article>
			<!-- /Article -->

		</div>
	</div >	<!-- /container -->
	<!-- <div style="width:100%; position:fixed; left:0; bottom:0;"> -->
	
	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"> </script>
    <script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
	<!-- </div> -->
</body>
</html>
<?php
include("head.php");
?>

<style type="text/css">
.imgme {width: 400px;float: left;margin-left: 50px;margin-top: 95px}
.userbox{height: 200px;width: 150%;z-index:-100;position: absolute ;left:-300px ; top:60px;background-color: #FFF}
.kuai2{float: left;margin-left:0px ;margin-top: 95px}

</style>

	<!-- container -->
	<div class="container">

		
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				
				<div class="userbox">
				</div>
				<div style="float:left">
					<img style="margin-top:20px"src="assets/images/me.jpg" height="200" width="200" style="border:6px solid #fff" data-toggle="modal"  data-target="#myModal">
					<br>
					<font id="belike" size="+1" color="red" style="position: relative;left:33px">关注度：225</font>
				</div>

				<div class="imgme">
					<div class="locationname">
						<font size="+1">昵称：</font><input id="inputname" /><br/> 
							
						<font size="+1">专长：</font><input id="inputprofession" /><br/>
					
						<font size="+1">简介：</font><input id="inputintroduce" /><br/>
							
						
					</div>
						
				</div>
				<div class="kuai2">
				<div> <font id="email" size="+1">个人邮箱：</font><input id="inputemail" /><br/></div>
				<div><font id="touch" size="+1">联系方法：</font><input id="inputtouch" /></div>
				</div>
				<div style="float:left;margin-top: 95px;margin-left:30px">
					<a type="button" class="btn btn-default location-edit" href="user.html">Save</a>
				</div>
			</article>

		

	</div>	<!-- /container -->
	

	<!-- 模态框（Modal） -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" 
	   aria-labelledby="myModalLabel" aria-hidden="true">
	   <div class="modal-dialog modal-tx">
	      <div class="modal-content">
	         <div class="modal-header">
	            <button type="button" class="close" 
	               data-dismiss="modal" aria-hidden="true">
	                  &times;
	            </button>
	            <h4 class="modal-title" id="myModalLabel">
	               上传头像
	            </h4>
	         </div>
	         <div class="modal-body">
	            <div class="wrap" id="jcropdiv">
                <div class="wl">
                    <div class="jc-demo-box" data="0">
                        <div id="target" class="jcrop_w" >
                            <img id="head_2" border="0" onmousewheel="return bbimg(this)"/>
                        </div>
                    </div>
                    
                </div>
			 
              
                
			 </div>
	         </div>
	         <div class="modal-footer">
	        		 <div class="wr" id="preview-pane">
	                    <div class="preview-container">
	                        <div class="pre-1">
                            	<img id="head_1" class="jcrop-preview jcrop_preview_s" alt="" />
                        	</div>
	                       
	                    </div>
	                </div>
	            <div style="position:relative;left:-25px">
	            	<div style="position:relative;top:75px">
				        <input type="file" id="inputpic" style="display:none" onchange="Showpic()"/>
							<input  class="btn btn-default" type="button" id="btn" onclick="document.getElementById('inputpic').click();" value="上传" />
				        
			        </div>
	            	<div style="position:relative;top:95px">
			            <a type="button" onClick="submitIMG()" class="btn btn-primary">
			               提交
			            </a>
			        </div>
		        </div>
	         </div>
	      </div><!-- /.modal-content -->
	</div><!-- /.modal -->
	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	
	<script src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"> </script>
    <script type="text/javascript" src="assets/js/jQuery.js"> </script>
	<script type="text/javascript" src="assets/js/jquery.Jcrop.js"> </script>
	<script type="text/javascript" src="assets/js/basic.js"> </script>
	<script src="assets/js/user_edit_js.js"></script>
</body>
</html>
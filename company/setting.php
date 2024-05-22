<?php require_once('header.php'); ?>
            <div class="row wrapper border-bottom white-bg page-heading">
                        <div class="col-lg-10">
                            <h2>الملف الشخصى</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">الرئيسية</a>
                                </li>
                                <li class="active">
                                    <a>الملف الشخصى</a>
                                </li>
                                
                            </ol>
                        </div>
                        <div class="col-lg-2">
                        </div>
                    </div>
            <div class="wrapper wrapper-content animated fadeInRight">
               <div class="row">
                  <!--  -->
                  <div class="col-md-12">
                            <div class="x_panel ibox float-e-margins">
                                
                                <div class="x_content ibox-content">
                                    <div class="row">
										
						 <?php
                    	
								$token=$_SESSION['company_token'];
 $sql="SELECT * FROM `company` WHERE `company_token`='$token'";

			$query=mysqli_query($con,$sql);


			if($query) // will return true if succefull else it will return false
			 {

					 $row=mysqli_fetch_assoc($query);
				     $id=$row["id"];
				     $username=$row["username"]; 
					 $img=$row["logo"];
				     $password=$row["password"];
				?>
                       <div class="col-lg-12">
						    <form  class="form-horizontal" action="api/edit_company.php" method="post" enctype="multipart/form-data">
							 <input type="text" hidden="hidden" name="id" value="<?php echo $id; ?>">
                                <div class="ibox ">
                                    
                                    <div class="">
										
                                        <!--  -->
                                        <div class="">
                                            <div class="form-horizontal  m-t-lg">
                                                <!--  -->
                                                <div class="form-group">
                                                    <div class="col-lg-3 col-md-offset-5">
                                                        <div class=" thumbnail" style="max-width: 150px; max-height: 150px"> <img id="img" src="<?php if($img=="")
				{
					echo 'img/icon.png';
				}
				else	
				{
					echo "../Dalily_admin/".$img;
				} ?>" alt=""></div>
                                                        
                                                        <label for="upload" class="btn btn-primary">تعديل صورة اللوجو
                                                            <input name="img" type="file" id="upload">
                                                        </label>
                                                        
                                                    </div>
                                                    
                                                </div>
                                                
                                                
                                                <!--  -->
                                     
												
												
						                <div class="form-group"><label class="col-lg-2 control-label">اسم الدخول </label>
                                                <div class="col-lg-10"><input name="username" required="required" value="<?php echo $username; ?>" type="text" placeholder="" class="form-control" >
                                            </div>
                                        </div>
                                       
                                <div class="form-group"><label class="col-lg-2 control-label">كلمة المرور</label>
                                <div class="col-lg-10"><input type="password"  value="<?php echo $password; ?>" required="required" id="password" name="password1" placeholder="*****" class="form-control">
                            </div>
                        </div>
                        <div class="form-group"><label class="col-lg-2 control-label">  تأكيد كلمة المرور</label>
                        <div class="col-lg-10"><input   value="<?php echo $password; ?>"  type="password" required="required" id="confirm_password" placeholder="*****"  class="form-control">
                    </div>
                </div>
               	
											 <div class="form-group"><label class="col-lg-2 control-label">    </label>
                        <div class="col-lg-10">        <span  id='message'></span>
                    </div>
                </div>  
            
												<br/>	<br/>
    <div class="form-group">
        <div class="col-lg-10 col-md-offset-2">
            <button class="btn btn-primary pull-right btn-block" type="button" id="btn" name="edit_data">  &nbsp; &nbsp; حفظ  &nbsp; &nbsp;</button>
        </div>
    </div>
    
    
    
    
    
    
</div>
</div>
<!--  -->
</div>
</div>
						   </form>
</div>
										
										
					<?php
                             
                            }

                            ?>


										
										
										
                    </div>
                                </div>
                            </div>
                  </div>
                  <!--  -->
               </div>
                    
              
            </div>
            <div class="footer">
               <div>
                  <strong>Copyright</strong> Xwady Company &copy; 2017
               </div>
            </div>
         </div>
      </div>
      <!-- Mainly scripts -->
      <script src="js/jquery-2.1.1.js"></script>

<script>$(document).ready(function () {
		
		  $('#btn').click(function(){
			  if($('#password').val() =="")
				{
					$('#message').html('كلمة المرور فارغة ').css('color', 'red');
				}
		  });
		
		
		$('#password, #confirm_password').on('keyup', function () {
			
   if ($('#password').val() == $('#confirm_password').val()) {
	
	  $('#btn').prop('type','submit');
    $('#message').html('مطابقة').css('color', 'green');
  }
			else 
				{
				  $('#btn').prop('type','button');
    $('#message').html('كلمة المرور غير مطابقة ').css('color', 'red');
				}
			
});
		
});

</script>

      <script src="js/bootstrap.min.js"></script>
      <!-- Custom and plugin javascript -->
      <script src="js/inspinia.js"></script>
      <!-- <script src="js/plugins/pace/pace.min.js"></script> -->
      <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
      <!-- Chosen -->
      <script src="js/plugins/chosen/chosen.jquery.js"></script>
      <!-- JSKnob -->
      <script src="js/plugins/jsKnob/jquery.knob.js"></script>
      <!-- Input Mask-->
      <script src="js/plugins/jasny/jasny-bootstrap.min.js"></script>
      <!-- Data picker -->
      <script src="js/plugins/datapicker/bootstrap-datepicker.js"></script>
      <!-- NouSlider -->
      <script src="js/plugins/nouslider/jquery.nouislider.min.js"></script>
      <!-- Switchery -->
      <script src="js/plugins/switchery/switchery.js"></script>
      <!-- IonRangeSlider -->
      <script src="js/plugins/ionRangeSlider/ion.rangeSlider.min.js"></script>
      <script src="js/plugins/dataTables/datatables.min.js"></script>
      <script src="js/plugins/dataTables/table.js"></script>
      <!-- iCheck -->
      <script src="js/plugins/iCheck/icheck.min.js"></script>
      <!-- MENU -->
      <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
      <!-- Color picker -->
      <script src="js/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
      <!-- Clock picker -->
      <script src="js/plugins/clockpicker/clockpicker.js"></script>
      <!-- Image cropper -->
      <script src="js/plugins/cropper/cropper.min.js"></script>
      <!-- Date range use moment.js same as full calendar plugin -->
      <script src="js/plugins/fullcalendar/moment.min.js"></script>
      <!-- Date range picker -->
      <script src="js/plugins/daterangepicker/daterangepicker.js"></script>
      <!-- Select2 -->
      <script src="js/plugins/select2/select2.full.min.js"></script>
      <!-- TouchSpin -->
      <script src="js/plugins/touchspin/jquery.bootstrap-touchspin.min.js"></script>
      <!-- Tags Input -->
      <script src="js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
      <!-- Dual Listbox -->
      <script src="js/plugins/dualListbox/jquery.bootstrap-duallistbox.js"></script>
      <script src="js/fakeLoader.min.js"></script>
      <!-- Jasny for upload image-->
      <script src="js/plugins/jasny/jasny-bootstrap.min.js"></script>
     
      <!-- Sweet alert -->
      <script src="js/plugins/sweetalert/sweetalert.min.js"></script>
      <script src='js/calender/jquery/jquery-ui.custom.min.js'></script>
      <script src='js/calender/fullcalendar.js'></script>
   
      <script src="js/plugins/chartJs/Chart.min.js"></script>
      <script src="js/demo/chartjs-demo.js"></script>
      <script src="js/demo/chartjspie-demo.js"></script>
      <script src="js/demo/chartjsbar-chart-demo.js"></script>
      <script type="text/javascript" src="js/upload_img.js"></script>

   </body>
</html>
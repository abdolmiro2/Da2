<?php require_once('header.php'); ?>


            <div class="wrapper wrapper-content  animated fadeInRight">
            <div class="row">
              <div class="col-lg-12">
                <div class="ibox ">
                  <div class="ibox-title">
                    
                    <h3 class="title m-t-sm pull-left">اتصل بنا</h3>
                    <br>
                    <br>
                    <br>
                    
                  </div>

                  
                 
                  <div class="ibox-content">
                    <div class="row ">
                      <div class="col-lg-12">
						  		   <?php
										
$sql= "SELECT * FROM  `contactus` LIMIT 1 OFFSET 0";
$query=mysqli_query($con,$sql);

 if($query) 
 {

	$row=mysqli_fetch_assoc($query);
	
		
		$id=$row["id"];	
	 
	      $fb=$row["fb"];	
		  $tw=$row["tw"];	 
	      $ln=$row["ln"];	
		  $yt=$row["yt"];	 
	 

	    
  
	 ?>
						  
                         <form  class="form-horizontal" action="api/edit_contactus.php" method="post" enctype="multipart/form-data">
							 
                               
                                <input type="text" hidden="hidden" name="id" value="<?php echo $id; ?>">
                                
                               
                               <div class="form-group"><label class="col-md-2 control-label">الفيس بوك</label>

                                    <div class="col-md-10"><input name="fb" type="text" value="<?php echo $fb; ?>" placeholder="" class="form-control"> 
                                    </div>
                                </div>
                                 <div class="form-group"><label class="col-md-2 control-label">تويتر</label>

                                    <div class="col-md-10"><input name="tw" type="text" value="<?php echo $tw; ?>" placeholder="" class="form-control"> 
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-md-2 control-label">لينكد إن</label>

                                    <div class="col-md-10"><input name="ln" type="text" value="<?php echo $ln; ?>" placeholder="" class="form-control"> 
                                    </div>
                                </div>
                                 <div class="form-group"><label class="col-md-2 control-label">اليوتيوب</label>

                                    <div class="col-md-10"><input name="yt" type="text" value="<?php echo $yt; ?>" placeholder="" class="form-control"> 
                                    </div>
                                </div>
                                
                               
                               
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                       <button class="btn btn-primary pull-right" type="submit">حفظ التغيرات</button>
                                    </div>
                                </div>

                            </form>
						  <?php
 				}
						  
	 ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
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
<script>
	
	 $(document).ready(function() {
		
		 $(".contact_us").addClass("active");
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
   </body>
</html>
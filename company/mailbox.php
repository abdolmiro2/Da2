<?php require_once('header.php'); ?>
           <div class="wrapper wrapper-content  animated fadeInRight">
            <div class="row">
              <div class="col-lg-12">
                <div class="ibox ">
                  <div class="ibox-title">
                   
                  </div>

                  
                 
                  <div class="ibox-content">
                    <div class="row ">
                      <table class="table table-striped table-bordered table-hover dataTables-example" >
                        <thead>
                          <tr class="frist">
                            <th class="text-center">المسلسل</th>
                            <th class="text-center"> المرسل</th>
                            <th class="text-center">  الرسالة </th>
							 <th class="text-center">  الوقت </th>
							 <th class="text-center">  تفاصيل الطلب </th>
                           
                          </tr>
                        </thead>
                        <tbody>
							
							    <?php
                            $sql="SELECT id,name,email,SUBSTRING(msg  FROM 1 FOR  50) AS msg,phone,time  FROM request_service WHERE company_id='$company_id' ORDER BY id";
                            $query=mysqli_query($con,$sql);

                            if($query)
                            {
                                 $index=0;
                             while($row=mysqli_fetch_assoc($query))
                             {
								 $index++;
								 
                                 $id=$row["id"];
                                 $name=$row["name"];
                               
								 $email=$row["email"];
								 $msg=$row["msg"];
                                
								 $phone=$row["phone"];
								 $time=$row["time"];
								 
                   
								 
								 ?>
							
                       
                         
                          <tr id="<?php echo  "r".$id; ?>" class="gradeX">
                            <td class="text-center"><?php echo $index; ?></td>
                           
                            <td class="text-center"><?php echo $name; ?></td>
                            <td class="text-center"><?php echo $msg; ?></td>
                             <td class="text-center"><?php echo $time; ?></td>
							  
                            <td class="text-center">
                              
                                <a href="<?php echo "mail_detail.php?id=".$id; ?>" class="btn btn-success btn-xs" data-toggle="tooltip" title="عرض" ><span class="glyphicon glyphicon-eye-open"></span></a>
                                
							
                            </td>
                          </tr>
							
							
							
						
							
						
							<?php
							
							 }
							}
							?>
							
							
                        </tbody>
                      </table>
                      <!-- modal show -->

         
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
		
	 $(".mailbox").addClass("active");
		 
		 
	
	 });
</script>


<script>

	 $(document).ready(function() {

		 $(".mailbox").addClass("active");
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
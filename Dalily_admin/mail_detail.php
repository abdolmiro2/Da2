<?php require_once('header.php'); ?>

<?php 
if(isset($_GET["id"]))
{
	$id=$_GET["id"];
	
	 $sql="SELECT id,name,email,msg AS msg,title,phone,time  FROM messages WHERE id='$id'";
                            $query=mysqli_query($con,$sql);

                            if($query)
                            {
                              
                             while($row=mysqli_fetch_assoc($query))
                             {
								 
								 
                              
                                 $name=$row["name"];
                               
								 $email=$row["email"];
								 $msg=$row["msg"];
                                 $title=$row["title"];
								 $phone=$row["phone"];
								 $time=$row["time"];
								 
                   
								 
						
							
                       

	?>


            <div class="wrapper wrapper-content">
        <div class="row">
           <div class="col-lg-12 animated fadeInRight">
            <div class="mail-box-header">
                <div class="pull-right tooltip-demo">
                   
                   
                    <a  id="<?php echo  $id; ?>" class="btn btn-white btn-sm demo4" data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="far fa-trash-alt"></i> </a>
                </div>
                <h2>
                            <small  class="pull-right "> <a href="mailbox.php"> <small>&nbsp  الذهاب لصفحة الرسائل &nbsp</small> </a>  </small>  <br/>
					تواصل معنا
       
				</h2>
                <hr>
                <div class="mail-tools tooltip-demo m-t-md">


                    <h3>
                        <span class="font-noraml">اسم المرسل: </span>  
						
						<?php echo $name; ?>
                    </h3>
                    <h3>
                        <span class="font-noraml">رقم الهاتف: </span>
                      <?php echo $phone; ?>
                    </h3>
                    <h3>
                        <span class="font-noraml">عنوان الرسالة: </span>
                        <?php echo $title; ?>
                    </h3>
                    <h3>
                        <span class="font-noraml">من: </span>
                        <?php echo $email; ?>
                    </h3>
                     <h3>
                        <span class="font-noraml">الوقت: </span>
                        <?php echo $time; ?>
                    </h3>
                </div>
            </div>
                <div class="mail-box">


                <div class="mail-body">
                    <p>

						<?php echo $msg; ?>
                        </p>
                   <br/>   <br/>   <br/>
                  
                </div>
                    
                        
                        <div class="clearfix"></div>


                </div>
            </div> 
            
        </div>
        </div>


<?php 
	
}
							}
}
	?>











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
		
	 
		 
		 
		 $('.demo4').click(function () {
		 
		  var the_id=$(this).prop("id");
		 
				swal({
							title: "هل انت متاكد ؟",
							text: "لن تكون قادرا على استرداد  هذه الرسالة  !",
							type: "warning",
							showCancelButton: true,
							confirmButtonColor: "#DD6B55",
							cancelButtonColor: "#f00",
							confirmButtonText: "نعم, احذف هذا !",
							cancelButtonText: "لا , الغى الامر",
							closeOnConfirm: false,
							closeOnCancel: false },
						function (isConfirm) {
					
							if (isConfirm) {
								
								$.ajax({
									type:'GET',
									url:'api/del_msg.php?id='+the_id,
									success:function(result){
								
									 result = JSON.parse(result);
                                  

										if(result.status == "0") 
											{
												    $('#r'+the_id).hide();
														
								                swal("احذف!", "تم حذف بنجاح.", "success");
												        window.location = "mailbox.php"
											}
										
										
										else if(result.status == "400")
										{
										
												swal("لقد حدث مشكلة في الحذف", "  حسناً ", "error");
										}
                                        
                                
									   }// end success
									});
								
						
								
							} 
					    else {
								swal("الغى", "ملف  آمن :)", "error");
							}
						});
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
   </body>
</html>
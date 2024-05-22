<?php require_once('header.php'); ?>

            <div class="wrapper wrapper-content  animated fadeInRight">
            <div class="row">
              <div class="col-lg-12">
                <div class="ibox ">
                  <div class="ibox-title">
                    
                    <h3 class="title m-t-sm pull-left">المناطق</h3>
                    <br>
                    <br>
                    <br>
                    
                  </div>

                  
                 
                  <div class="ibox-content">
                    <div class="row ">
						
												
 <?php
										
$sql= "SELECT * FROM  `area` ORDER BY id DESC";
$query=mysqli_query($con,$sql);

 if($query) 
 {

	while($row=mysqli_fetch_assoc($query))
	{
	
	
		$id=$row["id"];	
        $name=$row["name"];
		$name_ar=$row["name_ar"];	
	
						
		?>
						
						
                      <div id="<?php echo  "r".$id; ?>" class="col-lg-3">
                        <div class="padd">
                          <div class="widget navy-bg text-center">
                            <h2><?php echo $name_ar; ?></h2>
                          </div>
                          <div class="mena">
                            <button  id="<?php echo  $id; ?>" class="btn btn-danger btn-xs demo4" data-toggle="tooltip" title="حذف المدينة" >
                            <span class="glyphicon glyphicon-trash">
                            </span></button>&nbsp;&nbsp;
                            <button class="btn btn-primary btn-xs" data-toggle="modal" title="تعديل على اسم المدينة" data-target="<?php echo "#e".$id; ?>"><span class="glyphicon glyphicon-edit"></span></button>
                          </div>
                        </div>
                      </div>
						
					
						
						
						           <div id="<?php echo "e".$id; ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h3 class="home-color bold">تعديل على اسم المنطقة</h3>
                            </div>
                            <div class="modal-body">
                              <div class="row m-t-sm">
                                <div class="col-sm-12 ">
									
									
                          <form  class="form-horizontal" action="api/edit_area.php" method="post" enctype="multipart/form-data">
									   
									  
                                <input type="text" hidden="hidden" name="id" value="<?php echo $id; ?>">
                                    <!--  -->
                                    
                                    <div class="form-group">
                          <label class="col-sm-3 control-label">اسم منطقة</label>
                          <div class="col-md-9">
                            <div class="form-group"> <input  required="required" name="name_ar" value="<?php echo $name_ar; ?>" type="text" placeholder="اضف اسم منطقة" class="form-control"></div>
                            
                          </div>
                          <label class="col-sm-3 control-label">Area name </label>
                          <div class="col-md-9">
                            <div class="form-group"> <input required="required" name="name" value="<?php echo $name; ?>" type="text" placeholder="enter area name" class="form-control"></div>
                            
                          </div>
                          <div class="col-md-12">
                            <button class="btn btn-sm btn-primary btn-block m-t-n-xs" type="submit"><strong>حفظ</strong></button>
                          </div>
                          
                        </div>
                                    <!--  -->
                                    
                                    
                                    
                                    
                                   
                                  </form>
                                </div>
                                
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                        <!-- modal  -->
						<?php 
	}
 }
						?>
                      
                      <div class="col-lg-3">
                        <div class="padd">
                          <a class="profile" data-toggle="modal" data-target="#test-modal-2">
                            <div class="dotted  text-center">
                              <h2>اضف منطقة</h2>
                              <i class="fa fa-plus" aria-hidden="true"></i>
                            </div>
                          </a>
                        </div>
                      </div>
						
						
           
                        <div class="modal fade" id="test-modal-2" data-modal-index="2">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="home-color bold">اضافة منطقة جديدة</h3>
                  </div>
                <div class="modal-body">
                  <div class="row ">
					  
					  <form id="form" class="form-horizontal" action="api/add_area.php" method="post" enctype="multipart/form-data">
										
							 
                    <div class="col-sm-12 ">
                        
                        <div class="form-group">
                          <label class="col-sm-3 control-label">اسم منطقة</label>
                          <div class="col-md-9">
                            <div class="form-group"> <input required="required" name="name_ar" type="text" placeholder="اضف اسم منطقة" class="form-control"></div>
                            
                          </div>
                          <label class="col-sm-3 control-label">Area name </label>
                          <div class="col-md-9">
                            <div class="form-group"> <input required="required" name="name" type="text" placeholder="enter area name" class="form-control"></div>
                            
                          </div>
                          <div class="col-md-12">
                            <button class="btn btn-sm btn-primary btn-block m-t-n-xs" type="submit"><strong>حفظ</strong></button>
                          </div>
                          
                        </div>
                        
                      
                    </div>
                   </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.modal-dialog -->
          </div>
                        <!-- /.modal -->
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

$(document).ready(function () {

	 $('.demo4').click(function () {
		 
		  var the_id=$(this).prop("id");
		
		 
				swal({
							title: "هل انت متاكد ؟",
							text: "لن تكون قادرا على استرداد بيانات المدينة  !",
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
									url:'api/del_area.php?id='+the_id,
									success:function(result){
								
									 result = JSON.parse(result);
                                  

										if(result.status == "0") 
											{
												    $('#r'+the_id).hide();
														
								                swal("احذف!", "تم حذف بنجاح.", "success");
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








<script>
	
	 $(document).ready(function() {
		
		 $(".areas").addClass("active");
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
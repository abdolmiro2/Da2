<?php require_once('header.php'); ?>
           <div class="wrapper wrapper-content  animated fadeInRight">
            <div class="row">
              <div class="col-lg-12">
                <div class="ibox ">
                  <div class="ibox-title">
                    <button class="btn btn-info btn-rounded pull-right" data-toggle="modal" data-target="#myModal1">  اضافة قسم جديد &nbsp;&nbsp;<i class="fa fa-plus-circle" aria-hidden="true" style="padding-left: 22px"></i></button>
                    <h3 class="title m-t-sm pull-left">التصنيفات</h3>
                    <br>
                    <br>
                    <br>
                    
                  </div>

                  
                 
                  <div class="ibox-content">
                    <div class="row ">
                      <table class="table table-striped table-bordered table-hover dataTables-example" >
                        <thead>
                          <tr class="frist">
                            <th class="text-center">المسلسل</th>
                            <th class="text-center">اسم التصنيف</th>
                            <th class="text-center">عدد الاعضاء بداخل التصنيف</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
							
							    <?php
                            $sql="SELECT * FROM category ORDER BY id";
                            $query=mysqli_query($con,$sql);

                            if($query)
                            {
                                 $index=0;
                             while($row=mysqli_fetch_assoc($query))
                             {
								 $index++;
                                 $id=$row["id"];
                                 $name=$row["name"];
                                 $name_ar=$row["name_ar"];
								 
								 
                             $sql2="SELECT COUNT(*) AS total  FROM company WHERE category='$id'";
                            $query2=mysqli_query($con,$sql2);

                            if($query2)
                            {
                           
                                 $row2=mysqli_fetch_assoc($query2);
                             
								
                                 $total=$row2["total"];
								 
								 ?>
							
                       
                         
                          <tr id="<?php echo  "r".$id; ?>" class="gradeX">
                            <td class="text-center"><?php echo $index; ?></td>
                           
                            <td class="text-center"><?php echo $name_ar; ?></td>
                            <td class="text-center"><?php echo $total; ?></td>
                            
                            <td class="text-center">
                                <button id="<?php echo  $id; ?>" class="btn btn-danger btn-xs demo4" data-toggle="tooltip" title="حذف">
							     <span class="glyphicon glyphicon-trash"></span>
                                </button>
                                <button class="btn btn-primary btn-xs" data-toggle="modal" data-toggle="tooltip" title="تعديل" data-target="<?php echo "#e".$id; ?>"><span class="glyphicon glyphicon-edit"></span></button>
                                <button class="btn btn-success btn-xs" data-toggle="modal" data-toggle="tooltip" title="عرض" data-target="<?php echo "#s".$id; ?>"><span class="glyphicon glyphicon-eye-open"></span></button>
                              
                            </td>
                          </tr>
							
							
							
							
							     <!-- modal edit -->
                        <div  class="modal fade" id="<?php echo "e".$id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                 <h3 class="home-color bold">تعديل علي التصنيف</h3>
                              </div>
                              <div class="modal-body">
                          <div class="row ">
							  
							    <form  class="form-horizontal" action="api/edit_category.php" method="post" enctype="multipart/form-data">
									   
									  
                                <input type="text" hidden="hidden" name="id" value="<?php echo $id; ?>">
							  
                            <div class="col-sm-12 ">
                             
                              
                         
                                <!--  -->
                                <div class="row form-horizontal ">
                                  <div class="form-group">
                                    
                                    <label class="col-lg-3 control-label">اسم التصنيف</label>
                                    <div class="col-lg-9">
                                      <input name="name_ar" type="text" value="<?php echo $name_ar; ?>" placeholder="اسم التصنيف" class="form-control" >
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    
                                    <label class="col-lg-3 control-label">Department Name</label>
                                    <div class="col-lg-9">
                                      <input name="name" type="text" value="<?php echo $name; ?>" placeholder="Department Name" class="form-control" >
                                    </div>
                                  </div>
                                 
                                  
                                  
                                 
                                 
                                  
                                  
                                 
                                </div>
                            
                            </div>
                            <div class="col-md-12">
                              <button id="signin" class="btn btn-md btn-primary btn-block m-t-n-xs" type="submit"><strong>حفظ</strong></button>
                            </div>
							  
							    </form>
                          </div>
                        </div>
                            </div>
                          </div>
                        </div>
                        <!-- /.modal -->
							
							
							
							
							
							 <!-- Modal -->
                      <div id="<?php echo "s".$id; ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">عرض الشركات بداخل التصنيف</h4>
                            </div>
                            <div class="modal-body">
                              <div class="row text-center">
								  
								  
                                 <?php
                            $sql2="SELECT id,name FROM  company WHERE category='$id'";
                            $query2=mysqli_query($con,$sql2);
          

                            if($query2)
                            {

                             while($row2=mysqli_fetch_assoc($query2))
                             {
                                 $c_id=$row2["id"];
                                 $c_name=$row2["name"];
                               
								 ?>
								  
                                <div class="col-md-6">
                                  <h3>
                                    <a href="<?php echo "business_added_details.php?id=".$c_id; ?> "><i class="fa fa-dot-circle-o" aria-hidden="true"></i><span>&nbsp;</span> <?php echo $c_name; ?>
								 </a>
                                  </h3>
                                </div>
										
										
                                <?php
										
							 }
							}
										?>
                               
                                
                                
                                
                              </div>
                            </div>
                            
                          </div>

                        </div>
                      </div>
                   
							
							<!--/modal -->
							<?php
							}
							 }
							}
							?>
							
							
                        </tbody>
                      </table>
                      <!-- modal show -->

                     
                        <!-- modal  -->
                        <div  class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                 <h3 class="home-color bold">اضافة تصنيف جديد</h3>
                              </div>
                              <div class="modal-body">
                          <div class="row ">
							    <form  class="form-horizontal" action="api/add_category.php" method="post" enctype="multipart/form-data">
								
                            <div class="col-sm-12 ">
                             
                              
                            
                                <!--  -->
                                <div class="row form-horizontal ">
                                  <div class="form-group">
                                    
                                    <label class="col-lg-3 control-label">اسم التصنيف</label>
                                    <div class="col-lg-9">
                                      <input type="text" name="name_ar" placeholder="اسم التصنيف" class="form-control" >
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    
                                    <label class="col-lg-3 control-label">Department Name</label>
                                    <div class="col-lg-9">
                                      <input type="text"  name="name" placeholder="Department Name" class="form-control" >
                                    </div>
                                  </div>
                                 
                                  
                           
                            </div>
                            <div class="col-md-12">
                              <button id="signin" class="btn btn-md btn-primary btn-block m-t-n-xs" type="submit"><strong>حفظ</strong></button>
                            </div>
                          </div>
									      
                              </form>
                        </div>
                            </div>
                          </div>
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
	
	 $(document).ready(function() {
		
		 $(".department").addClass("active");
		 
		 
		 $('.demo4').click(function () {
		 
		  var the_id=$(this).prop("id");
		 
				swal({
							title: "هل انت متاكد ؟",
							text: "لن تكون قادرا على استرداد  هذا القسم وسيتم محو القسم من الأعضاء التابعين له  !",
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
									url:'api/del_category.php?id='+the_id,
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
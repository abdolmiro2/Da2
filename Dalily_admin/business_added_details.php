<?php require_once('header.php'); ?>
            <div class="row wrapper border-bottom white-bg page-heading">
              <div class="col-lg-10">
                <h2>تفاصيل العمل المضاف</h2>
                <ol class="breadcrumb">
                  <li>
                    <a href="index.php">الرئيسية</a>
                  </li>
                  <li>
                    <a href="business_added.php">الاعمال المضافة</a>
                  </li>
                  <li class="active">
                    <strong>تفاصيل العمل المضاف</strong>
                  </li>
                </ol>
              </div>
              <div class="col-lg-2">
              </div>
            </div>
 <?php 
if(isset($_GET['id']))
{
	$id=$_GET['id'];
		
$sql= "SELECT * FROM  `company` WHERE id='$id'";
$query=mysqli_query($con,$sql);

 if($query) 
 {

	$row=mysqli_fetch_assoc($query);
	   $id=$row["id"];
	 
	   $area_id=$row["area"];
               $category_id=$row["category"];

	 
		            $cat_sql="SELECT name_ar FROM category WHERE id='$category_id'";
                                 $cat_query=mysqli_query($con,$cat_sql);
                                 $category_name = "";
                                 if($cat_query){
                                    $row2=mysqli_fetch_assoc($cat_query);
                                    $category_name = $row2["name_ar"];
                                 }

                                 $area_sql="SELECT name_ar FROM area WHERE id='$area_id'";
                                 $area_query=mysqli_query($con,$area_sql);
                                 $area_name = "";
                                 if($area_query){
                                    $row2=mysqli_fetch_assoc($area_query);
                                    $area_name = $row2["name_ar"];
                                 }

		  
?>

            <div class="wrapper wrapper-content animated fadeInRight">
              <div class="row m-b-lg m-t-lg">
                <div class="col-md-8">
                  <div class="profile-image">
					  <?php 
					  if($row["logo"] =="")
					  {
						  $img="uploads/default.jpg";
					  }
							 else 
								 $img=$row["logo"]; 
					  ?>
                    <img src="<?php echo $img; ?>" class="img-circle circle-border m-b-md img-responsive" alt="profile">
                  </div>
                  <div class="profile-info">
                    <div class="">
                      <div>
                        <h2 class="no-margins">
                        <?php echo $row["name"]; ?>
                        </h2>
                        <h4></h4>
                        <small class="m-t-lg">
								<?php echo $row["descr"]; ?>
                        </small>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <table class="table small m-b-xs text-center">
                    <tbody>
                      <tr>
                        <td>
                          <strong>عدد المشاهدة من العملاء</strong>  	<?php echo $row["visits"]; ?>
                        </td>
                       
                      </tr>
                      <tr>
                        <td>
                          <strong>عدد الطلبات من العملاء</strong> 	<?php echo $row["requests"]; ?>
                        </td>
                       
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
               
                
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <div class="ibox">
                    <div class="ibox-content detils">
                      <h2>  <?php echo $row["name"]; ?>  </h2>
                      <hr>
                      <span class="main-color">العنوان &nbsp;</span>
                      <span class="small">
                       <?php echo $row["address"]; ?>
						</span>
                      <br>

                      <span class="main-color">اﻟﺘﻠﻴﻔﻮن  &nbsp;</span>
                      <span class="small">
                     <?php echo $row["phone"]; ?>
                      </span>
                      <br>
                      <span class="main-color">الموبيل  &nbsp;</span>
                      <span class="small">
                       <?php echo $row["mobile"]; ?>
                      </span>
                      <br>
                      <span class="main-color">اﻟﻤﻮﻗﻊ اﻻﻟﻜﺘﺮوﻧﻰ  &nbsp;</span>
                      <a href="<?php echo $row["website"]; ?>" class="small">
                       <?php echo $row["website"]; ?>
                      </a>
                      <br>
                      <span class="main-color">المنطقة &nbsp;</span>
                      <span class="small">
                     <?php echo $area_name; ?>
                      </span>
                      <br>
                      <span class="main-color">الفئة &nbsp;</span>
                      <span class="small">
                          <?php echo $category_name; ?>
                      </span>
                      <br>
                      <span class="main-color">الشخص المسئول &nbsp;</span>
                      <span class="small">
                              <?php echo $row["owner_name"]; ?>
                      </span>
                      <br>
                      
                      <span class="main-color">مواقع التواصل   &nbsp;</span>
                      <span class="small">
                        <a href="<?php echo $row["fb"]; ?>">
                          <i style="color: #3b5998" class="fab fa-facebook"></i>
                        </a>
                        <a href="<?php echo $row["tw"]; ?>">
                          <i style="color: #0084b4"  class="fab fa-twitter-square"></i>
                        </a>
                        
                        
                        <a href="<?php echo $row["ins"]; ?>">
                          <i style="color: #cd486b" class="fab fa-instagram"></i>
                        </a>
                        <a href="<?php echo $row["sn"]; ?>">
                          <i style="color: #fffc00" class="fab fa-snapchat-square"></i>
                        </a>
                        
                      </span>
                    </div>
                  </div>
                  
                 
                </div>
                <div class="col-lg-8">
                  <div class="ibox" id="recently_added">
                    <div class="ibox-content">
                      <h3>تفاصيل عن الشركة</h3>
                      <hr>
                      <div class=" tabs_details">
                        <div class="row">
                          <div class="col-md-12">
                            <!-- Nav tabs --><div class="card">
                            <ul class="nav nav-tabs" role="tablist">
                              <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Gallery</a></li>
                              <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Videos</a></li>
                              <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Map</a></li>
                             
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                              <div role="tabpanel" class="tab-pane active" id="home">
                                <!--  -->
                                <div class="row">
                        <?php
	 
							$sql2= "SELECT * FROM  `company_pics` WHERE company_id='$id'";
							$query2=mysqli_query($con,$sql2);

							 if($query2) 
							 {

								while($row2=mysqli_fetch_assoc($query2))
								{

							
								 ?>

                                  <div id="<?php echo "p".$row2["id"]; ?>" class="col-md-4 col-xs-12">
                                    <div class="item  m-t-10">
                                      <div class="blog-img m-t-40 ">
                                        
                                        <img src="<?php echo $row2["img"]; ?>" class="img-responsive center-block">
                                        
                                      </div>
                                       <div class="blog-info text-center">
                                        <br>
                                        <button id="<?php echo $row2["id"]; ?>" class="btn btn-danger btn-xs demo4" data-toggle="tooltip" title="حذف">
											<span class="glyphicon glyphicon-trash"></span>
                                        </button>
                                        <br>
                                      </div>
                                      
                                    </div>
                                  </div>
                                
                                <?php 
								}	
							 }
	 						?>
                                  
                                  
                                  
                                </div>
                                <!--  -->
                              </div>
                              <div role="tabpanel" class="tab-pane" id="profile">
                                <div class="row">
									         <?php
	 
							$sql2= "SELECT * FROM  `company_videos` WHERE company_id='$id'";
							$query2=mysqli_query($con,$sql2);

							 if($query2) 
							 {

								while($row2=mysqli_fetch_assoc($query2))
								{

							
								 ?>
									
                                  <div id="<?php echo "v".$row2["id"]; ?>" class="col-md-4 col-xs-12">
                                    <div class="item  m-t-10">
                                      <div class="blog-img m-t-40 ">
                                        
                                        <img src="img/play_btn.png"  class="img-responsive" data-toggle="modal" data-target="<?php echo "#video".$row2["id"]; ?>">
                                        
                                      </div>
                                      <div class="blog-info text-center">
                                        <br>
                                        <button  id="<?php echo $row2["id"]; ?>" class="btn btn-danger btn-xs demo5" data-toggle="tooltip" title="حذف">
											<span class="glyphicon glyphicon-trash"> </span>
                                        </button>
                                        <br>
                                      </div>
                                    </div>
                                  </div>
									
									
									
									           <!-- Modal -->
                                          <div id="<?php echo "video".$row2["id"]; ?>" class="modal fade" role="dialog">
                                             <div class="modal-dialog">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                      <h4 class="modal-title">فيديو</h4>
                                                   </div>
                                                   <div class="modal-body">
                                                      <iframe id="iframeYoutube" width="560" height="315"  src="<?php echo $row2["video"]; ?>" frameborder="0" allowfullscreen></iframe> 
                                                   </div>
                                                   <div class="modal-footer">
                                                      <button type="button" class="btn btn-default" data-dismiss="modal">اغلاق</button>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
									
									
                                 
									        <?php 
								}	
							 }
	 						?>
									
									
                                </div>
                     
                              </div>
                              <div role="tabpanel" class="tab-pane" id="messages">
                                <div class="row">
                                  <div class="col-md-12 col-xs-12">
                                    <div class="m-t-20" id="services">
                                    <iframe src="<?php echo $row["map"]; ?>" width="100%" height="230" frameborder="0" style="border:0"></iframe>
                                 </div>
                                  </div>
                                 
                                </div>
                                
                              </div>
                              
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--  -->
               
                <!--  -->
              </div>
              
              
            </div>
          </div>
			<?php 
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
	 
	 $(document).ready(function(){
	
	
	 $('.demo4').click(function () {
		 
		  var the_id=$(this).prop("id");
		 
				swal({
							title: "هل انت متاكد ؟",
							text: "لن تكون قادرا على استرداد هذه الصورة  !",
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
									url:'api/del_pic.php?id='+the_id,
									success:function(result){
								
									 result = JSON.parse(result);
                                  

										if(result.status == "0") 
											{
												    $('#p'+the_id).hide();
														
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
		 
		 
		 
		 
		 
		 
		  $('.demo5').click(function () {
		 
		  var the_id=$(this).prop("id");
		 
				swal({
							title: "هل انت متاكد ؟",
							text: "لن تكون قادرا على استرداد هذا الفيديو  !",
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
									url:'api/del_video.php?id='+the_id,
									success:function(result){
								
									 result = JSON.parse(result);
                                  

										if(result.status == "0") 
											{
												    $('#v'+the_id).hide();
														
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
      
       <!-- Gallery -->
      <script type="text/javascript" src="js/simple-lightbox.js"></script>
      
   </body>
</html>
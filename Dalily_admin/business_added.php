<?php require_once('header.php'); ?>
 <script src="js/jquery-2.1.1.js"></script>

<script>
	
	 $(document).ready(function() {
		
		 $(".business_added").addClass("active");
	 });
</script>

<script>
$(document).ready(function(){
	
	
	
 $('#area').change(function(){
	 
	 var area=$('#area').val();
	 	 
	 var category=$('#category').val();
	 
	    window.location = "business_added.php?area="+area+"&category="+category;
	 
	 
 });
	
	 $('#category').change(function(){
	 
	 var area=$('#area').val();
	 var category=$('#category').val(); 
		 
	   window.location = "business_added.php?area="+area+"&category="+category;
	 
 });
	
	
	
	
	
	 $('.demo4').click(function () {
		 
		  var the_id=$(this).prop("id");
		 
				swal({
							title: "هل انت متاكد ؟",
							text: "لن تكون قادرا على استرداد بيانات الشركة  !",
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
									url:'api/del_company.php?id='+the_id,
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



		  $('.edit_company').click(function(){
			   var the_id=$(this).prop("id");
			
			  if($('#password'+the_id).val() ==""  )
				{
					$('#message'+the_id).html('كلمة المرور فارغة ').css('color', 'red');
				}
			  else if($("#password"+the_id).val() != $("#cpassword"+the_id).val())
				  {
					  $('#message'+the_id).html('كلمة المرور غير متطابقة ').css('color', 'red');
				  }

		else
				{
					
					var name=$("#name"+the_id).val();
					var password=$("#password"+the_id).val();
					var username=$("#username"+the_id).val();
					
					var category=$("#c"+the_id).val();
					var area=$("#a"+the_id).val();
					var type=$("#adv"+the_id).val();
					var block=$("#bl"+the_id).val();
             
							$.ajax({
									type:'GET',
									url:'api/edit_company.php?name='+name+"&id="+the_id+"&password="+password+"&username="+username+"&type="+type+"&category="+category+"&area="+area+"&block="+block,
									success:function(result){


									 result = JSON.parse(result);


										if(result.status == "0")
										{
											$('.modal').hide();
											alert("تم التعديل بنجاح");
										   location.reload();
											
										}
										else if(result.status == "400") alert("لقد حدث مشكلة يرجي التأكد من ىالاتصال بالانترنت");
										else if(result.status == "-1") alert(" اسم الدخول موجود مسبقاً ");

									   }// end success
									});

				}


		  });






	
		$('.ty').on('keyup', function () {
 $('.msg').text('');

		});
	
	
});

</script>

<?php 

if(isset($_GET["area"]) && isset($_GET["category"]))
{
	$category=$_GET["category"];
	$area=$_GET["area"];
	?>

	<script>
$(document).ready(function(){
	
	
			  $('<?php echo "#category"; ?> option[value=<?php echo $category; ?>]').attr('selected','selected');
			  $('<?php echo "#area"; ?> option[value=<?php echo $area; ?>]').attr('selected','selected');
});
	
</script>
	
	<?php 
	
}
else if(isset($_GET["area"]))
{
	$area=$_GET["area"];
	$category=0;
}
else if(isset($_GET["category"]))
{
	$category=$_GET["category"];
	$area=0;
}
else
{
	$category=0;
	$area=0;
}


?>
            <div class="wrapper wrapper-content  animated fadeInRight">
              <div class="row">
                <div class="col-lg-12">
                  <div class="ibox ">
                    <div class="ibox-title">
                     
                     
                      <div class="row">
                        <div class="col-lg-6">
                           <br>
                           <h3 class="title m-t-sm pull-left"> الأعمال المضافة</h3>
                        </div>
                         <div class="col-sm-3">
                           <div class="form-group">
                             <label for="area">اختر المنطقة</label>
                                    <select id="area" class="form-control" >
										<option value="<?php echo "0"; ?>"><?php  echo "الكل"; ?></option>
                                          <?php
											 $sql="SELECT * FROM area ORDER BY id";
											 $query=mysqli_query($con,$sql);

											 if($query)
											 {

												while($row=mysqli_fetch_assoc($query))
												{
													  $id=$row["id"];
													  $name_ar=$row["name_ar"];

												 ?>

											 <option value="<?php echo $id; ?>"><?php  echo $name_ar; ?></option>

											 <?php
												}
											 }

											 ?>


                                        </select>
                           </div>
                         </div>
                         <div class="col-sm-3">
                           <div class="form-group">
                                <label for="category">اختر الفئة</label>
                                <select id="category" class="form-control" >

 						<option value="<?php echo "0"; ?>"><?php  echo "الكل"; ?></option>
											 <?php
											 $sql="SELECT * FROM category ORDER BY id";
											 $query=mysqli_query($con,$sql);

											 if($query)
											 {

												while($row=mysqli_fetch_assoc($query))
												{
													  $id=$row["id"];
													  $name_ar=$row["name_ar"];

												 ?>

											 <option value="<?php echo $id; ?>"><?php  echo $name_ar; ?></option>

											 <?php
												}
											 }

											 ?>

                                        </select>
                           </div>
                         </div>
                      </div>
                     

                     
                    </div>

                    
                   
                    <div class="ibox-content">
                      <div class="row ">
                        <table class="table table-striped table-bordered table-hover dataTables-example" >
                          <thead>
                            <tr class="frist">
                              <th class="text-center">المسلسل</th>
                              <th class="text-center">اسم الشركة</th>
                              <th class="text-center">الفئة</th>
                              <th class="text-center">المنطقة</th>
                             <th class="text-center">معلن ام لا</th>
                           
                              <th class="text-center">الحالة</th>
								  <th class="text-center"> الانتقال</th>
                              <th>اعدادات</th>
                            </tr>
                          </thead>
                          <tbody>
                        
                           
                            <?php
							  
							  
							  if($area ==0 && $category ==0) 
							  {
								    $sql="SELECT * FROM company ";
							  }
							    else if($area ==0 ) 
							  {
								    $sql="SELECT * FROM company  WHERE category='$category'";
							  }
							      else if($category ==0 ) 
							  {
								    $sql="SELECT * FROM company  WHERE area='$area'";
							  }
							  else
							  {
								    $sql="SELECT * FROM company  WHERE area='$area' AND category='$category'";
							  }
                           
                            $query=mysqli_query($con,$sql);



                            if($query)
                            {
								$index=0;

                             while($row=mysqli_fetch_assoc($query))
                             {
								 $index++;
                                 $id=$row["id"];
                                 $area_id=$row["area"];
                                 $category_id=$row["category"];
                                 $name=$row["name_ar"];
								 $password=$row["password"];
                                 $username=$row["username"];
                                 $type=$row["type"];
                                 $block=$row["block"];
								 if($type==0)
								 {
									 $type_name="غير معلن";
									   $label_adv="label-danger";
								 }
								 else
								 {
									 
									  $type_name=" معلن";
									    $label_adv="label-primary";
								 }
                               if($block==0)
								 {
									 $block_name=" نشط";
								     $label="label-primary";
								 }
								 else
								 {
									  $block_name=" محظور";
									  $label="label-danger";
								 }

                                 $cat_sql="SELECT name_ar FROM category WHERE id='$category_id'";
                                 $cat_query=mysqli_query($con,$cat_sql);
                                 $category_name = "";
                                 if($cat_query){
                                    $row=mysqli_fetch_assoc($cat_query);
                                    $category_name = $row["name_ar"];
                                 }

                                 $area_sql="SELECT name_ar FROM area WHERE id='$area_id'";
                                 $area_query=mysqli_query($con,$area_sql);
                                 $area_name = "";
                                 if($area_query){
                                    $row=mysqli_fetch_assoc($area_query);
                                    $area_name = $row["name_ar"];
                                 }

                              ?>
                         
                           
                          
                          
                           <tr  id="<?php echo  "r".$id; ?>" class="gradeX">
                              <td class="text-center"><?php echo $index; ?></td>
                              <td class="text-center"> <?php echo $name; ?></td>
                              <td class="text-center"><?php echo $category_name; ?></td>
                              <td class="text-center"><?php echo $area_name; ?></td>
                              <td class="text-center">
                             <small class="label <?php echo $label_adv; ?>"> <?php echo $type_name; ?></small>
								  </td>
                              <td class="text-center">
                                <small class="label <?php echo $label; ?>"> <?php echo $block_name; ?></small>
								  
								  
                              </td>
							   
							  <td class="text-center">
                              <a href="<?php echo "api/access.php?id=".$id; ?>" target="_blank"><?php echo "زيارة لوحة تحكم الشركة"; ?>  </a>  
								  
								  
                              </td>
							   
							   
                              <td class="text-center">
                                  <button id="<?php echo  $id; ?>" class="btn btn-danger btn-xs demo4" data-toggle="tooltip" title="حذف">
									  <span class="glyphicon glyphicon-trash"></span>
                                  </button>
                                  <button class="btn btn-primary btn-xs" data-toggle="modal" data-toggle="tooltip" title="تعديل" data-target="<?php echo  "#e".$id; ?>"><span class="glyphicon glyphicon-edit"></span></button>
                                  <a href="<?php echo "business_added_details.php?id=".$id; ?>" class="btn btn-success btn-xs"  data-toggle="tooltip" title="عرض" ><span class="glyphicon glyphicon-eye-open"></span></a>
                                
                              </td>
                           </tr>
                          
							  
							  
							  
							  
							  
							          <!-- modal edit -->
                          <div  class="modal fade" id="<?php echo  "e".$id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                   <h3 class="home-color bold">تعديل على الاعمال المضافة</h3>
                                </div>
                                <div class="modal-body">
                            <div class="row ">
                              <div class="col-sm-12 ">
                               
                                
                                
                                  <!--  -->
                                  <div class="row form-horizontal ">
                                       <input type="text" hidden="hidden" name="id" value="<?php echo $id; ?>">
									   <div class="form-group">
                                      
                                      <label class="col-lg-3 control-label">الاسم </label>
                                      <div class="col-lg-9">
                                        <input type="text" placeholder="الاسم " id="<?php echo "name".$id ?>" value="<?php echo  $name; ?>" class="form-control" >
                                      </div>
                                    </div>
									  
                                    <div class="form-group">
                                      
                                      <label class="col-lg-3 control-label">اسم المستخدم</label>
                                      <div class="col-lg-9">
                                        <input type="text" placeholder="اسم المستخدم" id="<?php echo "username".$id ?>" value="<?php echo  $username; ?>" class="form-control" >
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      
                                      <label class="col-lg-3 control-label">كلمة المرور</label>
                                      <div class="col-lg-9">
                                        <input type="text" placeholder="كلمة المرور"  id="<?php echo "password".$id ?>" value="<?php echo  $password; ?>" class="form-control ty" >
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      
                                      <label class="col-lg-3 control-label">تاكيد كلمة المرور</label>
                                      <div class="col-lg-9">
                                        <input type="text" placeholder="تاكيد كلمة المرور"  id="<?php echo "cpassword".$id ?>"  value="<?php echo  $password; ?>" class="form-control ty" >
                                      </div>
                                    </div>
									  
									   <div class="form-group">
								 <label class="col-lg-3 control-label">
								 </label>
												<div class="col-lg-9">        <span class="msg"   id="<?php echo "message".$id ?>" ></span>
											</div>
										</div>
									  
									  
                                  <div class="form-group">

                                      <label class="col-lg-3 control-label">الفئة</label>
                                      <div class="col-lg-9">

                                         <select id="<?php echo "c".$id; ?>"  class="form-control" >


											 <?php
											 $sql2="SELECT * FROM category ORDER BY id";
											 $query2=mysqli_query($con,$sql2);

											 if($query2)
											 {

												while($row2=mysqli_fetch_assoc($query2))
												{
													  $c_id=$row2["id"];
													  $name_ar=$row2["name_ar"];

												 ?>

											 <option value="<?php echo $c_id; ?>"><?php  echo $name_ar; ?></option>

											 <?php
												}
											 }

											 ?>

                                        </select>
                                      </div>
                                    </div>
                                    <div class="form-group">

                                      <label class="col-lg-3 control-label">المنطقة</label>
                                      <div class="col-lg-9"> 
                                         <select id="<?php echo "a".$id; ?>"  class="form-control" >

                                          <?php
											 $sql2="SELECT * FROM area ORDER BY id";
											 $query2=mysqli_query($con,$sql2);

											 if($query2)
											 {

												while($row2=mysqli_fetch_assoc($query2))
												{
													  $a_id=$row2["id"];
													  $name_ar=$row2["name_ar"];

												 ?>

											 <option value="<?php echo $a_id; ?>"><?php  echo $name_ar; ?></option>

											 <?php
												}
											 }

											 ?>


                                        </select>
                                      </div>
                                    </div>
						
                                    
                                    
                                   
                                    
                                    
                                    <div class="form-group">
                                      
                                      <label class="col-lg-3 control-label">معلن ام لا</label>
                                      <div class="col-lg-9">
                                         <select id="<?php echo "adv".$id; ?>" class="form-control">
											 
										<option value="0">غير معلن</option>
                                          <option value="1">معلن</option>
                                        
                                          
                                        </select>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      
                                      <label class="col-lg-3 control-label">الحالة</label>
                                      <div class="col-lg-9">
                                         <select id="<?php echo "bl".$id; ?>" class="form-control" id="sel1">
                                          <option value="0">نشط</option>
                                          <option value="1">محظور</option>
                                          
                                        </select>
                                      </div>
                                    </div>
                                   
                                    
                                   			  
									<script>
										
									$(document).ready(function(){
 
                                             
			                           $('<?php echo "#c".$id; ?> option[value=<?php echo $category_id; ?>]').attr('selected','selected');
										  $('<?php echo "#a".$id; ?> option[value=<?php echo $area_id; ?>]').attr('selected','selected');
										 $('<?php echo "#adv".$id; ?> option[value=<?php echo $type; ?>]').attr('selected','selected');
										 $('<?php echo "#bl".$id; ?> option[value=<?php echo $block; ?>]').attr('selected','selected');

									   });
										</script>
                                   
                                    
									  
									  
                                  </div>
                           
                              </div>
                              <div class="col-md-12">
                                <button  type="button" id="<?php echo $id; ?>" class="btn btn-md btn-primary btn-block m-t-n-xs edit_company" type="submit"><strong>حفظ</strong></button>
                              </div>
                            </div>
                          </div>
                              </div>
                            </div>
                          </div>
                          <!-- /.modal -->
                         <?php 
								 
							 }
							}
							  
								 ?>
                           

                           
                           
                            
                          </tbody>
                        </table>
                  
                         
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
<?php require_once('header.php'); ?>

            <div class="wrapper wrapper-content  animated fadeInRight">
              <div class="row">
                <div class="col-lg-12">
                  <div class="ibox ">
                    <div class="ibox-title">


                      <div class="row">
                        <div class="col-sm-12">
                           <button class="btn btn-info btn-rounded pull-right" data-toggle="modal" data-target="#myModal1">  اضافة شركة جديدة &nbsp;&nbsp;<i class="fa fa-plus-circle" aria-hidden="true" style="padding-left: 22px"></i></button>
                      <h3 class="title m-t-sm pull-left">الشركات التى تريد الانضمام</h3>
                      <br>
                      <br>
                      <br>

                        </div>
                      </div>



                    </div>



                    <div class="ibox-content">
                      <div class="row ">
                        <table class="table table-striped table-bordered table-hover dataTables-example" >
                          <thead>
                            <tr class="frist">
                              <th class="text-center">المسلسل</th>
                              <th class="text-center">إسم الشركة</th>
                              <th class="text-center">إسم الشخص</th>

                             <th class="text-center">البريد الالكترونى</th>

                              <th class="text-center">الفئة</th>
                              <th class="text-center">المدينة</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>


                            <?php
                            $sql="SELECT * FROM add_requests ORDER BY id";
                            $query=mysqli_query($con,$sql);



                            if($query)
                            {

                             while($row=mysqli_fetch_assoc($query))
                             {
                                 $id=$row["id"];
                                 $company_name=$row["company_name"];
                                 $person_name=$row["person_name"];
                                 $job_name=$row["job_name"];
                                 $mobile_number=$row["mobile_number"];
                                 $phone_number=$row["phone_number"];
                                 $email=$row["e-mail"];
                                 $fax_number=$row["fax_number"];
                                 $area_id=$row["area_id"];
                                 $category_id=$row["category_id"];
                                 $notes=$row["notes"];
                                 $time=$row["time"];

                                 $cat_sql="SELECT name FROM category WHERE id='$category_id'";
                                 $cat_query=mysqli_query($con,$cat_sql);
                                 $category_name = "";
                                 if($cat_query){
                                    $row=mysqli_fetch_assoc($cat_query);
                                    $category_name = $row["name"];
                                 }

                                 $area_sql="SELECT name FROM area WHERE id='$area_id'";
                                 $area_query=mysqli_query($con,$area_sql);
                                 $area_name = "";
                                 if($area_query){
                                    $row=mysqli_fetch_assoc($area_query);
                                    $area_name = $row["name"];
                                 }

                              ?>

                              <tr id="<?php echo  "r".$id; ?>" class="gradeX">

                                 <td class="text-center"> <?php echo $id ?> </td>
                                 <td class="text-center"> <?php echo $company_name ?> </td>
                                 <td class="text-center"> <?php echo $person_name ?> </td>
                                 <td class="text-center"> <?php echo $email ?> </td>
                                 <td class="text-center"> <?php echo $category_name ?> </td>
                                 <td class="text-center"> <?php echo $area_name ?> </td>


                                 <td class="text-center">
                                     <button id="<?php echo  $id; ?>" class="btn btn-danger btn-xs demo4" data-toggle="tooltip" title="حذف">
   								  <span class="glyphicon glyphicon-trash"></span>
                                     </button>
                                     <button class="btn btn-success btn-xs" data-toggle="modal" data-toggle="tooltip" title="عرض" data-target="<?php echo '#company'.$id; ?>"><span class="glyphicon glyphicon-eye-open"></span></button>


                                 </td>
                              </tr>

                              <!-- The Modal -->
                              <div class="modal fade" id="<?php echo 'company'.$id; ?>">
                                <div class="modal-dialog">
                                  <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                      <h4 class="modal-title">المزيد من المعلومات </h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                      <div class="row">
                                        <div class="col-sm-3">
                                          <h4>اسم الشركة</h4>
                                        </div>
                                        <div class="col-sm-9">
                                          <h5> <?php echo $company_name ?></h5>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-sm-3">
                                          <h4>إسم الشخص </h4>
                                        </div>
                                        <div class="col-sm-9">
                                          <h5> <?php echo $person_name ?> </h5>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-sm-3">
                                          <h4>المسمى الوظيفي </h4>
                                        </div>
                                        <div class="col-sm-9">
                                          <h5> <?php echo $job_name ?> </h5>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-sm-3">
                                          <h4>الهاتف المتحرك </h4>
                                        </div>
                                        <div class="col-sm-9">
                                          <h5><?php echo $mobile_number ?></h5>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-sm-3">
                                          <h4>رقم الهاتف </h4>
                                        </div>
                                        <div class="col-sm-9">
                                          <h5><?php echo $phone_number ?></h5>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-sm-3">
                                          <h4> البريد الالكترونى</h4>
                                        </div>
                                        <div class="col-sm-9">
                                          <h5><?php echo $email ?></h5>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-sm-3">
                                          <h4> رقم الفاكس</h4>
                                        </div>
                                        <div class="col-sm-9">
                                          <h5><?php echo $fax_number ?></h5>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-sm-3">
                                          <h4> المدينة</h4>
                                        </div>
                                        <div class="col-sm-9">
                                          <h5><?php echo $area_name ?></h5>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-sm-3">
                                          <h4>الفئة</h4>
                                        </div>
                                        <div class="col-sm-9">
                                          <h5> category_name </h5>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-sm-3">
                                          <h4>ملاحظات</h4>
                                        </div>
                                        <div class="col-sm-9">
                                          <h5> <?php echo $notes ?> </h5>
                                        </div>
                                      </div>
                                    </div>



                                  </div>
                                </div>
                              </div>
                            <?php
                             }
                            }

                            ?>











                          </tbody>
                        </table>
                         <!-- modal -->









                          <!-- modal  -->
                           <div  class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                   <h3 class="home-color bold">اضافة شركة جديدة</h3>
                                </div>
                                <div class="modal-body">
                            <div class="row ">





                              <div class="col-sm-12 ">



                                  <!--  -->
                                  <div class="row form-horizontal ">
                                    <div class="form-group">

                                      <label class="col-lg-3 control-label">اسم الشركة</label>
                                      <div class="col-lg-9">
                                        <input id="name" type="text" placeholder="اسم الشركة"  required="required" class="form-control" >
                                      </div>
                                    </div>
                                    <div class="form-group">

                                      <label class="col-lg-3 control-label">الفئة</label>
                                      <div class="col-lg-9">

                                         <select id="category" class="form-control" >


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
                                    <div class="form-group">

                                      <label class="col-lg-3 control-label">المنطقة</label>
                                      <div class="col-lg-9">
                                         <select id="area" class="form-control" >

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

                                    <div class="form-group">

                                      <label class="col-lg-3 control-label">اسم المستخدم</label>
                                      <div class="col-lg-9">
                                        <input id="username"  required="required" type="text" placeholder="اسم المستخدم" class="form-control" >
                                      </div>
                                    </div>


                                    <div class="form-group">

                                      <label class="col-lg-3 control-label">كلمة المرور</label>
                                      <div class="col-lg-9">
                                        <input name="password1" required="required" id="password" type="text" placeholder="كلمة المرور" class="form-control" >
                                      </div>
                                    </div>
                                    <div class="form-group">

                                      <label class="col-lg-3 control-label">تاكيد كلمة المرور</label>
                                      <div class="col-lg-9">
                                        <input name="password2"  required="required" type="text"  id="confirm_password" placeholder="تاكيد كلمة المرور" class="form-control" >
                                      </div>
                                    </div>



							 <div class="form-group">
								 <label class="col-lg-3 control-label">
								 </label>
												<div class="col-lg-9">        <span  id='message'></span>
											</div>
										</div>


                                    <div class="form-group">

                                      <label class="col-lg-3 control-label">معلن ام لا</label>
                                      <div class="col-lg-9">
                                         <select id="type" class="form-control" >
											 <option value="0">لا</option>
                                          <option value="1">معلن</option>


                                        </select>
                                      </div>
                                    </div>



                                  </div>

                              </div>
                              <div class="col-md-12">
                                <button id="btn" class="btn btn-md btn-primary btn-block m-t-n-xs" type="button"><strong>حفظ</strong></button>
                              </div>


                            </div>
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

	$(document).ready(function () {

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
									url:'api/del_request.php?id='+the_id,
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






		  $('#btn').click(function(){
			  if($('#password').val() =="")
				{
					$('#message').html('كلمة المرور فارغة ').css('color', 'red');
				}

			if($(this).prop("type")=="submit")
				{

					var name=$("#name").val();
					var password=$("#password").val();
					var username=$("#username").val();
					var type=$("#type").val();
					var category=$("#category").val();
					var area=$("#area").val();


							$.ajax({
									type:'GET',
									url:'api/add_company.php?name='+name+"&password="+password+"&username="+username+"&type="+type+"&category="+category+"&area="+area,
									success:function(result){
	                                                           result = JSON.parse(result);
                                       
										if(result.status == "0") 

{
 alert("تم الاضافة بنجاح يمكنك مشاهدتة في صفحة الاعمال المضافة");
location.reload();
}
										else if(result.status == "400")
										{


											alert("لقد حدث مشكلة يرجي التأكد من ىالاتصال بالانترنت");

										}
										else if(result.status == "-1") alert(" اسم الدخول موجود مسبقاً ");
                                                                                                                        //else alert(resut.status);

									   }// end success
									});

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

<script>

	 $(document).ready(function() {

		 $(".create_company").addClass("active");
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

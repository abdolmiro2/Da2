<?php require_once('header.php'); ?>
   <script src="js/jquery-2.1.1.js"></script>
            <div class="wrapper wrapper-content  animated fadeInRight">
              <div class="row">
                <div class="col-lg-12">
                  <div class="ibox ">
                    <div class="ibox-title">


                      <div class="row">
                        <div class="col-sm-12">
                           <button class="btn btn-info btn-rounded pull-right" data-toggle="modal" data-target="#myModal1">  اضافة وظيفة جديدة &nbsp;&nbsp;<i class="fa fa-plus-circle" aria-hidden="true" style="padding-left: 22px"></i></button>
                            <h3 class="title m-t-sm pull-left">الوظائف</h3>
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
                              <th class="text-center">المسمى الوظيفى</th>
                              <th class="text-center">للتقدم للوظيفة</th>
                             <th class="text-center">المدينة</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>

                                      <?php
                                      $sql = "SELECT * FROM jobs ORDER BY id";
                                      $query = mysqli_query($con, $sql);

                                      if($query){
                                                 $index = 0;
                                                 while($row = mysqli_fetch_assoc($query)){
													   $index++;
                                                             $id = $row["id"];
                                                             $job_title = $row["job_title"];
                                                             $job_title_ar = $row["job_title_ar"];
                                                             $email = $row["email"];
                                                             $email_ar = $row["email_ar"];
                                                             $area_id = $row["area_id"];
                                                             $job_description = $row["job_description"];
                                                             $job_description_ar = $row["job_description_ar"];

                                                             $sql = "SELECT * FROM area WHERE id='$area_id'";
                                                             $area_query = mysqli_query($con, $sql);

                                                             $area_name_ar = "";
                                                             if($area_query){
                                                                         $row = mysqli_fetch_assoc($area_query);
                                                                         $area_name = $row["name"];
                                                                         $area_name_ar = $row["name_ar"];
                                                             }else{
                                                                         //error
                                                                         echo mysqli_error($con);
                                                             }

                                                            ?> <tr class="gradeX" id="<?php echo "r". $id ?>">
                                                                <td class="text-center"><?php echo $index; ?></td>
                                                                <td class="text-center"><?php echo $job_title_ar; ?></td>
                                                                <td class="text-center"><?php echo $email; ?></td>
                                                                <td class="text-center"><?php echo $area_name_ar; ?></td>



                                                                <td class="text-center">
                                                                    <button class="btn btn-danger btn-xs demo4" data-toggle="tooltip" title="حذف" id="<?php echo $id ?>">
																		<span class="glyphicon glyphicon-trash"></span>
                                                                    </button>
                                                                    <button class="btn btn-primary btn-xs" data-toggle="modal" data-toggle="tooltip" title="تعديل" data-target="<?php echo "#edit" . $id; ?>"><span class="glyphicon glyphicon-edit"></span></button>
                                                                     <button class="btn btn-success  btn-xs" data-toggle="modal" data-toggle="tooltip" title="عرض" data-target="<?php echo "#job" . $id; ?>"><span class="glyphicon glyphicon-eye-open"></span></button>


                                                                </td>
                                                    </tr>




                         <!-- modal -->

                          <!-- The Modal -->
                          <div class="modal fade" id="<?php echo "job" . $id ?>" >
                            <div class="modal-dialog">
                              <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">

                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="home-color bold">المزيد من المعلومات عن الوظيفة </h4>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <h4>المسمى الوظيفى</h4>
                                    </div>
                                    <div class="col-sm-9">
                                      <h5><?php echo $job_title_ar; ?></h5>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-sm-3">
                                      <h4>للتقدم للوظيفة </h4>
                                    </div>
                                    <div class="col-sm-9">
                                      <h5><?php echo $email; ?></h5>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-sm-3">
                                      <h4>المدينة </h4>
                                    </div>
                                    <div class="col-sm-9">
                                      <h5><?php echo $area_name_ar; ?></h5>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-sm-3">
                                      <h4>وصف عن الوظيفه </h4>
                                    </div>
                                    <div class="col-sm-9">
                                      <h5><?php echo $job_description_ar; ?></h5>
                                    </div>
                                    <hr>
                                    <div class="clearfix"></div>
                                    <div class="col-sm-3">
                                      <h4>Job Title</h4>
                                    </div>
                                    <div class="col-sm-9">
                                      <h5><?php echo $job_title; ?></h5>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-sm-3">
                                      <h4>to apply send resume to </h4>
                                    </div>
                                    <div class="col-sm-9">
                                      <h5><?php echo $email; ?></h5>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-sm-3">
                                      <h4>City </h4>
                                    </div>
                                    <div class="col-sm-9">
                                      <h5><?php echo $area_name; ?></h5>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-sm-3">
                                      <h4>More Details</h4>
                                    </div>
                                    <div class="col-sm-9">
                                      <h5>
                                       <?php echo $job_description; ?>
                                      </h5>
                                    </div>
                                    <div class="clearfix"></div>


                                  </div>
                                </div>



                              </div>
                            </div>
                        </div>
                        <!-- /modal  -->

                        <!-- modal  -->
                         <div  class="modal fade" id="<?php echo "edit" . $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                 <h3 class="home-color bold">تعديل على الوظيفة</h3>
                              </div>
                              <div class="modal-body">
                          <div class="row ">
                            <div class="col-sm-12 ">


                              <form role="form" method="post" action="api/edit_job.php">
                                <!--  -->
                                <div class="row form-horizontal ">
                                  <div class="form-group">

                                   <input type="text" hidden="hidden" name="id" value="<?php echo $id; ?>">
                                    <label class="col-lg-4 control-label">المسمى الوظيفى</label>
                                    <div class="col-lg-8">
                                      <input type="text" placeholder="المسمى الوظيفى" class="form-control" name="job_title_ar" value="<?php echo $job_title_ar; ?>">
                                    </div>
                                  </div>
                                  <div class="form-group">

                                    <label class="col-lg-4 control-label">Job title </label>
                                    <div class="col-lg-8">
                                      <input type="text" placeholder="Job Title" class="form-control" name="job_title" value="<?php echo $job_title; ?>">
                                    </div>
                                  </div>
                                  <div class="form-group">

                                    <label class="col-lg-4 control-label">للتقدم للوظيفة ارسل السيرة الذاتية على </label>
                                    <div class="col-lg-8">
                                      <input type="text" placeholder="للتقدم للوظيفة" class="form-control" name="email_ar" value="<?php echo $email_ar; ?>">
                                    </div>
                                  </div>
                                  <div class="form-group">

                                    <label class="col-lg-4 control-label">To apply send resume to </label>
                                    <div class="col-lg-8">
                                      <input type="text" placeholder="To apply send resume to" class="form-control" name="email" value="<?php echo $email; ?>">
                                    </div>
                                  </div>
                                  <div class="form-group">

                                    <label class="col-lg-4 control-label">المدينة</label>
                                    <div class="col-lg-8">
                                       <select class="form-control" id="<?php echo "s".$id; ?>" name="area" value="<?php echo $id; ?>">
                                                 <?php
                                                 $sql="SELECT * FROM area ORDER BY id";
                                                 $area_query=mysqli_query($con, $sql);

                                                 if($area_query){
                                                             while($row=mysqli_fetch_assoc($area_query)){
                                                                          $r_id = $row["id"];
                                                                          $name = $row["name"];
                                                                          $name_ar = $row["name_ar"];

                                                                          ?><option value="<?php echo $r_id; ?>"><?php echo $name_ar ?></option><?php
                                                             }

                                                 }else{
                                                             //error
                                                             //echo mysqli_error($con);
                                                 }
                                                 ?>

                                      </select>

										 <script>



									   $(document).ready(function(){


			  $('<?php echo "#s".$id; ?> option[value=<?php echo $area_id; ?>]').attr('selected','selected');

									   });
										</script>
                                    </div>
                                  </div>


                                  <div class="form-group">

                                    <label class="col-lg-4 control-label">وصف  الوظيفه</label>
                                    <div class="col-lg-8">
                                      <textarea class="form-control" cols="5" name="job_description_ar" ><?php echo $job_description_ar; ?></textarea>
                                    </div>
                                  </div>
                                  <div class="form-group">

                                    <label class="col-lg-4 control-label">Job description</label>
                                    <div class="col-lg-8">
                                      <textarea class="form-control" cols="5" name="job_description" ><?php echo $job_description; ?></textarea>
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
                          </div>
                        </div>
                        <!-- /.modal -->

                        <?php

             }
}else{
             //error
             //echo mysqli_error($con);
  }
   ?>


                          </tbody>
                        </table>

                          <!-- modal  -->

                           <div  class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                   <h3 class="home-color bold">اضافة وظيفة جديدة</h3>
                                </div>
                                <div class="modal-body">
                            <div class="row ">
                              <div class="col-sm-12 ">


                                <form role="form" id="form" method="post" action="api/add_job.php">
                                  <!--  -->
                                  <div class="row form-horizontal ">
                                    <div class="form-group">

                                      <label class="col-lg-4 control-label">المسمى الوظيفى</label>
                                      <div class="col-lg-8">
                                        <input type="text" placeholder="المسمى الوظيفى" class="form-control" name="job_title_ar">
                                      </div>
                                    </div>
                                    <div class="form-group">

                                      <label class="col-lg-4 control-label">Job title </label>
                                      <div class="col-lg-8">
                                        <input type="text" placeholder="Job Title" class="form-control" name="job_title">
                                      </div>
                                    </div>
                                    <div class="form-group">

                                      <label class="col-lg-4 control-label">للتقدم للوظيفة ارسل السيرة الذاتية على </label>
                                      <div class="col-lg-8">
                                        <input type="text" placeholder="للتقدم للوظيفة" class="form-control" name="email_ar">
                                      </div>
                                    </div>
                                    <div class="form-group">

                                      <label class="col-lg-4 control-label">To apply send resume to </label>
                                      <div class="col-lg-8">
                                        <input type="text" placeholder="To apply send resume to" class="form-control" name="email">
                                      </div>
                                    </div>
                                    <div class="form-group">

                                      <label class="col-lg-4 control-label">المدينة</label>
                                      <div class="col-lg-8">

                                         <select class="form-control" id="sel1" name="area">
                                                    <?php
                                                    $sql="SELECT * FROM area ORDER BY id";
                                                    $query=mysqli_query($con, $sql);

                                                    if($query){
                                                                while($row=mysqli_fetch_assoc($query)){
                                                                            $id = $row["id"];
                                                                            $name = $row["name"];
                                                                            $name_ar = $row["name_ar"];

                                                                            ?><option value="<?php echo $id; ?>"><?php echo $name_ar ?></option><?php
                                                                }

                                                    }else{
                                                                //error
                                                                //echo mysqli_error($con);
                                                    }
                                                    ?>

                                        </select>
                                      </div>
                                    </div>


                                    <div class="form-group">

                                      <label class="col-lg-4 control-label">وصف  الوظيفه</label>
                                      <div class="col-lg-8">
                                        <textarea class="form-control" cols="5" name="job_description_ar"></textarea>
                                      </div>
                                    </div>
                                    <div class="form-group">

                                      <label class="col-lg-4 control-label">Job description</label>
                                      <div class="col-lg-8">
                                        <textarea class="form-control" cols="5" name="job_description"></textarea>
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
      									url:'api/del_job.php?id='+the_id,
      									success:function(result){

      									 result = JSON.parse(result);


      										if(result.status == "0")
      											{

      												    $('#r'+the_id).hide();

      								                swal("احذف!", "تم حذف بنجاح.", "success");
      											}


      										else if(result.status == "400")
      										{
                                       //alert("hello2");
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
            <!-- Mainly scripts -->
<script>
	
	 $(document).ready(function() {
		
		 $(".jobs").addClass("active");
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

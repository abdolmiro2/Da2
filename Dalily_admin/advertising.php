<?php require_once('header.php'); ?>

           <div class="wrapper wrapper-content  animated fadeInRight">
            <div class="row">
              <div class="col-md-12">
                            <div class="x_panel ibox float-e-margins">

                                <div class="x_content ibox-content">
                                    <div class="row">

                                          <form  class="form-horizontal" action="api/edit_adv.php" method="post" enctype="multipart/form-data">


                        <div class="col-md-12">
                            <div class="x_panel">

                                <div class="x_content">
                                    <div class="row">


                                        <div class="col-md-6 col-md-offset-3">
                                            <div class="x_content">
                                                <div class="wrap">

                                                  <?php

                                                  $sql="SELECT * FROM adv_images LIMIT 1 OFFSET 0";
                                                  $query=mysqli_query($con, $sql);

                                                  $id="";
                                                  $path="";
                                                  if($query){
                                                        $row=mysqli_fetch_assoc($query);

                                                        $id=$row["id"];
                                                        $path=$row["path"];
                                                  }
                                                  ?>
													
                                          <input type="text" hidden="hidden" name="id" value="<?php echo $id; ?>">
                                
                                                    <div class="upload-thumb thumbnail"> <img id="img" src="<?php echo $path; ?>"></div>
                                                    <input type="text" hidden="hidden" name="id" value="<?php echo $id; ?>">
                                                        <label for="upload" class="btn btn-primary center-block">تغيير الصورة
                                                            <input type="file" id="upload" name="image">
                                                        </label>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-md-12">
                                            <div class="x_content text-right">
                                                <button type="submit" class="btn btn-primary " id="save">حفظ التغيرات</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                  </form>
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
/*
      $(document).ready(function () {

      $('#save').click(function () {
            var id = $("#")
            });
      });
*/
      </script>

      <!-- Mainly scripts -->
      <script src="js/jquery-2.1.1.js"></script>
<script>
	
	 $(document).ready(function() {
		
		 $(".advertising").addClass("active");
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

<?php require_once('header.php'); ?>
<?php

$sql= "SELECT  COUNT(*) AS total FROM  `company`";
$query=mysqli_query($con,$sql);
$total_user=0;
 if($query)
 {

	$row=mysqli_fetch_assoc($query);
	 $total_company=$row["total"];

 }


$sql= "SELECT  COUNT(*) AS total FROM  `company` WHERE type='1'";
$query=mysqli_query($con,$sql);
$total_provider=0;
 if($query)
 {

	$row=mysqli_fetch_assoc($query);
	 $total_adv=$row["total"];

 }



$sql= "SELECT  COUNT(*) AS total FROM  `category`";
$query=mysqli_query($con,$sql);
$total_category=0;
 if($query)
 {

	$row=mysqli_fetch_assoc($query);
	 $total_category=$row["total"];

 }



$sql= "SELECT  * FROM  `info` LIMIT 1 OFFSET 0";
$query=mysqli_query($con,$sql);
$visits=0;

 if($query)
 {

	$row=mysqli_fetch_assoc($query);
	 $visits=$row["website_visits"];

	 //echo $website_visits;
 }








$sql= "SELECT * FROM  `area`";
$query=mysqli_query($con,$sql);

$area_name=array();
$area_col=array();

$area_id=array();


 if($query)
 {

	while($row=mysqli_fetch_assoc($query))
	{
		  $area_name[]=$row["name_ar"];

		$area_col[]=generate_color();

          $area_id[]=$row["id"];
	}



	$area_count=array();

	 for($i=0 ;$i <sizeof($area_id) ;$i ++)
	 {
		 $index=$area_id[$i];
		 $sql= "SELECT COUNT(*) AS total FROM  `company` WHERE area='$index'";

		$query=mysqli_query($con,$sql);

		 if($query)
		 {

			$row=mysqli_fetch_assoc($query);

				  $area_count[]=$row["total"];


         }
	 }
 }

$sql= "SELECT  * FROM  `company` ORDER BY visits DESC LIMIT 10 OFFSET 0";
$query=mysqli_query($con,$sql);
$website_visits=0;

$c_name=array();
$c_count=array();
$c_col=array();

 if($query)
 {

	while($row=mysqli_fetch_assoc($query))
	{
		 $c_name[]=$row["name_ar"];
		$c_col[]=generate_color();
 		$c_count[]=$row["visits"];
	}

 }




$sql= "SELECT * FROM  `category`";
$query=mysqli_query($con,$sql);

$category_name=array();
$category_col=array();

$category_id=array();


 if($query)
 {

	while($row=mysqli_fetch_assoc($query))
	{
		  $category_name[]=$row["name_ar"];

		$category_col[]=generate_color();

          $category_id[]=$row["id"];
	}



	$category_count=array();

	 for($i=0 ;$i <sizeof($category_id) ;$i++)
	 {
		 $index=$category_id[$i];
		 $sql= "SELECT COUNT(*) AS total FROM  `company` WHERE category='$index'";

		$query=mysqli_query($con,$sql);

		 if($query)
		 {

			$row=mysqli_fetch_assoc($query);

				  $category_count[]=$row["total"];


         }
	 }
 }








?>
            <div class="wrapper wrapper-content animated fadeInRight">
               <div class="row">
                  <div class="col-lg-3">
                     <div class="ibox float-e-margins">
                        <div class="ibox-title">

                           <h5>عدد الشركات</h5>
                        </div>
                        <div class="ibox-content">
                           <h1 class="no-margins"><?php echo $total_company; ?> </h1>
                           <small>كل الشركات</small>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3">
                     <div class="ibox float-e-margins">
                        <div class="ibox-title">
                           <!-- <span class="label label-info pull-right">Annual</span> -->
                           <h5>عدد المعلنين</h5>
                        </div>
                        <div class="ibox-content">
                           <h1 class="no-margins"><?php echo $total_adv; ?></h1>
                           <small>كل المعلنين</small>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3">
                     <div class="ibox float-e-margins">
                        <div class="ibox-title">
                           <h5>عدد التصنيفات</h5>
                        </div>
                        <div class="ibox-content">
                           <h1 class="no-margins"><?php echo $total_category; ?></h1>
                           <small>كل التصنيفات</small>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3">
                     <div class="ibox float-e-margins">
                        <div class="ibox-title">
                           <h5>عدد مشاهدة الموقع</h5>
                        </div>
                        <div class="ibox-content">
                           <h1 class="no-margins"><?php echo $visits; ?></h1>
                           <small> كل المشاهدات </small>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-6">
                     <div class="ibox float-e-margins">
                        <div class="ibox-title">
                           <h5>عدد الشركات بكل منطقة</h5>
                        </div>
                        <div class="ibox-content">
                           <div class="text-center">
                              <canvas id="doughnut-chart1" width="800" height="450"></canvas>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="ibox float-e-margins">
                        <div class="ibox-title">
                           <h5>اكثر الشركات مشاهدة بواسطة العملاء</h5>
                        </div>
                        <div class="ibox-content">
                           <div>
                              <canvas id="doughnut-chart" width="800" height="450"></canvas>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5> عدد الشركات فى كل تصنيف </h5>

                        </div>
                        <div class="ibox-content">
                            <div>
                               <canvas id="myChart" width="400" height="250"></canvas>

                            </div>
                        </div>
                    </div>
                </div>
               </div>
               <!-- <div class="row m-b-lg">
                  <div class="col-lg-12">
                     <div id='wrap'>
                        <div id='calendar'></div>
                        <div style='clear:both'></div>
                     </div>
                  </div>
               </div> -->
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

		 $(".index").addClass("active");
	 });
</script>

<script>



	 $(document).ready(function() {

             var area_name = <?php echo json_encode($area_name); ?>;
			     var area_col = <?php echo json_encode($area_col); ?>;
			    var area_count = <?php echo json_encode($area_count); ?>;


	new Chart(document.getElementById("doughnut-chart1"), {
    type: 'doughnut',
    data: {
      labels:area_name,
      datasets: [
        {
          label: "Population (millions)",
          backgroundColor:area_col ,
          data: area_count
        }
      ]
    },
    options: {
      title: {
        display: true,
      }
    }
});



		    var c_name = <?php echo json_encode($c_name); ?>;
			     var c_col = <?php echo json_encode($c_col); ?>;
			    var c_count = <?php echo json_encode($c_count); ?>;


		 new Chart(document.getElementById("doughnut-chart"), {
    type: 'doughnut',
    data: {
      labels: c_name,
      datasets: [
        {
          label: "Population (millions)",
          backgroundColor: c_col,
          data: c_count
        }
      ]
    },
    options: {
      title: {
        display: true,
      }
    }
});


		    var category_name = <?php echo json_encode($category_name); ?>;
			     var category_col = <?php echo json_encode($category_col); ?>;
			    var category_count = <?php echo json_encode($category_count); ?>;




		 $(function () {
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
  			labels:category_name,
        datasets: [{
             label: ' عدد الشركات فى كل تصنيف',
            data: category_count,
            backgroundColor: category_col,

            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true,
  userCallback: function(label, index, labels) {
                     // when the floored value is the same as the value we have a whole number
                     if (Math.floor(label) === label) {
                         return label;
                     }
                   }
                }
            }]
        },
		legend: {
 labels: {
   boxWidth: 0,
 }
    }
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

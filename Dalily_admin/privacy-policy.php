<?php require_once('header.php'); ?>
<link href="css/plugins/summernote/summernote.css" rel="stylesheet">
      <link href="css/plugins/summernote/summernote-bs3.css" rel="stylesheet">



            <div class="wrapper wrapper-content  animated fadeInRight">
            <div class="row">
              <div class="col-lg-12">
                <div class="ibox ">
                  <div class="ibox-title">

                    <h3 class="title m-t-sm pull-left">سياسة الخصوصية</h3>
                    <br>
                    <br>
                    <br>

                  </div>



                  <div class="ibox-content">
                    <div class="row ">
                      <div class="col-lg-12 animated fadeInRight">
            <div class="mail-box-header">
                <div class="pull-right tooltip-demo" style="border: 1px solid darkgray">
                    <a href="#" id="save" class="btn btn-white btn-lg save" > حفظ</a>

                </div>
                <h2>
                    سياسة الخصوصية

                </h2>

                <?php

                $sql = "SELECT * FROM privacy_policy LIMIT 1 OFFSET 0";
                $query = mysqli_query($con, $sql);

                $id = "";
                $policy_ar = "";
                $policy="";
                if($query){
                   $row = mysqli_fetch_assoc($query);

                   $id = $row["id"];
                   $policy_ar = $row["policy_ar"];
                   $policy = $row["policy"];
                }else{
                   echo mysqli_error($con);
                }

                ?>

            </div>
                <div class="mail-box">




                    <div class="mail-text h-200">

                        <textarea id="<?php echo $id; ?>" class="summernote ar"><?php echo $policy_ar; ?></textarea>
                       </div>
                    </div>

                </div>
                    </div>
                  </div>


                  <div class="ibox-content">
                    <div class="row ">
                      <div class="col-lg-12 animated fadeInRight">
            <div class="mail-box-header">
                <div class="pull-right tooltip-demo" style="border: 1px solid darkgray">
                    <a href="#" id="save" class="btn btn-white btn-lg save" > save</a>

                </div>
                <h2>
                    privacy policy

                </h2>

                <?php

                /*$sql = "SELECT * FROM privacy_policy LIMIT 1 OFFSET 0";
                $query = mysqli_query($con, $sql);

                $id = "";
                $policy = "";

                if($query){
                   $row = mysqli_fetch_assoc($query);

                   $id = $row["id"];
                   $policy = $row["policy"];
                }else{
                   echo mysqli_error($con);
                }

                */?>

            </div>
                <div class="mail-box">




                    <div class="mail-text h-200">

                        <textarea id="<?php echo $id; ?>" class="summernote eng"><?php echo $policy; ?></textarea>
                       </div>
                    </div>

                </div>
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
      <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
      <!-- <script src="js/jquery-2.1.1.js"></script> -->
      <script src="js/bootstrap.min.js"></script>

      <!-- Custom and plugin javascript -->
      <script src="js/inspinia.js"></script>



      <!-- SUMMERNOTE -->
    <script src="js/plugins/summernote/summernote.min.js"></script>
    <script>
        $(document).ready(function(){

            $('.summernote').summernote();

            $(".save").click(function(){
                //alert("hay");
                var policy_ar = $(".ar").summernote('code');
                var policy = $(".eng").summernote('code');
                //alert(policy);

                //alert($('.summernote').prop("id"));
                $.post("api/edit_privacy_policy.php", {id: $(".summernote").prop("id"), policy_ar: policy_ar, policy: policy}, function(data, status){
                    //alert(data);
                });
            });

        });

    </script>
<script>

	 $(document).ready(function() {

		 $(".privacy-policy").addClass("active");
	 });
</script>
   </body>
</html>

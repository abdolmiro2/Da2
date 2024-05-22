<?php require_once('header.php'); ?>
<link href="css/plugins/summernote/summernote.css" rel="stylesheet">
      <link href="css/plugins/summernote/summernote-bs3.css" rel="stylesheet">

            <div class="wrapper wrapper-content  animated fadeInRight">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="ibox ">
                        <div class="ibox-title">
                           <h3 class="title m-t-sm pull-left">الشروط والاحكام</h3>
                           <br>
                           <br>
                           <br>
                        </div>
                        <div class="ibox-content">
                           <div class="row ">
                              <div class="col-lg-12 animated fadeInRight">
                                 <div class="mail-box-header">
                                    <div class="pull-right tooltip-demo" style="border: 1px solid darkgrey">
                                       <a href="#" id="save" class="btn btn-white btn-lg save"> حفظ</a>
                                    </div>
                                    <h2>
                                       الشروط و الأحكام
                                    </h2>

                                    <?php

                                    $sql="SELECT * FROM terms LIMIT 1 OFFSET 0";
                                    $query=mysqli_query($con,$sql);
//echo mysqli_error($con);
                                    $id="";
                                    $terms_ar="";
                                    $terms="";
                                    if($query){
                                       $row=mysqli_fetch_assoc($query);


                                    	$id=$row["id"];
                                          $terms_ar=$row["terms_ar"];
                                          $terms=$row["terms"];
                                    }
                                    ?>

                                 </div>
                                 <div class="mail-box">
                                    <div class="mail-text h-200">
                                       <textarea id="<?php echo $id; ?>" class="summernote ar"><?php echo $terms_ar; ?></textarea>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="ibox-content">
                           <div class="row ">
                              <div class="col-lg-12 animated fadeInRight">
                                 <div class="mail-box-header">
                                    <div class="pull-right tooltip-demo" style="border: 1px solid darkgrey">
                                       <a href="#" id="save" class="btn btn-white btn-lg save"> save</a>
                                    </div>
                                    <h2>
                                       terms and conditions
                                    </h2>

                                    <?php

                                    /*$sql="SELECT * FROM terms LIMIT 1 OFFSET 0";
                                    $query=mysqli_query($con,$sql);
//echo mysqli_error($con);
                                    $id="";
                                    $terms_ar="";
                                    $terms="";
                                    if($query){
                                       $row=mysqli_fetch_assoc($query);


                                    	$id=$row["id"];
                                          $terms_ar=$row["terms_ar"];
                                          $terms=$row["terms"];
                                    }
                                    */?>

                                 </div>
                                 <div class="mail-box">
                                    <div class="mail-text h-200">
                                       <textarea id="<?php echo $id; ?>" class="summernote eng"><?php echo $terms; ?></textarea>
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

             $('.save').click(function(){
                var terms_ar = $('.ar').summernote('code');
                var terms = $('.eng').summernote('code');
                //alert(terms);
                //console.log(terms);
                //alert($('.ar').prop("id"));
                $.post("api/edit_terms.php", {id: $('.summernote').prop("id"), terms_ar: terms_ar, terms: terms}, function(data, status){
                   //alert(data)
                });
             });

             /*$('#save').click(function(){
                   var terms_ar = $('.ar').summernote('code');
                   var terms = $('.eng').summernote('code');
                //alert(terms);
                //console.log(terms);
                //alert($('.summernote').prop("id"));
                $.post("api/edit_terms.php", {id: $('.eng').prop("id"), terms_ar: terms_ar, terms: terms}, function(data, status){
                   //alert(data)
                });
          });*/
          });
      </script>
<script>

	 $(document).ready(function() {

		 $(".terms").addClass("active");
	 });
</script>
   </body>
</html>

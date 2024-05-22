<?php require_once('header.php'); ?>
<link href="css/plugins/summernote/summernote.css" rel="stylesheet">
      <link href="css/plugins/summernote/summernote-bs3.css" rel="stylesheet">

            <div class="wrapper wrapper-content  animated fadeInRight">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="ibox ">
                        <div class="ibox-title">
                           <h3 class="title m-t-sm pull-left">   الكلمات المفتاحية و Meta tags </h3>
                           <br>
                           <br>
                           <br>
                        </div>
                        <div class="ibox-content">
                           <div class="row ">
                              <div class="col-lg-12 animated fadeInRight">
                                 <div class="mail-box-header">
                                    <div class="pull-right tooltip-demo" style="border: 1px solid darkgrey">
                                       <a href="#" id="save" class="btn btn-white btn-lg save">  حفظ الكل</a>
                                    </div>
                                    <h3>
                                        الوصف Desctiption
                                    </h3>

                                    <?php

                                    $sql="SELECT * FROM meta LIMIT 1 OFFSET 0";
                                    $query=mysqli_query($con,$sql);
//echo mysqli_error($con);
                                    $id="";
                                     $description="";
                                 $author="";
									 $keywords="";
										 
                                    if($query){
                                       $row=mysqli_fetch_assoc($query);


                                    	$id=$row["id"];
                                       $keywords=$row["keywords"];
                                          $description=$row["description"];
										   $author=$row["author"];
                                    }
                                    ?>

                                 </div>
                                 <div class="mail-box">
                                    <div class="mail-text h-200">
                                       <textarea id="<?php echo $id; ?>" class="summernote desc"><?php echo $description; ?></textarea>
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
                                       <a href="#" id="save" class="btn btn-white btn-lg save"> حفظ الكل</a>
                                    </div>
                                    <h3>
                                      الكلمات المفتاحية key words
                                    </h3>

                                  

                                 </div>
                                 <div class="mail-box">
                                    <div class="mail-text h-200">
                                       <textarea id="<?php echo $id; ?>" class="summernote key"><?php echo $keywords; ?></textarea>
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
                                       <a href="#" id="save" class="btn btn-white btn-lg save"> حفظ الكل</a>
                                    </div>
                                    <h3>
                                     المؤلف Author 
                                    </h3>

                                  
                                 </div>
                                 <div class="mail-box">
                                    <div class="mail-text h-200">
                                       <textarea id="<?php echo $id; ?>" class="summernote auth"><?php echo $author; ?></textarea>
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
                var desc = $('.desc').summernote('code');
                var key = $('.key').summernote('code');
				  var auth = $('.auth').summernote('code');
				 
                //alert(terms);
                //console.log(terms);
                //alert($('.ar').prop("id"));
                $.post("api/edit_meta.php", {id: $('.summernote').prop("id"), desc: desc, key: key,auth:auth}, function(data, status){
                   result = JSON.parse(data);
                                  

										if(result.status == "1") 
											{
												    
														alert("تم التعديل بنجاح");
								         
											}
										
										
										else if(result.status == "-1")
										{
										
											alert("حدث خطأ اثناء التعديل يرجي التحقق مجدداً");
											
										}
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

		 $(".meta").addClass("active");
	 });
</script>
   </body>
</html>

<?php require_once('header.php'); ?>
<link href="css/plugins/summernote/summernote.css" rel="stylesheet">
      <link href="css/plugins/summernote/summernote-bs3.css" rel="stylesheet">

            <div class="wrapper wrapper-content  animated fadeInRight">

				
				 <?php
                    	
							         $sql="SELECT * FROM info LIMIT 1 OFFSET 0";
                                    $query=mysqli_query($con,$sql);

										 
                                    if($query){
                                       $row=mysqli_fetch_assoc($query);


                                    	$id=$row["id"];
                                       $img=$row["icon"];
                                         
										
                                    }
				?>
				
				
				
				

   <form  class="form-horizontal" action="api/edit_icon.php" method="post" enctype="multipart/form-data">
							 <input type="text" hidden="hidden" name="id" value="<?php echo $id; ?>">
                                <div class="ibox ">
                                  
                                            <div class="form-horizontal  m-t-lg">
                                                <!--  -->
                                                <div class="form-group">
                                                    <div class="col-lg-3 col-md-offset-5" style="float:right">
                                                        <div class=" thumbnail" style="max-width: 150px; max-height: 150px"> <img id="img" src="<?php echo "../".$img; ?>" alt=""></div>
                                                        
                                                        <label for="upload" class="btn btn-primary">تعديل الصورة
                                                            <input name="img" type="file" id="upload">
                                                        </label>
                                                        
                                                    </div>
                                          
										     </div>		
									  </div>
									 <div class="pull-right tooltip-demo" style="border: 1px solid darkgrey">
                                       <button type="submit"  class="btn btn-white btn-lg"> حفظ الصورة</button>
                                    </div>
									
								</div>
	   
	</form>
				
				

               <div class="row">
                  <div class="col-lg-12">
                     <div class="ibox ">
                      
                        <div class="ibox-content">
                           <div class="row ">
                              <div class="col-lg-12 animated fadeInRight">
                                 <div class="mail-box-header">
                                    <div class="pull-right tooltip-demo" style="border: 1px solid darkgrey">
                                       <a href="#" id="save" class="btn btn-white btn-lg save">  حفظ الكل</a>
                                    </div>
                                    <h3>
                                         Title عربي
                                    </h3>

                                    <?php

                                    $sql="SELECT * FROM info LIMIT 1 OFFSET 0";
                                    $query=mysqli_query($con,$sql);

                                    $id="";
                                    $title="";
                                    $title_ar="";
								
										 
                                    if($query){
                                       $row=mysqli_fetch_assoc($query);


                                       $id=$row["id"];
                                       $title=$row["title"];
                                       $title_ar=$row["title_ar"];
										
                                    }
                                    ?>

                                 </div>
                                 <div class="mail-box">
                                    <div class="mail-text h-200">
                                       <textarea id="<?php echo $id; ?>" class="summernote title_ar"><?php echo $title_ar; ?></textarea>
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
                               Title english 
                                    </h3>

                                  

                                 </div>
                                 <div class="mail-box">
                                    <div class="mail-text h-200">
                                       <textarea id="<?php echo $id; ?>" class="summernote title_en"><?php echo $title; ?></textarea>
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
    
      <script type="text/javascript" src="js/upload_img.js"></script>
      <script>
         $(document).ready(function(){

             $('.summernote').summernote();

             $('.save').click(function(){
				 
                var title_en = $('.title_en').summernote('code');
                var title_ar = $('.title_ar').summernote('code');
		
                //alert(terms);
                //console.log(terms);
                //alert($('.ar').prop("id"));
                $.post("api/edit_title.php", {id: $('.summernote').prop("id"), title: title_en, title_ar: title_ar}, function(data, status){
            
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

            
          });
      </script>
<script>

	 $(document).ready(function() {

		 $(".title").addClass("active");
	 });
	
	
</script>



  

   </body>
</html>

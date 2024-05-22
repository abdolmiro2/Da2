<?php require_once('header.php'); ?>
            <div class="wrapper wrapper-content animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="tabs-container">
                        <ul class="nav nav-tabs">
                           <li class="gallery"><a data-toggle="tab" href="#tab-1" aria-expanded="false"> Gallery</a></li>
                           <li class="info active"><a data-toggle="tab" href="#tab-2" aria-expanded="true">information</a></li>
                           <li class="video"><a data-toggle="tab" href="#tab-3" aria-expanded="false"> Videos</a></li>
                        </ul>
                        <div class="tab-content">
                           <div id="tab-1" class="tab-pane">

                              <div class="panel-body">

                                 <div class="row m-t-lg">
                                    <div class="col-sm-12 ">
                                       <h3 class="home-color bold">اضافة صور</h3>
                                       <hr>

                                          <!--  -->
                                          <div class="form-group"> </div>
                                          <!--  -->
                                          <div class="form-group">
                                             <div class="col-md-10">
												 
												 
												         <?php

                                                   $sqlv="SELECT * FROM company_pics WHERE company_id='$company_id'";
                                                   $queryv=mysqli_query($con, $sqlv);

                                                   if($queryv){

                                                               while($row2 = mysqli_fetch_assoc($queryv)){

                                                                           $id=$row2["id"];
                                                                           $img=$row2["img"];
                                                                         



                                                                           ?>   <div id="<?php echo  "d".$id; ?>" class="row">
												 	<form  action="api/edit_img.php" method="post" enctype="multipart/form-data">
  												<input name="id" value="<?php echo $id; ?>" type="hidden">
												 <div class="col-md-2">
												 <button id="<?php echo $id; ?>" type="button" class="btn btn-danger btn-block  demo5"   data-toggle="tooltip"> حذف</button>
												    </div>


												 <div class="col-md-2">
												  <button  class="btn btn-primary btn-block edit" > تعديل</button>
												    </div>

												 <div class="col-md-2">
													 <img style="max-height:35px;max-width:100px; border:1px solid white;" src="<?php echo "../Dalily_admin/".$img; ?>" />
													  </div>

													<div class="col-md-6">
														
														       <div class="form-group">
                                                   <!--  -->
                                                   <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                      <span class="input-group-addon btn btn-default btn-file">
                                                      <span class="fileinput-new">تحميل الصورة</span>
                                                      <span class="fileinput-exists">تغيير</span>
                                                      <input type="file" name="img"/>
                                                      </span>
                                                      <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">حذف</a>
                                                      <div class="form-control" data-trigger="fileinput">
                                                         <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                                         <span class="fileinput-filename"></span>
                                                      </div>
                                                   </div>
                                                   <!--  -->
                                                </div>
														
												
												                           </div>

												 </form>


												  </div>




													<br/>

													<?php

                                                               }

                                                   }else echo "error";

                                                   ?>

												 
												 
                                         
                                                <!--  -->
											
                                                <input type="button"  class="btn btn-sm  m-t-xs m-b-lg" id="add_field1" value=" اضافة  صورة اخرى"  style="margin-bottom: 25px" />
                                                <!--  -->
                                             </div>
                                             <label class="col-sm-2 control-label">اختر الصورة</label>
                                             <!-- <label class="col-md-2">
                                                </label> -->
                                          </div>
										
										
											 <form  action="api/add_img.php" method="post" enctype="multipart/form-data">
												    <div class="col-md-10">
                                                <div id="room1_fileds1">
                                                   <div>
                                                      <div class="content">
                                                      </div>
                                                   </div>
                                                </div>
												 </div>
                                          <div class="form-group">
                                             <div class="col-sm-offset-4   col-sm-10">
                                                <button type="submit" class="btn btn-primary btn-block">
                                                Save
                                                </button>
                                             </div>
                                          </div>
                                          <!--  -->
												 	 </form>

                                    </div>
                                 </div>
                              </div>
                           </div>




                           <div id="tab-2" class="tab-pane active">
                              <div class="panel-body">
								    <form class="edit" id="editInfo" action="api/edit_info.php" method="post" enctype="multipart/form-data">
                                 <div class="x_panel ibox float-e-margins">
                                    <div class="row">
                                       <div class="col-lg-12">
                                          <div class="ibox ">
                                             <!--  -->
                                             <div class="form-horizontal  m-t-lg">
                                                <!--  -->
                                                <input name="id" value="<?php echo $company_id; ?>" type="hidden">
                                                <div class="form-group x_content">
                                                   <div class="col-lg-3 col-md-offset-5">
                                                      <div class=" thumbnail" style="max-width: 150px; max-height: 150px"> <img id="img" class="img-responsive center-block" src="<?php echo "../Dalily_admin/" . $logo; ?>" alt=""></div>
                                                      <label for="upload" class="btn btn-primary" style=" margin-right: 20px;">تعديل الصورة
                                                      <input type="file" id="upload" name="logo">
                                                      </label>
                                                   </div>
                                                </div>
                                                <!--  -->
                                                <div class="form-group">

                                                  <?php
                                                  $sql="SELECT * FROM company WHERE id='$company_id'";
                                                  $query=mysqli_query($con,$sql);



                                                  if($query)
                                                  {

                                                   $row=mysqli_fetch_assoc($query);

                                                   $id=$row["id"];
                                                   $logo=$row["logo"];
                                                   $name_ar=$row["name_ar"];
                                                   $name=$row["name"];
                                                   $owner_name=$row["owner_name"];
                                                   $category_id=$row["category"];
                                                   $area_id=$row["area"];
                                                   $cover=$row["cover"];
                                                   $email=$row["email"];
                                                   $mobile=$row["mobile"];
                                                   $phone=$row["phone"];
                                                   $website=$row["website"];
                                                   $address_ar=$row["address_ar"];
                                                   $address=$row["address"];
                                                   $fb=$row["fb"];
                                                   $tw=$row["tw"];
                                                   $ins=$row["ins"];
                                                   $sn=$row["sn"];
                                                   $desc_ar=$row["desc_ar"];
                                                   $descr=$row["descr"];
                                                   $map=$row["map"];
													
                                       }

                                    



                                                    ?>

                                                   <label class="col-lg-2 control-label"> اسم الشركة</label>
                                                   <div class="col-lg-10"><input type="text" placeholder="" class="form-control" value="<?php echo $name_ar; ?>" name="name_ar">
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="col-lg-2 control-label">company name</label>
                                                   <div class="col-lg-10"><input type="text" placeholder="" class="form-control" value="<?php echo $name; ?>" name="name">
                                                   </div>
                                                </div>

                                                <div class="form-group">
                                                   <label class="col-lg-2 control-label">اسم المسئول</label>
                                                   <div class="col-lg-10"><input type="text" placeholder="" class="form-control" value="<?php echo $owner_name; ?>" name="owner_name">
                                                   </div>
                                                </div>

                                                <div class="form-group">
                                                   <label class="col-lg-2 control-label">التصنيف</label>
                                                   <div class="col-lg-10">
                                                      <select class="form-control" id="sel2" name="category">
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
                                                   <label class="col-lg-2 control-label">المنطقة</label>
                                                   <div class="col-lg-10">
                                                      <select class="form-control" id="sel1" name="area">
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
                                                   <label class="col-lg-2 control-label">صورة الغلاف </label>
                                                   <div class="col-lg-8">
                                                      <div class="form-">
                                                         <!--  -->
                                                         <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                            <span class="input-group-addon btn btn-default btn-file">
                                                            <span class="fileinput-new">تحميل الصورة</span>
                                                            <span class="fileinput-exists">تغيير</span>
                                                            <input type="file" name="cover">
                                                            </span>
                                                            <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">حذف</a>
                                                            <div class="form-control" data-trigger="fileinput">
                                                               <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                                               <span class="fileinput-filename"></span>
                                                            </div>
                                                         </div>
                                                         <!--  -->
                                                      </div>
                                                   </div>
														  <div class="col-lg-2"> <img style="max-height:35px;max-width:100px; border:1px solid white;" src="<?php echo"../Dalily_admin/".$cover; ?>" /> </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="col-lg-2 control-label"> البريد الإلكتروني</label>
                                                   <div class="col-lg-10"><input type="email" placeholder="" value="<?php echo $email; ?>" class="form-control" name="email">
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="col-lg-2 control-label">رقم الهاتف المتحرك</label>
                                                   <div class="col-lg-10"><input type="number" placeholder="" value="<?php echo $mobile; ?>" class="form-control" name="mobile">
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="col-lg-2 control-label">رقم الهاتف</label>
                                                   <div class="col-lg-10"><input type="number"  value="<?php echo $phone; ?>" class="form-control"name="phone">
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="col-lg-2 control-label">العنوان الالكترونى (URL)</label>
                                                   <div class="col-lg-10"><input type="type" placeholder="" value="<?php echo $website; ?>" class="form-control" name="website">
                                                   </div>
                                                </div>

                                                <div class="form-group">
                                                   <label class="col-lg-2 control-label">خريطة الموقع (URL)</label>
                                                   <div class="col-lg-10"><input type="type" placeholder="" value="<?php
													  echo $map; ?>" class="form-control" name="map">
                                                   </div>
                                                </div>

                                                <div class="form-group">
                                                   <label class="col-lg-2 control-label">تفاصيل العنوان</label>
                                                   <div class="col-lg-10"><input type="type" placeholder="" value="<?php echo $address_ar; ?>" class="form-control" name="address_ar">
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="col-lg-2 control-label">Address Details</label>
                                                   <div class="col-lg-10"><input type="type" placeholder="" value="<?php echo $address; ?>" class="form-control" name="address">
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="col-lg-2 control-label">فيس بوك</label>
                                                   <div class="col-lg-10"><input type="text" placeholder="" class="form-control" value="<?php echo $fb; ?>" name="fb">
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="col-lg-2 control-label">تويتر</label>
                                                   <div class="col-lg-10"><input type="text" placeholder="" class="form-control" value="<?php echo $tw; ?>" name="tw">
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="col-lg-2 control-label">انستجرام</label>
                                                   <div class="col-lg-10"><input type="text" placeholder="" class="form-control" value="<?php echo $ins; ?>" name="ins">
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="col-lg-2 control-label">سناب شات</label>
                                                   <div class="col-lg-10"><input type="text" placeholder="" class="form-control" value="<?php echo $sn; ?>" name="sn">
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="col-lg-2 control-label">وصف</label>
                                                   <div class="col-lg-10">
                                                      <div class="row ">
                                                         <div class="col-lg-12 animated fadeInRight">
                                                            <div class="mail-box">
                                                               <div class="mail-text h-200">
                                                                           <input type="hidden" name="desc_ar" id="arabic">
                                                              <div class="summernote ar"><?php echo $desc_ar; ?> </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="col-lg-2 control-label"> Description</label>
                                                   <div class="col-lg-10">
                                                      <div class="row ">
                                                         <div class="col-lg-12 animated fadeInRight">
                                                            <div class="mail-box">
                                                               <div class="mail-text h-200">
                                                                           <input type="hidden" name="descr" id="english">
                                                              <div class="summernote eng" name="descr"><?php echo $descr; ?></div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <div class="col-sm-offset-4   col-sm-10">
                                                      <button type="button" class="btn btn-primary btn-block" id="saveInfo">
                                                      Save
                                                      </button>
                                                   </div>
                                                </div>
                                             </div>
                                             <!--  -->
                                          </div>
                                       </div>
                                    </div>
                                 </div>
								  </form>
                              </div>
                           </div>


                           <div id="tab-3" class="tab-pane">
                              <div class="panel-body">


									  <div class="form-group">
										  <div class="col-md-5"></div>
                                              <div class="col-md-7">
                                             <label style="float: right;"  class="col-sm-4 control-label">اضف الفيديو (URL)</label>
										<br/>
										  </div>
                                             <!-- <label class="col-md-2">
                                                </label> -->
                                          </div>

                                    <div class="form-group">
                                             <div class="col-md-10">

                                                   <!--  -->
                                                   <?php

                                                   $sqlv="SELECT * FROM company_videos WHERE company_id='$company_id'";
                                                   $queryv=mysqli_query($con, $sqlv);

                                                   if($queryv){

                                                               while($row2 = mysqli_fetch_assoc($queryv)){

                                                                           $id=$row2["id"];
                                                                           $url=$row2["video"];
                                                                         



                                                                           ?>   <div id="<?php echo  "r".$id; ?>" class="row">


												 <div class="col-md-2">
												 <button id="<?php echo $id; ?>" class="btn btn-danger btn-block  demo4"   data-toggle="tooltip"> حذف</button>
												    </div>


												 <div class="col-md-2">
												  <button id="<?php echo $id; ?>" class="btn btn-primary btn-block edit" > تعديل</button>
												    </div>


													<div class="col-md-8">
													<input type="text" id="<?php echo "l".$id; ?>" value="<?php echo $url; ?>" class="form-control "  >
												                           </div>




												  </div>




													<br/>

													<?php

                                                               }

                                                   }else echo "error";

                                                   ?>





                                                <button  class="btn btn-sm  m-t-xs m-b-lg" id="add_field"    style="margin-bottom: 25px" >
													اضافة
فيديو
													جديد </button>


												   <!--  -->
                                                <div id="room1_fileds">
                                                   <div>
                                                      <div class="content">
                                                      </div>
                                                   </div>
                                                </div>



                                                <!--  -->
                                             </div>

										<br/>
                                             <!-- <label class="col-md-2">
                                                </label> -->
                                          </div>

                                    <div class="form-group">
                                       <div class="col-sm-offset-4   col-sm-10">
                                          <button id="saveit" type="button" class="btn btn-primary btn-block">
                                          حفظ
                                          </button>
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
      <script type="text/javascript" src="js/upload_img.js"></script>
      <!-- Jasny for upload image-->
      <script src="js/plugins/jasny/jasny-bootstrap.min.js"></script>
      <!-- SUMMERNOTE -->
      <script src="js/plugins/summernote/summernote.min.js"></script>
 <!-- Sweet alert -->
      <script src="js/plugins/sweetalert/sweetalert.min.js"></script>


<?php if( isset($_GET["type"]))
{
   $type=$_GET["type"];
	if($type=="video")
	{
		?>
		<script>
	$(document).ready(function(){


			$(".video").addClass("active");

		$(".info").removeClass("active");
		$(".gallery").removeClass("active");


		$("#tab-3").addClass("active");
	    $("#tab-1").removeClass("active");
		$("#tab-2").removeClass("active");



	});

	</script>
<?php
	}

	else if($type=="gallery")
	{
		?>
		<script>
	$(document).ready(function(){


			$(".gallery").addClass("active");

		$(".info").removeClass("active");
		$(".video").removeClass("active");


		$("#tab-1").addClass("active");
	    $("#tab-3").removeClass("active");
		$("#tab-2").removeClass("active");



	});

	</script>
<?php
	}


	else if($type=="info")
	{
		?>
		<script>
	$(document).ready(function(){


			$(".info").addClass("active");

		$(".video").removeClass("active");
		$(".gallery").removeClass("active");


		$("#tab-2").addClass("active");
	    $("#tab-1").removeClass("active");
		$("#tab-3").removeClass("active");



	});

	</script>
<?php
	}


}


?>
      <script>
         $(document).ready(function(){

             $('.summernote').summernote();
			 
			 
			 
			 
			 
			                  $('#saveInfo').click(function () {

                            var desc_ar = $('.ar').summernote('code');
                            var descr = $('.eng').summernote('code');

                            $("#arabic").val(desc_ar);
                            $("#english").val(descr);


$("#editInfo").submit();

});
			 
			 
			 

$('<?php echo "#sel1"; ?> option[value=<?php echo $area_id; ?>]').attr('selected','selected');
$('<?php echo "#sel2"; ?> option[value=<?php echo $category_id; ?>]').attr('selected','selected');	 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 


			 $('.edit').click(function(){

				  var the_id=$(this).prop("id");
				  	  var link=$("#l"+the_id).val();

				 		$.ajax({
									type:'GET',
									url:'api/edit_video.php?id='+the_id+"&video="+link,
									success:function(result){

									 result = JSON.parse(result);


										if(result.status == "0")
											{


								                swal("تعديل!", "تم التعديل بنجاح.", "success");
											}


										else if(result.status == "400")
										{

												swal("لقد حدث مشكلة في التعديل", "  حسناً ", "error");
										}


									   }// end success
									});

			 });




	 $('.demo4').click(function () {

		  var the_id=$(this).prop("id");

				swal({
							title: "هل انت متاكد ؟",
							text: "لن تكون قادرا على استرداد لينك الفيديو  !",
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

			 
			 
			 
			 $('.demo5').click(function () {

		  var the_id=$(this).prop("id");

				swal({
							title: "هل انت متاكد ؟",
							text: "لن تكون قادرا على استرداد الصورة   !",
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
									url:'api/del_img.php?id='+the_id,
									success:function(result){

									 result = JSON.parse(result);


										if(result.status == "0")
											{
												    $('#d'+the_id).hide();

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
			 
			 
			 
			 var last=0;


			  $('#add_field').click(function () {



		  last+=1;


          var objTo = document.getElementById('room1_fileds')
         var divtest = document.createElement("div");
         divtest.innerHTML = '<div class="form-group"><input type="text" class="form-control" id="newinput'+last+'"></div>';

         objTo.appendChild(divtest)

        if(last != 0 )
				 {
					if( $("#newinput"+last).val() =="")
						{
							$('#add_field').prop('disabled', true);
						}
				 }



	     });



			   $('#saveit').click(function () {

                                                   var desc_ar = $('.ar').summernote('code');
                                                   var descr = $('.eng').summernote('code');

                                                   $("#arabic").val(desc_ar);
                                                   $("#english").val(descr);

				  var link= $("#newinput"+last).val() ;
				     var id= <?php echo $company_id; ?>;

				 		$.ajax({
									type:'GET',
									url:'api/add_video.php?video='+link+'&id='+id,
									success:function(result){

									 result = JSON.parse(result);


										if(result.status == "0")
											{


								                swal("اضافة!", "تم الاضافة بنجاح.", "success");


												setTimeout(function(){
													window.location.href = "my_company.php?type=video";
												}, 1000);

											}


										else if(result.status == "400")
										{

												swal("لقد حدث مشكلة في الاضافة", "  حسناً ", "error");
										}


									   }// end success
									});

			  });



			  var last1=0;


			  $('#add_field1').click(function () {



		  last1+=1;


          var objTo = document.getElementById('room1_fileds1')
         var divtest = document.createElement("div");
      var id="<?php echo $company_id; ?>";
 divtest.innerHTML = '<div class="fileinput fileinput-new input-group" data-provides="fileinput"><span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">تحميل الصورة</span><span class="fileinput-exists">تغيير</span><input type="file" name="add_img"/><input type="hidden" name="id" value="'+id+'" />  </span><a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">حذف</a><span class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i><span class="fileinput-filename"></span></span></div>';
				  
				  
      

       
					if( last1==1)
						{
							   objTo.appendChild(divtest)
						
							$('#add_field1').prop('disabled', true);
						}
				 



	     });
			 
			 
			 
			 
			 

         });

		  
		  
      </script>


   </body>
</html>

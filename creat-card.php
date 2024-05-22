<?php require_once('db_config.php'); 

if(isset($_GET["lang"]))
{
   $lang=$_GET["lang"];		
   $lang= trim($lang);
   $lang= stripslashes($lang);
   $lang= htmlspecialchars($lang);
  
   
	if($lang != "ar" && $lang != "en")
	{
		$lang="ar";
	}
	

}
else
{
	$lang="ar";
}
 $sql="SELECT *  FROM `info` LIMIT 1 OFFSET 0";
           $query=mysqli_query($con,$sql);

		   if($query)
		   {
			   $row=mysqli_fetch_assoc($query);
			   $id=$row["id"];

                           $title=$row["title"];
                           $title_ar=$row["title_ar"];
                           $icon=$row["icon"];

		
		   }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Add Your favicon here -->
    <!--<link rel="icon" href="img/favicon.ico">-->
    <title>
<?php if($lang=="ar")
{ 
echo $title_ar;
}
else if($lang == "en")
{
echo $title;
}

 ?></title>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   
    <link href="https://fonts.googleapis.com/css?family=Changa:400,700" rel="stylesheet">
    <!-- Animation CSS -->
    <link href="css/animate.css" rel="stylesheet">

    <!-- font awesome  -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
     <!-- owl carousel  -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <!-- Custom styles for this slider -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/js/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    
    <!-- Main css -->
    <link href="css/style.css" rel="stylesheet">

    <link rel="shortcut icon" type="img/png" href="<?php echo $icon; ?>" />
	  <script src="js/jquery.js"></script>
    <?php 
	   if($lang=="ar")
	   {
		   $word="أنشئ بطاقة الأعمال الخاصة بك";
		   ?>
	       <!-- <link href="css/style_english.css" rel="stylesheet"> -->
	         <link href="css/bootstrap-rtl.css" rel="stylesheet">
	        
	   
	    <?php
	   }
	   else if($lang=="en")
	   {
		   		   $word="Create your business card";
		   ?>
	       <link href="css/style_english.css" rel="stylesheet"> 
	      <!--     <link href="css/bootstrap-rtl.css" rel="stylesheet"> -->
	   
	   <?php
	   }
	   
	   ?>
   
   
  </head>
  <body > 
    <div class="pre-loader">
        <div class="load-con">
            <img src="img/_logo.png" class="animated fadeInDown" alt="">
            <div class="spinner">
              <div class="bounce1"></div>
              <div class="bounce2"></div>
              <div class="bounce3"></div>
            </div>
        </div>
    </div>
   
    <?php //header  
	require_once('create/header.php'); 
	?>

   

      <!-- contact us -->
 <section id="head">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 m-b-30">
              <div class="">
                <h1 class="  wow fadeInDown white-color">  <?php echo $word ; ?>  </h1>
               
              </div>
            </div>
            
           </div>
        </div>  
      </section>
 
	  
	  
	  
	  
	  <?php 
	   if($lang=="ar")
	   {
		  
		   ?>
	      
	  
 <section>
   <div class="container">
    <div class="row">
    <div class="box_input">
   
        <div class="form-group">
          <div class="row">
            <div class="col-md-3">
              <label for="usr">إسم الشركة :</label>
            </div>
            <div class="col-md-9">
              <input type="text" class="form-control" id="company_name" placeholder="اكتب إسم الشركة " required="required">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-md-3">
              <label for="usr">إسم الشخص :</label>
            </div>
            <div class="col-md-9">
              <input type="text" class="form-control" id="person_name" placeholder="اكتب إسم الشخص " required="required">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-md-3">
              <label for="usr">المسمى الوظيفي :</label>
            </div>
            <div class="col-md-9">
              <input type="text" class="form-control" id="job_name" placeholder="اكتب المسمى الوظيفي " required="required">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-md-3">
              <label for="pwd"> رقم الهاتف المتحرك :</label>
            </div>
            <div class="col-md-9">
              <input class="form-control" type="number" id="mobile_number" value=""  placeholder=" رقم الهاتف المتحرك"  required="required">   
            </div>
            </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-md-3">
              <label for="pwd">رقم الهاتف :</label>
            </div>
            <div class="col-md-9">
              <input class="form-control" type="number" id="phone_number" value=""  placeholder="رقم الهاتف"  required="required">   
            </div>
            </div>
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col-md-3">
              <label for="email">البريد الالكترونى :</label>
            </div>
            <div class="col-md-9">
              <input type="email" class="form-control" id="email" placeholder="اكتب البريد الالكترونى" name="email"  required="">
            </div>
          </div>
        </div>
       
        <div class="form-group">
          <div class="row">
            <div class="col-md-3">
              <label for="usr">رقم الفاكس :</label>
            </div>
            <div class="col-md-9">
              <input type="number" class="form-control" id="fax_number" placeholder="رقم الفاكس" required="">
            </div>
          </div>
        </div>
        <div class="form-group">
            <div class="row">
              <div class="col-md-3">
                <label for="usr">المدينة :</label>
              </div>
              <div class="col-md-9">
                <div class="form-group ">
                  <div class="">
                    <select id="area" class="form-control" >
                    <option value="0">اختر المدينة</option>
						<?php
		   
							 $sql2="SELECT `id`,`name_ar` FROM `area`";
								 $query2=mysqli_query($con,$sql2);

								if($query2) 
								{

									while($row2 = mysqli_fetch_assoc($query2))
									{
										$id=$row2["id"];
										$area=$row2["name_ar"];
										?>
											<option value="<?php echo  $id; ?>"><?php echo  $area; ?></option>
						 				<?php
										
									}
									

 
								} 
						
					?>
		
                   
                  
                  </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-3">
                <label for="usr">الفئة :</label>
              </div>
              <div class="col-md-9">
                <div class="form-group ">
                  <div class="">
                    <select id="category" class="form-control">
                    <option value="0">اختر الفئة</option>
                   				<?php
		   
							 $sql2="SELECT `id`,`name_ar` FROM `category`";
								 $query2=mysqli_query($con,$sql2);

								if($query2) 
								{

									while($row2 = mysqli_fetch_assoc($query2))
									{
										$id=$row2["id"];
										$category=$row2["name_ar"];
										?>
											<option value="<?php echo  $id; ?>"><?php echo  $category; ?></option>
						 				<?php
										
									}
									

 
								} 
						
					?>
		
                  </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="row">
              <div class="col-md-3">
                <label for="usr">ملاحظة :</label>
              </div>
              <div class="col-md-9">
                <div class="form-group">
                  <textarea class="form-control" rows="3" id="notes" placeholder="ملاحظة ....  " ></textarea>
                </div>
              </div>
            </div>
          </div>
          
          <div class="row">
              <div class="col-md-3 col-md-offset-3">
             <span style="color:#44bc3c" id="text"> </span>
            </div>
            <div class="col-md-2 col-md-offset-4">
              <button id="save" type="button" class="btn btn-primary inverse btn-lg btn-rounded pull-left btn-block">ارسل</button>
            </div>
          </div>
       
      </div>
    </div>
  </div>
 </section>
	    <?php
	   }
	   else if($lang=="en")
	   {
		   		   ?>
		
 <section>
   <div class="container">
    <div class="row">
    <div class="box_input">
     
        <div class="form-group">
          <div class="row">
            <div class="col-md-3">
              <label for="usr">Company Name :</label>
            </div>
            <div class="col-md-9">
              <input type="text" class="form-control" id="company_name" placeholder="Company Name " required="">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-md-3">
              <label for="usr">Personal Name :</label>
            </div>
            <div class="col-md-9">
              <input type="text" class="form-control" id="person_name" placeholder="Personal Name" required="">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-md-3">
              <label for="usr">Job Title :</label>
            </div>
            <div class="col-md-9">
              <input type="text" class="form-control" id="job_name" placeholder="Job Title " required="">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-md-3">
              <label for="pwd">Mobile Number :</label>
            </div>
            <div class="col-md-9">
              <input class="form-control" type="number" id="mobile_number" value=""  placeholder="Mobile Number"  required="">   
            </div>
            </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-md-3">
              <label for="pwd">Tel Number :</label>
            </div>
            <div class="col-md-9">
              <input class="form-control" type="number" id="phone_number" value=""  placeholder="Tel Number"  required="">   
            </div>
            </div>
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col-md-3">
              <label for="email">Email Address :</label>
            </div>
            <div class="col-md-9">
              <input type="email" class="form-control" id="email" placeholder="Email Address" name="email"  required="">
            </div>
          </div>
        </div>
       
        <div class="form-group">
          <div class="row">
            <div class="col-md-3">
              <label for="usr">Fax Number :</label>
            </div>
            <div class="col-md-9">
              <input type="number" class="form-control" id="fax_number" placeholder="Fax Number" required="">
            </div>
          </div>
        </div>
        <div class="form-group">
            <div class="row">
              <div class="col-md-3">
                <label for="usr">Select a city :</label>
              </div>
              <div class="col-md-9">
                <div class="form-group ">
                  <div class="">
                    <select class="form-control" id="area">
                    <option value="0">select a city</option>
                   	<?php
		   
							 $sql2="SELECT `id`,`name` FROM `area`";
								 $query2=mysqli_query($con,$sql2);

								if($query2) 
								{

									while($row2 = mysqli_fetch_assoc($query2))
									{
										$id=$row2["id"];
										$area=$row2["name"];
										?>
											<option value="<?php echo  $id; ?>"><?php echo  $area; ?></option>
						 				<?php
										
									}
									

 
								} 
						
					?>
		
                  </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-3">
                <label for="usr">select a category :</label>
              </div>
              <div class="col-md-9">
                <div class="form-group ">
                  <div class="">
                    <select class="form-control" id="category">
                    <option value="0">select a category</option>
                    	<?php
		   
							 $sql2="SELECT `id`,`name` FROM `category`";
								 $query2=mysqli_query($con,$sql2);

								if($query2) 
								{

									while($row2 = mysqli_fetch_assoc($query2))
									{
										$id=$row2["id"];
										$category=$row2["name"];
										?>
											<option value="<?php echo  $id; ?>"><?php echo  $category; ?></option>
						 				<?php
										
									}
									

 
								} 
						
					?>
                  </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="row">
              <div class="col-md-3">
                <label for="usr">Note :</label>
              </div>
              <div class="col-md-9">
                <div class="form-group">
                  <textarea class="form-control" rows="3" id="notes" placeholder="Note ....  "  ></textarea>
                </div>
              </div>
            </div>
          </div>
          
          <div class="row">
              <div class="col-md-3 col-md-offset-3">
             <span style="color:#44bc3c" id="text"> </span>
            </div>
            <div class="col-md-2 col-md-offset-4">
              <button type="button" id="save"  class="btn btn-primary inverse btn-lg btn-rounded btn-block pull-left">Send</button>
            </div>
          </div>
       
      </div>
    </div>
  </div>
 </section>
	   <?php
	   }
	   
	   ?>
 

               
   	<?php //footer 
	require_once('index/footer.php'); 
	?>
	   
	  
	

               


<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.min.js"></script>

<script src="js/wow.min.js"></script>
 <script src="js/anchorscrol.js"></script>

<script type="text/javascript" src="js/jquery.owl.carousel.js"></script>

    <!-- slider -->
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script src="assets/js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="js/validate_number.js"></script>
    <!-- Main js -->
    <script src="js/main.js"></script>

<script>
        $(document).ready(function() {
            appMaster.preLoader();
            
        });
    </script>
    
<script>
        $(document).ready(function() {
            appMaster.preLoader();
            
        });
    </script>
     <script>
        $(document).ready(function(){

       
            $("#save").click(function(){
				
                var company_name=$("#company_name").val();
				var person_name=$("#person_name").val();
				var job_name=$("#job_name").val();
				var mobile_number=$("#mobile_number").val();
				var fax_number=$("#fax_number").val();
				
				var phone_number=$("#phone_number").val();
				var email=$("#email").val();
				var area=$("#area").val();
				var category=$("#category").val();
			    var notes=$("#notes").val();
				    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				 $("#text").css("color","red");
				if(company_name =="")
					{
						 $("#text").text("<?php 
										 if($lang=="ar")
										 echo " اسم الشركة فارغ "; 
										 else
										  echo"Company name is empty "; 
										 
										 ?>");
										 
										 
					}
				else if(person_name=="")
					{
 							$("#text").text("<?php 
										 if($lang=="ar")
											 echo " الاسم الشخصي فارغ "; 
										 else
										  echo"Name is empty "; 
										 
										 ?>");
					}
				else if(job_name=="")
					{
						 $("#text").text("<?php 
										 if($lang=="ar")
											 echo " المسمي الوظيفي فارغ";
										  else
										  echo"Job name is empty "; 
										 
										 ?>");
					}
				else if(mobile_number=="")
					{
							 $("#text").text("<?php 
										 if($lang=="ar")
											 echo " رقم الهاتف المتحرك فارغ ";
											   else
										  echo" Mobile is empty "; 
										 
										 ?>");
					}
										
				else if(phone_number=="")
					{
						 $("#text").text("<?php 
										 if($lang=="ar")
											 echo "  رقم الهاتف فارغ ";
										   else
										  echo " Phone is empty "; 
										 
										 ?>");
					}
										 
										 
						else if(email=="")
					{
							 $("#text").text("<?php 
										 if($lang=="ar")
											 echo " البريد الالكتروني ";
											   else
										  echo " email is empty "; 
										 
										 ?>");
					}
											 else if (! regex.test(email))
						{
							$("#text").text("<?php
										 if($lang=="ar")
											 echo " البريد الالكتروني غير مطابق للمواصفات ";
										 else
										  echo"Email is not valid ";

										 ?>");
						}
											
				else if(area==0)
					{
						 $("#text").text("<?php 
										 if($lang=="ar")
											 echo"  لم يتم اختيار مدينة   ";
										   else
										  echo" No city selected   "; 
										 
										 ?>");
					}
					else if(category==0)
					{
							 $("#text").text("<?php 
										 if($lang=="ar")
											 echo" لم يتم اختيار اي تصنيف  ";
											   else
										  echo " No Category selected   "; 
										 
										 ?>");
					}
				
				else
				{
					
                $.post("api/create.php", { company_name: company_name ,person_name: person_name ,job_name: job_name ,mobile_number: mobile_number ,phone_number: phone_number,email:email,fax_number:fax_number,area_id:area,category_id:category,notes:notes  }, function(data, status){
					
				         var result = JSON.parse(data);
                                  
                           
										if(result.status == "0") 
											{
												 		
											<?php	 
												if($lang=="ar") {
												
												?>
											 $("#text").text("تم الارسال بنجاح");
												<?php 
												}
										   else
										   {
											   ?>
										 $("#text").text("Send successfully thank you");
												<?php
										   }
										 ?>
												
								              
											var company_name=$("#company_name").val("");
											var person_name=$("#person_name").val("");
											var job_name=$("#job_name").val("");
											var mobile_number=$("#mobile_number").val("");
											var fax_number=$("#fax_number").val("");

											var phone_number=$("#phone_number").val("");
											var email=$("#email").val("");
												
												$('#area option[value=0]').attr('selected','selected');
												
												$('#category option[value=0]').attr('selected','selected');
												
											
											var notes=$("#notes").val("");
				
												$("#text").css("color","#44bc3c");
												
											}
										
										
										else 
										{
										   $("#text").text(" حدث خطأ ما اعد المحاولة ");
												
										}
                   
                });
					
				}
				
            });

        });

    </script>


    
</body>
</html>
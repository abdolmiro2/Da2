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
     <?php 
	   if($lang=="ar")
	   {
		   $word="تواصل معنا";
		   ?>
	       <!-- <link href="css/style_english.css" rel="stylesheet"> -->
	         <link href="css/bootstrap-rtl.css" rel="stylesheet">
	        
	   
	    <?php
	   }
	   else if($lang=="en")
	   {
		   		   $word="Contact us ";
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
	require_once('contact/header.php'); 
	?>

   
  
      <!-- contact us -->
 <section id="head">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 m-b-30">
              <div class="">
                <h1 class="  wow fadeInDown white-color"><?php echo $word ; ?></h1>
               
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
      <form>
        <div class="form-group">
          <div class="row">
            <div class="col-md-3">
              <label for="usr">الاسم بالكامل:</label>
            </div>
            <div class="col-md-9">
              <input type="text" class="form-control" id="name" placeholder="اكتب اسمك بالكامل " required="">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-md-3">
              <label for="email">البريد الالكترونى:</label>
            </div>
            <div class="col-md-9">
              <input type="email" class="form-control" id="email" placeholder="اكتب البريد الالكترونى" name="email"  required="">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-md-3">
              <label for="pwd">رقم الهاتف:</label>
            </div>
            <div class="col-md-9">
              <input class="form-control" type="input" id="phone" value=""  placeholder="رقم الهاتف"  required="">   
            </div>
            </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-md-3">
              <label for="usr">العنوان:</label>
            </div>
            <div class="col-md-9">
              <input type="text" class="form-control" id="title" placeholder="اكتب عنوان الرسالة " required="">
            </div>
          </div>
        </div>
          
          <div class="form-group">
            <div class="row">
              <div class="col-md-3">
                <label for="usr">الرسالة:</label>
              </div>
              <div class="col-md-9">
                <div class="form-group">
                  <textarea class="form-control" rows="3" id="msg" placeholder="اكتب الرسالة ....  "  required=""></textarea>
                </div>
              </div>
            </div>
          </div>
          
          <div class="row">
            
			   <div class="col-md-3 col-md-offset-3">
             <span style="color:#44bc3c" id="text"> </span>
            </div>
			  
            <div class="col-md-2 col-md-offset-4">
              <button type="button" id="save" class="btn btn-primary inverse btn-lg btn-rounded pull-left btn-block">ارسل</button>
            </div>
          </div>
        </form>
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
              <label for="usr">Name :</label>
            </div>
            <div class="col-md-9">
              <input type="text" class="form-control" id="name" placeholder="Name" required="">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-md-3">
              <label for="email">Email :</label>
            </div>
            <div class="col-md-9">
              <input type="email" class="form-control" id="email" placeholder="Email" name="email"  required="">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-md-3">
              <label for="pwd">Phone :</label>
            </div>
            <div class="col-md-9">
              <input class="form-control" type="input" id="phone" value=""  placeholder="Phone"  required="">   
            </div>
            </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-md-3">
              <label for="usr">Subject :</label>
            </div>
            <div class="col-md-9">
              <input type="text" class="form-control" id="title" placeholder="Subject" required="">
            </div>
          </div>
        </div>
          
          <div class="form-group">
            <div class="row">
              <div class="col-md-3">
                <label for="usr">Message :</label>
              </div>
              <div class="col-md-9">
                <div class="form-group">
                  <textarea class="form-control" rows="3" id="msg" placeholder="Message....  "  required=""></textarea>
                </div>
              </div>
            </div>
          </div>
          
          <div class="row">
              <div class="col-md-3 col-md-offset-3">
             <span style="color:#44bc3c" id="text"> </span>
            </div>
			  
            <div class="col-md-2 col-md-offset-4">
              <button type="button" id="save" class="btn btn-primary inverse btn-lg btn-rounded pull-left btn-block">Send</button>
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
	   
	  
<script src="js/jquery.js"></script>
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
        $(document).ready(function(){

       
            $("#save").click(function(){
				
                var name=$("#name").val();
				var title=$("#title").val();
				var msg=$("#msg").val();
				var phone=$("#phone").val();
				var email=$("#email").val();
				
				 $("#text").css("color","red");
				if(name =="")
					{
						 $("#text").text("<?php 
										 if($lang=="ar")
										 echo" الاسم فارغ "; 
										 else
										  echo" Name is empty "; 
										 
										 ?>");
										 
										 
					}
				else if(title=="")
					{
 							$("#text").text("<?php 
										 if($lang=="ar")
											 echo"عنوان الرسالة فارغ "; 
										 else
										  echo" Subject is empty "; 
										 
										 ?>");
					}
				else if(msg=="")
					{
						 $("#text").text("<?php 
										 if($lang=="ar")
											 echo" الرسالة فارغة ";
										  else
										  echo" Message is empty "; 
										 
										 ?>");
					}
				else if(phone=="")
					{
							 $("#text").text("<?php 
										 if($lang=="ar")
											 echo" رقم التليفون فارغ ";
											   else
										  echo" Phone is empty "; 
										 
										 ?>");
					}
				else if(email=="")
					{
						 $("#text").text("<?php 
										 if($lang=="ar")
											 echo" البريد الالكتروني فارغ ";
										   else
										  echo" Email is empty "; 
										 
										 ?>");
					}
				else
				{
					
                $.post("api/add_contact.php", { name: name ,title: title ,msg: msg ,phone: phone ,email: email  }, function(data, status){
					
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
												
								              
												var name=$("#name").val("");
												var title=$("#title").val("");
												var msg=$("#msg").val("");
												var phone=$("#phone").val("");
												var email=$("#email").val("");
												$("#text").css("color","#44bc3c");
												
											}
										
										
										else if(result.status == "400")
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
<?php require_once('db_config.php');

if(isset($_GET["lang"]))
{
   $lang=$_GET["lang"];		
   $lang= trim($lang);
   $lang= stripslashes($lang);
   $lang= htmlspecialchars($lang);
   $lang = mysqli_real_escape_string($con,$lang);
   
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
		   $job="الوظائف";
		   ?>
	       <!-- <link href="css/style_english.css" rel="stylesheet"> -->
	         <link href="css/bootstrap-rtl.css" rel="stylesheet">
	        
	   
	    <?php
	   }
	   else if($lang=="en")
	   {
		   		   $job="Jobs";
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
	require_once('jobs/header.php'); 
	?>
  
   

      <!-- contact us -->
 <section id="head">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 m-b-30">
              <div class="">
				  
                <h1 class="  wow fadeInDown white-color"><?php echo $job ; ?></h1>
               
              </div>
            </div>
            
           </div>
        </div>  
      </section>
 
 <section id="jobs">
   <div class="container">
    <div class="row">
   
	 <?php
	      $sql="SELECT * FROM jobs ORDER BY id DESC";
          $query=mysqli_query($con,$sql);
			
				if($query)
				{

				while($row=mysqli_fetch_assoc($query))
				{
				 
					 $job_title=$row["job_title"];
					 $job_title_ar=$row["job_title_ar"];
					 $email=$row["email"];
					 $email_ar=$row["email_ar"];
					 $area_id=$row["area_id"];
					 $job_description=$row["job_description"];
					 $job_description_ar=$row["job_description_ar"];
					
					
					
					if($lang=="ar")
					{
						
							 $sql2="SELECT `name_ar` FROM `area` WHERE `id`='$area_id'";
								 $query2=mysqli_query($con,$sql2);

								if($query2) 
								{

									$row2 = mysqli_fetch_assoc($query2);
									$area=$row2["name_ar"];

 
								} 
						
					?>
		
		
		
						  <div class="box_input">
							<div class="col-md-4">
							  <h5 class="main-color bold">
								المسمى الوظيفى :
							  </h5>
							</div>
							<div class="col-md-8">
							  <p><?php echo $job_title_ar; ?> </p>
							</div>
							<div class="clearfix"></div>
							<div class="col-md-4">
							  <h5 class="main-color bold">
								للتقدم للوظيفة ارسل السيرة الذاتية على : 
							  </h5>
							</div>
							<div class="col-md-8">
							  <p><?php echo $email_ar; ?> </p>
							</div>
							<div class="clearfix"></div>
							<div class="col-md-4">
							  <h5 class="main-color bold">
								المدينة :
							  </h5>
							</div>
							<div class="col-md-8">
							  <p><?php echo $area; ?>  </p>
							</div>
							<div class="clearfix"></div>
							<div class="col-md-4">
							  <h5 class="main-color bold">
								وصف الوظيفة :
							  </h5>
							</div>
							<div class="col-md-8">
							  <p>
								<?php echo $job_description_ar; ?>
								
								</p>
							</div>
						  </div>

		
                  <?php
					}
					else
					{
						
						 $sql2="SELECT `name` FROM `area` WHERE `id`='$area_id'";
								 $query2=mysqli_query($con,$sql2);

								if($query2) 
								{

									$row2 = mysqli_fetch_assoc($query2);
									$area=$row2["name"];

 
								} 
						
						
						?>
		
						<div class="box_input">
						<div class="col-md-3">
						  <h5 class="main-color bold">
						   Job Title :
						  </h5>
						</div>
						<div class="col-md-9">
						  <p><?php echo $job_title; ?> </p>
						</div>
						<div class="clearfix"></div>
						<div class="col-md-3">
						  <h5 class="main-color bold">
							to apply send resume to :
						  </h5>
						</div>
						<div class="col-md-9">
						  <p><?php echo $email; ?> </p>
						</div>
						<div class="clearfix"></div>
						<div class="col-md-3">
						  <h5 class="main-color bold">
							City :
						  </h5>
						</div>
						<div class="col-md-9">
						  <p><?php echo $area; ?>  </p>
						</div>
						<div class="clearfix"></div>
						<div class="col-md-3">
						  <h5 class="main-color bold">
							More Details :
						  </h5>
						</div>
						<div class="col-md-9">
						  <p>
							<?php echo $job_description; ?>
							</p>
						</div>
					  </div>

		<?php 
						
					}
				}
							 
				}
	?>
		
		
		
		
		
    </div>
  </div>
 </section>

               
 
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
    

    
</body>
</html>
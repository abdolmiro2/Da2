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
		   $word="الشروط و الأحكام";
		   ?>
	       <!-- <link href="css/style_english.css" rel="stylesheet"> -->
	         <link href="css/bootstrap-rtl.css" rel="stylesheet">


	    <?php
	   }
	   else if($lang=="en")
	   {
		   		   $word="Terms and conditions";
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
	require_once('terms/header.php');
	?>




      <!-- contact us -->
 <section id="head">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 m-b-30">
              <div class="">
                <h1 class="  wow fadeInDown white-color">

					<?php echo $word ; ?>

</h1>

              </div>
            </div>

           </div>
        </div>
      </section>

 <section>
   <div class="container">
    <div class="row">
      <div class="box_input">
        <table width="90%" border="0" style="margin:0 auto;">











                  <tbody><tr>






							 <?php
	      $sql="SELECT * FROM  terms LIMIT 1 OFFSET 0";
          $query=mysqli_query($con,$sql);

				if($query)
				{

				 $row=mysqli_fetch_assoc($query);

					 $terms=$row["terms"];
           $terms_ar=$row["terms_ar"];


          if($lang == "en")
					  
		  {
					  ?>
						<td align="left">
						<?php 
			  echo $terms;
			  
		  }
					
            else if($lang == "ar")
			{
					  ?>
						<td align="right">
 						<?php 	echo $terms_ar; ?>
						</td>
					  <?php
			}




				}
	?>




					











                  </tr>





                </tbody></table>
      </div>
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

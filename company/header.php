<?php require_once('db_config.php'); 

$admin=0;

if(isset($_SESSION['admin_dalily_access']))
{
	$id=$_SESSION['company_id'];
	$sql="SELECT * FROM `company` WHERE `id`='$id'";

			$query=mysqli_query($con,$sql);


			if($query) // will return true if succefull else it will return false
			 {
			

				 $rowcount=mysqli_num_rows($query);
				 if($rowcount!=1)// found here
				 {
			echo '<script type="text/javascript"> window.location = "login.php"
              </script>';
				 }
				 else
				 {
					 $row=mysqli_fetch_assoc($query);
					  $company_name=$row["name_ar"];
					 $company_pic=$row["logo"];
					 $logo=$company_pic;
					 $company_id=$row["id"];
                                          $company_token=$row["company_token"];
                                         $_SESSION['company_token']=$company_token;
				 }
			 }
	$admin=1;
	
	
}


else if(!isset($_SESSION['company_token']))
{
	echo '<script type="text/javascript"> window.location = "login.php"
    </script>';

}
else
{

$token=$_SESSION['company_token'];
 $sql="SELECT * FROM `company` WHERE `company_token`='$token'";

			$query=mysqli_query($con,$sql);


			if($query) // will return true if succefull else it will return false
			 {
			

				 $rowcount=mysqli_num_rows($query);
				 if($rowcount!=1)// found here
				 {
			echo '<script type="text/javascript"> window.location = "login.php"
              </script>';
				 }
				 else
				 {
					 $row=mysqli_fetch_assoc($query);
					 $company_name=$row["name_ar"];
					 $company_pic=$row["logo"];
					 $logo=$company_pic;
					 $company_id=$row["id"];
				 }
			 }
}

?>

<!DOCTYPE html>
<html>
   <head>
       <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>داليلي</title>
       <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/plugins/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet">
      <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">
      <link href="css/animate.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
      <link href="css/plugins/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet">
      <link href="css/plugins/cropper/cropper.min.css" rel="stylesheet">
      <link href="css/plugins/jasny/jasny-bootstrap.min.css" rel="stylesheet">
      <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
      <link href="css/plugins/summernote/summernote.css" rel="stylesheet">
      <link href="css/plugins/summernote/summernote-bs3.css" rel="stylesheet">
      <link href="css/plugins/jasny/jasny-bootstrap.min.css" rel="stylesheet">
      <!-- Sweet Alert -->
      <link href="css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
      <link href="css/animate.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Cairo:200,300,400,600,700" rel="stylesheet">
      <link rel="shortcut icon" type="img/png" href="img/icon.png" />
      <link href="css/style.css" rel="stylesheet">
      <link href='css/calender/fullcalendar.css' rel='stylesheet' />
      <link href='css/calender/fullcalendar.print.css' rel='stylesheet' media='print' />
      <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
     
   </head>
   <body class="rtls">
      <div id="wrapper">
         <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
               <ul class="nav metismenu" id="side-menu">
                  <li class="nav-header">
                     <div class="dropdown profile-element">
                        <span>
                        <img alt="image" class="img-circle center-block" src="<?php echo "../Dalily_admin/".$company_pic; ?>" style="max-width: 80px" />
                        </span>
                        <a data-toggle="dropdown" class="dropdown-toggle text-center" href="#">
                        <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $company_name; ?></strong>
                        </span> <span class="text-muted text-xs block"> <b class="caret"></b></span>  <small>الصفحة
الشخصية</small></span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                           <li><a href="setting.php">الملف الشخصى</a></li>
                           
                           <li class="divider"></li>
                           <li><a href="login.php">تسجيل خروج</a></li>
                        </ul>
                     </div>
                     <div class="logo-element">
                     </div>
                  </li>
                  <li class="index">
                     <a href="index.php"><i class="fas fa-home"></i> <span class="nav-label">الرئيسية </span> </a>
                  </li>
                  <li class="my_company">
                     <a href="my_company.php"><i class="fas fa-building"></i><span class="nav-label"> عن الشركة </span> </a>
                  </li>
                  
                  
                 
                 
                  <li class="mailbox">
                     <a href="mailbox.php"><i class="fas fa-envelope"></i><span class="nav-label">  الطلبات</span> </a>
                  </li>
            
                 
               </ul>
            </div>
         </nav>
         <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
               <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                  <div class="navbar-header">
                     <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fas fa-bars"></i></a>
                  </div>
                  <ul class="nav navbar-top-links navbar-right">
               
                       <li><a class="clk" >تسجيل خروج</a></li>
                  </ul>
               </nav>
            </div>
			 
			 
    <script src="js/jquery-2.1.1.js"></script>
     <script>
	
			$(document).ready(function() {
				
				$( ".clk" ).click(function(){
						
							
							
							 window.location = "api/del_token.php";
					
                         });
				
				
		$(".count-info").click(function(){
		
			
			$.ajax({
									type:'GET',
									url:'api/read_msg.php',
									success:function(result){
                                       
									   }// end success
									});
			
		});
	
	 });
				 
			 </script>



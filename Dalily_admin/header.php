<?php require_once('db_config.php'); 


if(!isset($_SESSION['dalily_token']))
{
	echo '<script type="text/javascript"> window.location = "login.php"
    </script>';

}


$token=$_SESSION['dalily_token'];
 $sql="SELECT * FROM `admin` WHERE `dalily_token`='$token'";

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
					 $admin_name=$row["name"];
					 $admin_pic=$row["img"];
					 $admin_id=$row["id"];
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
                        <img alt="image" class="img-circle center-block" src="<?php echo $admin_pic; ?>" style="max-width: 80px" />
                        </span>
                        <a data-toggle="dropdown" class="dropdown-toggle text-center" href="#">
                        <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $admin_name; ?></strong>
                        </span> <span class="text-muted text-xs block">  اعدادات <b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                           <li><a href="setting.php">الملف الشخصى</a></li>
                           
                           <li class="divider"></li>
                            <li><a class="clk" >تسجيل خروج</a></li>
                        </ul>
                     </div>
                     <div class="logo-element">
                     </div>
                  </li>
                  <li class="index">
                     <a href="index.php"><i class="fas fa-home"></i> <span class="nav-label">الرئيسية </span> </a>
                  </li>
                  <li class="business_added">
                     <a href="business_added.php"><i class="fab fa-codepen"></i><span class="nav-label"> الأعمال المضافة </span> </a>
                  </li>
                  <li class="create_company">
                     <a href="create_company.php"><i class="far fa-money-bill-alt"></i><span class="nav-label"> أنشئ بطاقة الأعمال  </span> </a>
                  </li>
                  
                  
                 
                  <li class="jobs">
                     <a href="jobs.php"><i class="fas fa-sun"></i> <span class="nav-label">وظائف</span></a>
                  </li>
                  <li class="department">
                     <a href="department.php"><i class="fas fa-th-large"></i><span class="nav-label">التصنيفات</span> </a>
                  </li>
                  <li class="areas">
                     <a href="areas.php"><i class="fas fa-building"></i><span class="nav-label"> المناطق</span></a>
                  </li>
                 
                  <li class="mailbox">
                     <a href="mailbox.php"><i class="fas fa-envelope"></i><span class="nav-label">  الرسائل</span> </a>
                  </li>
                  <li class="subscribe">
                     <a href="subscribe.php"><i class="fas fa-building"></i><span class="nav-label"> الاشتراك</span></a>
                  </li>
                 <li class="advertising">
                     <a href="advertising.php"><i class="fas fa-crosshairs"></i> <span class="nav-label"> الاعلانات</span> </a>
                  </li>
                  <li class="contact_us">
                     <a href="contact_us.php"><i class="fas fa-phone-square"></i> <span class="nav-label"> إتصل بنا</span> </a>
                  </li>
                  <li class="terms">
                     <a href="terms.php"><i class="fas fa-gavel"></i> <span class="nav-label"> الشروط والاحكام</span> </a>
                  </li>
                   <li class="privacy-policy">
                     <a href="privacy-policy.php"><i class="fa fa-gavel"></i> <span class="nav-label">سياسة الخصوصية</span> </a>
                  </li>
                    <li class="meta">
                     <a href="meta.php"><i class="fa fa-key"></i> <span class="nav-label"> الكلمات المفتاحية</span> </a>
                  </li>

                   
<li class="slogan_page">
                     <a href="slogan.php"><i class="fa fa-tags"></i> <span class="nav-label">الشعار slogan   </span> </a>
                  </li>

             <li class="title">
                     <a href="title.php"><i class="fa fa-image"></i> <span class="nav-label">  Title & icon </span> </a>
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
                     <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                       
                         	<?php 
			$sql2= "SELECT COUNT(*) AS count_it FROM  `messages` WHERE readed='0' ";
$query2=mysqli_query($con,$sql2);
$count_it=0;
 if($query2) 
 {

	$row2=mysqli_fetch_assoc($query2);
	
	      $count_it=$row2["count_it"];	
		
	
 }
							?>
							
                        <i class="fa fa-envelope"></i>  <span class="label label-warning"><?php echo $count_it; ?></span>
                        </a>
                        <ul id="mymsg" class="dropdown-menu  dropdown-messages" style="overflow-y:scroll; max-height:400px">
							
                              <?php 
							
			
			$sql= "SELECT id,name , title ,time FROM  `messages` WHERE readed='0'";
$query=mysqli_query($con,$sql);

 if($query) 
 {

	while($row=mysqli_fetch_assoc($query))
	{
	      $id=$row["id"];
	      $name=$row["name"];	
		  $title=$row["title"];  
          $date=$row["time"];
		
			  $timestamp = strtotime($date);
             $date  = date('d-m-Y - h:i a', $timestamp);
		
		
		

			?>
                          
                           <li>
							    <a href="<?php echo "mail_detail.php?id=".$id; ?>">
                              <div class="dropdown-messages-box">
                                 <div class="media-body">
                                   
                                    <strong><?php echo $name; ?> </strong> <br/> <?php echo $title; ?><br/>
                                    <small class="text-muted"><?php echo $date; ?></small>
                                   
                                 </div>
                              </div>
									 </a>
                           </li>
							   
                           <li class="divider"></li>
							
		 <?php 
	
	}
 }
		?>
						
                           <li>
                              <div class="text-center link-block">
                                 <a href="mailbox.php">
                                 <i class="fa fa-envelope"></i> <strong> قراءة كل الرسائل</strong>
                                 </a>
                              </div>
                           </li>	
                        </ul>
                     </li>
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



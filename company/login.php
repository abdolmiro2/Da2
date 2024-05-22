<?php require_once('db_config.php'); ?>
<script src="js/jquery-2.1.1.js"></script>

<?php 

function generate_unique_random($table , $con)
{
		
	
		$unique=0;
		
		while($unique==0)
		{
			
		
		
			$length = 40;
			$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$charactersLength = strlen($characters);
			$randomString = '';
			for ($i = 0; $i < $length; $i++) {
				$randomString .= $characters[rand(0, $charactersLength - 1)];
			}

		
			 $sql="SELECT * FROM `$table` WHERE `company_token`='$randomString'";

				$query=mysqli_query($con,$sql);


				if($query) // will return true if succefull else it will return false
				 {

					 $rowcount=mysqli_num_rows($query);
					 if($rowcount==0)// found here
					 {

						 $unique=1;
					 }
				}
		}
	
    return $randomString;
  }



if(isset($_POST["username1"]))
         {
			$username= $_POST["username1"];
			$password= $_POST["password1"];
	
			
            //$password = md5($password );
			
            $sql="SELECT * FROM `company` WHERE `username`='$username'";

			$query=mysqli_query($con,$sql);


			if($query) // will return true if succefull else it will return false
			 {
				
            
				$rowcount =mysqli_num_rows($query);
				
				 if($rowcount>=1)// found here
				 {
					
					 
				    $sql2="SELECT * FROM `company` WHERE `username`='$username' AND `password`='$password'";

			$query2=mysqli_query($con,$sql2);


						if($query2) // will return true if succefull else it will return false
						 {


							 $rowcount2=mysqli_num_rows($query2);
							 if($rowcount2>=1)// found here
							 {
								
								  $token =  generate_unique_random("company",$con);
								 $_SESSION['company_token']=$token;
								
								 $sql = "UPDATE `company` SET `company_token`='$token' WHERE `username`='$username'";
								 $query=mysqli_query($con,$sql);
                                
                                 
                                 
                                 
                                 

										echo '<script type="text/javascript">
								   window.location = "index.php"
							  </script>';

							 }
							 else
							 {
								  ?>
						    
								   <script>

													 $(document).ready(function(){ 
												$( "<p style='color:red'>خطأ في كلمة المرور</p>" ).insertAfter( ".pass" );
													
														 });
									</script>
												   <?php 
							 }
						 }
				 }
				 else 
				 { 
					 ?>
     
<script>
	
                     $(document).ready(function(){ 
						$( "<p style='color:red'>خطاً في اسم الدخول</p>" ).insertAfter( ".user" );
                         });
	</script>
                   <?php 
				 }
			 }
		 
         }

 ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>دليلى</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" type="img/png" href="img/icon.png" />

</head>

<body style="background: url(img/503421060.png); background-size: cover;
background-repeat: no-repeat;">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div class="login" style="direction: rtl;">
            
            <h3>مرحباً بك في دادليلي </h3>
            
           <p>الرجاء تسجيل الدخول للتحكم في بيانات شركتك</p>
      <form class="m-t" role="form" method="POST" action="login.php">
                <div class="form-group">
                    <input type="text" class="form-control  user" style="color:black" name="username1" placeholder="اسم المستخدم " required="">
                </div>
                <div class="form-group">
                    <input type="password" style="color:black" class="form-control pass" name="password1" placeholder="كلمة المرور" required="">
                </div>

                <button type="submit" class="btn btn-primary block full-width m-b">تسجيل</button>
                
                

            </form>

 
            <p class="m-t"> جميع الحقوق محفوظه &copy; 2017</p>
        </div>




    </div>
 

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

<?php require_once('../db_config.php');
$res=array();
if($_SERVER['REQUEST_METHOD'] === 'GET')
   { 


	   if(isset($_GET["email"]) && isset($_GET["phone"]) )
	   {
		   									

	 
	       
		   
		   $email=$_GET["email"];
		   $email= trim($email);
		   $email= stripslashes($email);
		   $email= htmlspecialchars($email);
		   
		   $phone=$_GET["phone"];
		   $phone= trim($phone);
		   $phone= stripslashes($phone);
		   $phone= htmlspecialchars($phone);
		  
		   
           $sql="INSERT INTO  `participation` (email,phone) VALUES ('$email','$phone') ";
           $query=mysqli_query($con,$sql);
		   
		   if($query)
		   {
				$res["status"]= "0";
		   }
		   else
		   {
			    $res["status"]=  "400";
		   }
	    
		   
	   }
	
                 

		
	
			
    }

else 
{
	
	// call 404 not found
}

		echo json_encode($res);
	  mysqli_close($con);

?>
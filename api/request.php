<?php require_once('../db_config.php');
$res=array();
if($_SERVER['REQUEST_METHOD'] === 'POST')
   { 


	   if(isset($_POST["email"]))
	   {
		   									

	 
	       
		   
		   $name=$_POST["name"];
		   $name= trim($name);
		   $name= stripslashes($name);
		   $name= htmlspecialchars($name);
		   
		   $email=$_POST["email"];
		   $email= trim($email);
		   $email= stripslashes($email);
		   $email= htmlspecialchars($email);
		  
		   $phone=$_POST["phone"];
		   $phone= trim($phone);
		   $phone= stripslashes($phone);
		   $phone= htmlspecialchars($phone);
		   
		
		   
		   $msg=$_POST["msg"];
		   $msg= trim($msg);
		   $msg= stripslashes($msg);
		   $msg= htmlspecialchars($msg);
		   
		   $id=$_POST["id"];
		   $id= trim($id);
		   $id= stripslashes($id);
		   $id= htmlspecialchars($id);
	
		   
           $sql="INSERT INTO  `request_service` (name,email,phone,msg,company_id,time) VALUES ('$name','$email','$phone','$msg','$id','$now') ";
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
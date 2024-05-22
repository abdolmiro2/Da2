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
		   
		   $title=$_POST["title"];
		   $title= trim($title);
		   $title= stripslashes($title);
		   $title= htmlspecialchars($title);
		   
		   $msg=$_POST["msg"];
		   $msg= trim($msg);
		   $msg= stripslashes($msg);
		   $msg= htmlspecialchars($msg);
		   
		   
	
		   
           $sql="INSERT INTO  `messages` (name,email,phone,title,msg,time) VALUES ('$name','$email','$phone','$title','$msg','$now') ";
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
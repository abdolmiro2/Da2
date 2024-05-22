<?php require_once('../db_config.php');
$res=array();
if($_SERVER['REQUEST_METHOD'] === 'POST')
   { 


	   if(isset($_POST["company_name"]))
	   {
		   									

	 
	       
		   
		   $company_name=$_POST["company_name"];
		   $company_name= trim($company_name);
		   $company_name= stripslashes($company_name);
		   $company_name= htmlspecialchars($company_name);
		   
		   $person_name=$_POST["person_name"];
		   $person_name= trim($person_name);
		   $person_name= stripslashes($person_name);
		   $person_name= htmlspecialchars($person_name);
		  
		   $job_name=$_POST["job_name"];
		   $job_name= trim($job_name);
		   $job_name= stripslashes($job_name);
		   $job_name= htmlspecialchars($job_name);
		   
		   $mobile_number=$_POST["mobile_number"];
		   $mobile_number= trim($mobile_number);
		   $mobile_number= stripslashes($mobile_number);
		   $mobile_number= htmlspecialchars($mobile_number);
		   
		   $phone_number=$_POST["phone_number"];
		   $phone_number= trim($phone_number);
		   $phone_number= stripslashes($phone_number);
		   $phone_number= htmlspecialchars($phone_number);
		   
		   
		     
		   $email=$_POST["email"];
		   $email= trim($email);
		   $email= stripslashes($email);
		   $email= htmlspecialchars($email);
		   
		     
		   $fax_number=$_POST["fax_number"];
		   $fax_number= trim($fax_number);
		   $fax_number= stripslashes($fax_number);
		   $fax_number= htmlspecialchars($fax_number);
		   
		     
		   $area_id=$_POST["area_id"];
		   $area_id= trim($area_id);
		   $area_id= stripslashes($area_id);
		   $area_id= htmlspecialchars($area_id);
		   
		     
		   $category_id=$_POST["category_id"];
		   $category_id= trim($category_id);
		   $category_id= stripslashes($category_id);
		   $category_id= htmlspecialchars($category_id);
		     
		   $notes=$_POST["notes"];
		   $notes= trim($notes);
		   $notes= stripslashes($notes);
		   $notes= htmlspecialchars($notes);
		     
		  
	
		   
           $sql="INSERT INTO  `add_requests` (company_name,person_name,job_name,mobile_number,phone_number,`e-mail`,fax_number,area_id,category_id,notes,time) VALUES ('$company_name','$person_name','$job_name','$mobile_number','$phone_number','$email','$fax_number','$area_id','$category_id','$notes','$now') ";
           $query=mysqli_query($con,$sql);
		   
		   if($query)
		   {
				$res["status"]= "0";
		   }
		   else
		   {
			    $res["status"]=  "400";
		   }
	    echo mysqli_error($con);
		   
	   }
	
                 

		
	
			
    }

else 
{
	
	// call 404 not found
}

		echo json_encode($res);
	  mysqli_close($con);

?>
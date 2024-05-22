<?php require_once('../db_config.php');
$res=array();
if($_SERVER['REQUEST_METHOD'] === 'GET')
   { 


	   if(isset($_GET["id"]))
	   {
		   									

	 
	       $id=$_GET["id"];
		   
		    $video=$_GET["video"];
		
		  

			   
			   
				   $sql="UPDATE `company_videos` SET video='$video' WHERE id='$id'";
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
<?php require_once('../db_config.php');
$res=array();
if($_SERVER['REQUEST_METHOD'] === 'GET')
   { 


	   if(isset($_GET["id"]))
	   {
		   									

	 
	       $id=$_GET["id"];
		   
		   $sql= "SELECT * FROM  `company_pics` WHERE id='$id'";
$query=mysqli_query($con,$sql);

 if($query) 
 {

	$row=mysqli_fetch_assoc($query);
     $img=	$row["img"];

			if(file_exists("../".$img) )
              unlink("../".$img);
 }
	
		  
           $sql="DELETE FROM  `company_pics` WHERE id='$id'";
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
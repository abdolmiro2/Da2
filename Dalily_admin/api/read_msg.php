<?php require_once('../db_config.php');
if($_SERVER['REQUEST_METHOD'] === 'GET')
   { 
            
  

	
	  
	  
		
		 $sql="UPDATE  `messages` SET  readed='1' WHERE readed='0'";

                    $query=mysqli_query($con,$sql);

                

	
		 
		   	
		   
	  

	      mysqli_close($con);
	
			
    }

else 
{
	
	// call 404 not found
}
		
	

?>
<?php require_once('../db_config.php');
if($_SERVER['REQUEST_METHOD'] === 'POST')
   { 
            
  
	
	
	   if(isset($_POST["name"]) )
	   {
		   
	        $name=$_POST["name"];
		    $name= trim($name);
		$name= stripslashes($name);
		$name= htmlspecialchars($name);
		   
	   $name_ar=$_POST["name_ar"];
		    $name_ar= trim($name_ar);
		$name_ar= stripslashes($name_ar);
		$name_ar= htmlspecialchars($name_ar);
		   
      
                  
                     $sql="INSERT INTO `category` (name,name_ar) VALUES ('$name','$name_ar')";

                    $query=mysqli_query($con,$sql);

                      

		   
		   
		   
	
		   	
		   
	   }
	

		echo '<script type="text/javascript">
                    window.location = "../department.php"
                    </script>';
		   
	      mysqli_close($con);
	
			
    }

else 
{
	
	// call 404 not found
}
		
	

?>
<?php require_once('../db_config.php');
if($_SERVER['REQUEST_METHOD'] === 'POST')
   { 

	
	
	   if(  (isset($_POST['id'])&&  !($_FILES['img']['size'] == 0 && $_FILES['img']['error'] == 4  && $_FILES['img']['name'] == "")))
	   {
		
		$id= $_POST['id'];
	
		          
             $img="../../img/_logo.png";
				
                    if(move_uploaded_file($_FILES['img']['tmp_name'],$img ))
                    {   
					
						
					$img="img/_logo.png";
						
						
                     $sql="update `info` SET img='$img' WHERE id='$id'";

                    $query=mysqli_query($con,$sql);


                    }
			
                  
            
	
       
		   
		   
		   
	
		   
	   }
	
	
	   	echo '<script type="text/javascript">
                    window.location = "../slogan.php"
                    </script>';
		   
	 
		echo mysqli_error($con);
	   mysqli_close($con);
			
}

		
	

?>
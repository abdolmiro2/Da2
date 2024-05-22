<?php require_once('../db_config.php');
if($_SERVER['REQUEST_METHOD'] === 'POST')
   { 

	
	
	   if( isset($_POST['name']  ) && isset($_POST['password1'] ) && (isset($_POST['id'])&&  !($_FILES['img']['size'] == 0 && $_FILES['img']['error'] == 4  && $_FILES['img']['name'] == "")))
	   {
		 
		$id= $_POST['id'];
	   $username= $_POST['username'];
	$name= $_POST['name'];
	$password= $_POST['password1'];
	$password=md5($password);

        
		    $pic_name= generate_random();
		    
		    $string = str_replace(' ', '', $_FILES['img']['name']);
		    $ext = pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION);
       
		    if($ext=="jpg" || $ext=="jpeg" || $ext=="gif" || $ext=="bmp" || $ext=="png" || $ext=="icon")
            {
                      $pic="../uploads/".$pic_name.$string;
                        $db_pic="uploads/".$pic_name.$string;
             
                    if(move_uploaded_file($_FILES['img']['tmp_name'], $pic))
                    {   
					
						
						$sql= "SELECT  img FROM  `admin` WHERE id='$id' ";
					$query=mysqli_query($con,$sql);
				
					 if($query) 
					 {

						$row=mysqli_fetch_assoc($query);
						 $img=$row["img"];
						 
						 
						if(file_exists("../".$img) )
						unlink("../".$img);
					 }

						
						
                     $sql="update `admin` SET name='$name',username='$username',password='$password',img='$db_pic' WHERE id='$id'";

                    $query=mysqli_query($con,$sql);

               
						

                    }
                  
            }
	
       
		   
		   
		   
	
		   
	   }
	
	
	else if(  isset($_POST['name']  ) && isset($_POST['password1'] ) && isset($_POST['id']) )
	   {
		 
		$id= $_POST['id'];
		   $username= $_POST['username'];
	$name= $_POST['name'];
	$password= $_POST['password1'];
	$password=md5($password);
	
        
		    
						$sql= "SELECT  * FROM  `admin` WHERE id='$id' ";
					$query=mysqli_query($con,$sql);
				
					 if($query) 
					 {

						$row=mysqli_fetch_assoc($query);
						 $img=$row["img"];
						 
						
					 }

						
						
                     $sql="update `admin` SET name='$name',username='$username',password='$password',img='$img' WHERE id='$id'";

                    $query=mysqli_query($con,$sql);

                  
					

         
		   
		   
		   
		
		   
	   }
	
          else
		  {
			 
			  echo "error";
		  }

	   	echo '<script type="text/javascript">
                    window.location = "../setting.php"
                    </script>';
		   
	 
		echo mysqli_error($con);
	   mysqli_close($con);
			
}

		
	

?>
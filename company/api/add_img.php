<?php require_once('../db_config.php');
if($_SERVER['REQUEST_METHOD'] === 'POST')
   { 



	
	if(!($_FILES['add_img']['size'] == 0 && $_FILES['add_img']['error'] == 4  && $_FILES['add_img']['name'] == ""))
	   {
		
		 
		        	          $id=$_POST["id"];
				  
		  
	
        
		    $pic_name= generate_random();
		   
		    $string = str_replace(' ', '+', $_FILES['add_img']['name']);
		    $ext = pathinfo($_FILES['add_img']['name'], PATHINFO_EXTENSION);
            $ok=0;
		    if($ext=="jpg" || $ext=="jpeg" || $ext=="gif" || $ext=="bmp" || $ext=="png" || $ext=="icon")
            {
                      $pic="../../Dalily_admin/uploads/".$pic_name.$string;
                        $db_pic="uploads/".$pic_name.$string;
               
                    if(  move_uploaded_file($_FILES['add_img']['tmp_name'], $pic))
                    {   
						
						$sql="INSERT INTO  `company_pics`  (img ,company_id) VALUES ('$db_pic','$id')";
 						$query=mysqli_query($con,$sql);
             
					 }

					
			
        }
		
	  

	   }
	}
	   	echo '<script type="text/javascript">
                    window.location = "../my_company.php?type=gallery"
                    </script>';
		

	 mysqli_close($con);

?>
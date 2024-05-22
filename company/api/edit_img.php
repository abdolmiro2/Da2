<?php require_once('../db_config.php');
if($_SERVER['REQUEST_METHOD'] === 'POST')
   { 



	
	if(isset($_POST["id"]) && !($_FILES['img']['size'] == 0 && $_FILES['img']['error'] == 4  && $_FILES['img']['name'] == ""))
	   {
		
		 
		        	          $id=$_POST["id"];
				  
		  
	
        
		    $pic_name= generate_random();
		   
		    $string = str_replace(' ', '+', $_FILES['img']['name']);
		    $ext = pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION);
            $ok=0;
		    if($ext=="jpg" || $ext=="jpeg" || $ext=="gif" || $ext=="bmp" || $ext=="png" || $ext=="icon")
            {
                      $pic="../../Dalily_admin/uploads/".$pic_name.$string;
                        $db_pic="uploads/".$pic_name.$string;
               
                    if(  move_uploaded_file($_FILES['img']['tmp_name'], $pic))
                    {   
						
						$ok=1;
						
				    $sql= "SELECT  * FROM  `company_pics` WHERE id='$id'";
					$query=mysqli_query($con,$sql);
				
					 if($query) 
					 {

						$row=mysqli_fetch_assoc($query);
						 $img=$row["cover"];
                      if($img != "")
					  {
						if(file_exists("../../Dalily_admin/uploads/".$img) )
						unlink("../../Dalily_admin/uploads/".$img);
					  }
					 }

						
						
                    

                      

                    }
				else
				{
					$ok=0;
				}
                  
           }
		   else
		   {
			   $ok=0;
		   }
	
		   
		   
	
		   
	if($ok==1)
	{
		
		  $sql="update `company_pics` SET img='$db_pic' WHERE id='$id'";
 			$query=mysqli_query($con,$sql);
             
	}
		 
	     
		 
	    
		   
	   }
	
	
		   
			
    
		
	  	echo '<script type="text/javascript">
                    window.location = "../my_company.php?type=gallery"
                    </script>';
		
}
echo mysqli_error($con);
	 mysqli_close($con);

?>
<?php require_once('../db_config.php');
if($_SERVER['REQUEST_METHOD'] === 'POST')
   { 


	   if(isset($_POST["name"]) && !($_FILES['logo']['size'] == 0 && $_FILES['logo']['error'] == 4  && $_FILES['logo']['name'] == "")  && !($_FILES['cover']['size'] == 0 && $_FILES['cover']['error'] == 4  && $_FILES['cover']['name'] == ""))
	   { 
		           $id=$_POST["id"];
				   $category=$_POST["category"];
				   $area=$_POST["area"];
		           $name=$_POST["name"];
				   $name_ar=$_POST["name_ar"];
		           $descr=$_POST["descr"];
				   $desc_ar=$_POST["desc_ar"];
				   $phone=$_POST["phone"];
				   $mobile=$_POST["mobile"];
				   $address=$_POST["address"];
				   $address_ar=$_POST["address_ar"];
				   $email=$_POST["email"];
				   $website=$_POST["website"];
				   $owner_name=$_POST["owner_name"];
		   		   $map=$_POST["map"];
			
					$fb=$_POST["fb"];
					$ins=$_POST["ins"];
					$tw=$_POST["tw"];
					$sn=$_POST["sn"];
		  
	     $map= trim($map);
		   $map= stripslashes($map);
		   $map= htmlspecialchars($map);
		   $map = mysqli_real_escape_string($con,$map);
	   
        
		    $pic_name= generate_random();
		   
		    $string = str_replace(' ', '+', $_FILES['logo']['name']);
		    $ext = pathinfo($_FILES['logo']['name'], PATHINFO_EXTENSION);
            $ok=0;
		    if($ext=="jpg" || $ext=="jpeg" || $ext=="gif" || $ext=="bmp" || $ext=="png" || $ext=="icon")
            {
                      $pic="../../Dalily_admin/uploads/".$pic_name.$string;
                        $db_pic="uploads/".$pic_name.$string;
               
                    if(  move_uploaded_file($_FILES['logo']['tmp_name'], $pic))
                    {   
						
						$ok=1;
						
				    $sql= "SELECT  * FROM  `company` WHERE id='$id'";
					$query=mysqli_query($con,$sql);
				
					 if($query) 
					 {

						$row=mysqli_fetch_assoc($query);
						 $img=$row["logo"];
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
	
		   
		   
		    $pic_name= generate_random();
		   
		    $string = str_replace(' ', '+', $_FILES['cover']['name']);
		    $ext = pathinfo($_FILES['cover']['name'], PATHINFO_EXTENSION);
           
		    if($ext=="jpg" || $ext=="jpeg" || $ext=="gif" || $ext=="bmp" || $ext=="png" || $ext=="icon")
            {
                      $pic="../../Dalily_admin/uploads/".$pic_name.$string;
                        $db_pic2="uploads/".$pic_name.$string;
               
                    if(  move_uploaded_file($_FILES['cover']['tmp_name'], $pic))
                    {   
						
						
						$ok=1;
				    $sql= "SELECT  * FROM  `company` WHERE id='$id'";
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
		
		  $sql="update `company` SET category='$category',area='$area',name='$name',name_ar='$name_ar',descr='$descr',desc_ar='$desc_ar',phone='$phone',mobile='$mobile',address='$address',email='$email',address_ar='$address_ar',website='$website',owner_name='$owner_name',fb='$fb',ins='$ins',tw='$tw',sn='$sn',logo='$db_pic',cover='$db_pic2',map='$map' WHERE id='$id'";

                    $query=mysqli_query($con,$sql);
	}
		 
	     
		   
	   }
	
	
	   else if(isset($_POST["name"]) && !($_FILES['logo']['size'] == 0 && $_FILES['logo']['error'] == 4  && $_FILES['logo']['name'] == "") )
	   {
		          $id=$_POST["id"];
				   $category=$_POST["category"];
				   $area=$_POST["area"];
		           $name=$_POST["name"];
				   $name_ar=$_POST["name_ar"];
		           $descr=$_POST["descr"];
				   $desc_ar=$_POST["desc_ar"];
				   $phone=$_POST["phone"];
				   $mobile=$_POST["mobile"];
				   $address=$_POST["address"];
				   $address_ar=$_POST["address_ar"];
				   $email=$_POST["email"];
				   $website=$_POST["website"];
				   $owner_name=$_POST["owner_name"];
		   		   $map=$_POST["map"];
			
					$fb=$_POST["fb"];
					$ins=$_POST["ins"];
					$tw=$_POST["tw"];
					$sn=$_POST["sn"];
		  
	     $map= trim($map);
		   $map= stripslashes($map);
		   $map= htmlspecialchars($map);
		   $map = mysqli_real_escape_string($con,$map);
	   
        
		    $pic_name= generate_random();
		   
		    $string = str_replace(' ', '+', $_FILES['logo']['name']);
		    $ext = pathinfo($_FILES['logo']['name'], PATHINFO_EXTENSION);
            $ok=0;
		    if($ext=="jpg" || $ext=="jpeg" || $ext=="gif" || $ext=="bmp" || $ext=="png" || $ext=="icon")
            {
                      $pic="../../Dalily_admin/uploads/".$pic_name.$string;
                        $db_pic="uploads/".$pic_name.$string;
               
                    if(  move_uploaded_file($_FILES['logo']['tmp_name'], $pic))
                    {   
						
						$ok=1;
						
				    $sql= "SELECT  * FROM  `company` WHERE id='$id'";
					$query=mysqli_query($con,$sql);
				
					 if($query) 
					 {

						$row=mysqli_fetch_assoc($query);
						 $img=$row["logo"];
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
		
		  $sql="update `company` SET category='$category',area='$area',name='$name',name_ar='$name_ar',descr='$descr',desc_ar='$desc_ar',phone='$phone',mobile='$mobile',address='$address',email='$email',address_ar='$address_ar',website='$website',owner_name='$owner_name',fb='$fb',ins='$ins',tw='$tw',sn='$sn',logo='$db_pic',map='$map' WHERE id='$id'";

                    $query=mysqli_query($con,$sql);
						 
					 
	}
		 
	     
		 
	     
		   
	   }
	
	 else if(isset($_POST["name"]) && !($_FILES['cover']['size'] == 0 && $_FILES['cover']['error'] == 4  && $_FILES['cover']['name'] == ""))
	   {
		
		 
		        	          $id=$_POST["id"];
				   $category=$_POST["category"];
				   $area=$_POST["area"];
		           $name=$_POST["name"];
				   $name_ar=$_POST["name_ar"];
		           $descr=$_POST["descr"];
				   $desc_ar=$_POST["desc_ar"];
				   $phone=$_POST["phone"];
				   $mobile=$_POST["mobile"];
				   $address=$_POST["address"];
				   $address_ar=$_POST["address_ar"];
				   $email=$_POST["email"];
				   $website=$_POST["website"];
				   $owner_name=$_POST["owner_name"];
		   		   $map=$_POST["map"];
			
					$fb=$_POST["fb"];
					$ins=$_POST["ins"];
					$tw=$_POST["tw"];
					$sn=$_POST["sn"];
		  
	     $map= trim($map);
		   $map= stripslashes($map);
		   $map= htmlspecialchars($map);
		   $map = mysqli_real_escape_string($con,$map);
	   
        
		    $pic_name= generate_random();
		   
		    $string = str_replace(' ', '+', $_FILES['cover']['name']);
		    $ext = pathinfo($_FILES['cover']['name'], PATHINFO_EXTENSION);
            $ok=0;
		    if($ext=="jpg" || $ext=="jpeg" || $ext=="gif" || $ext=="bmp" || $ext=="png" || $ext=="icon")
            {
                      $pic="../../Dalily_admin/uploads/".$pic_name.$string;
                        $db_pic="uploads/".$pic_name.$string;
               
                    if(  move_uploaded_file($_FILES['cover']['tmp_name'], $pic))
                    {   
						
						$ok=1;
						
				    $sql= "SELECT  * FROM  `company` WHERE id='$id'";
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
		
		  $sql="update `company` SET category='$category',area='$area',name='$name',name_ar='$name_ar',descr='$descr',desc_ar='$desc_ar',phone='$phone',mobile='$mobile',address='$address',email='$email',address_ar='$address_ar',website='$website',owner_name='$owner_name',fb='$fb',ins='$ins',tw='$tw',sn='$sn',cover='$db_pic',map='$map' WHERE id='$id'";
 			$query=mysqli_query($con,$sql);
                
	}
		 
	     
		 
	    
		   
	   }
	
	else if(isset($_POST["name"]))
	   {	 
		           $id=$_POST["id"];
				   $category=$_POST["category"];
				   $area=$_POST["area"];
		           $name=$_POST["name"];
				   $name_ar=$_POST["name_ar"];
		           $descr=$_POST["descr"];
				   $desc_ar=$_POST["desc_ar"];
				   $phone=$_POST["phone"];
				   $mobile=$_POST["mobile"];
				   $address=$_POST["address"];
				   $address_ar=$_POST["address_ar"];
				   $email=$_POST["email"];
				   $website=$_POST["website"];
				   $owner_name=$_POST["owner_name"];
		   		   $map=$_POST["map"];
			
					$fb=$_POST["fb"];
					$ins=$_POST["ins"];
					$tw=$_POST["tw"];
					$sn=$_POST["sn"];
		  
	
             $map= trim($map);
		   $map= stripslashes($map);
		   $map= htmlspecialchars($map);
		   $map = mysqli_real_escape_string($con,$map);
		
		
		  $sql="update `company` SET category='$category',area='$area',name='$name',name_ar='$name_ar',descr='$descr',desc_ar='$desc_ar',phone='$phone',mobile='$mobile',address='$address',email='$email',address_ar='$address_ar',website='$website',owner_name='$owner_name',fb='$fb',ins='$ins',tw='$tw',sn='$sn',map='$map' WHERE id='$id'";
		

       

                    $query=mysqli_query($con,$sql);
						 
					 
	
		 
	   
	    
	     
		   
	               }
	
          else
		  {	  
			  echo "error";
		  }

	
		  
    
		
	  	echo '<script type="text/javascript">
                    window.location = "../my_company.php?type=info"
                    </script>';
		
}
echo mysqli_error($con);
	 mysqli_close($con);

?>
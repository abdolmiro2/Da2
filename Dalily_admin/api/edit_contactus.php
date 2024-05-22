<?php require_once('../db_config.php'); 

$res=array();
if($_SERVER['REQUEST_METHOD'] === 'POST')
   { 

	   if(isset($_POST["id"]) && isset($_POST["fb"]) && isset($_POST["tw"]) && isset($_POST["ln"]) && isset($_POST["yt"]))
	   {
		   
		   $id=$_POST["id"];
		   
	       $fb=$_POST["fb"];
           $tw=$_POST["tw"];
		   
	       $ln=$_POST["ln"];
           $yt=$_POST["yt"];
		 
		     
	      
		   
		   	 
				   
					 $sql="UPDATE  `contactus` SET fb='$fb',tw='$tw',ln='$ln',yt='$yt'  WHERE id='$id'"; 

                           $query=mysqli_query($con,$sql);
								
								
						  if($query)
						  {
							
						  }
		   
						else
						{
							
						}



	   }
	
          else
		  {
			  echo "error";
		  }

		
    }

		   	echo '<script type="text/javascript">
                    window.location = "../contact_us.php"
                    </script>';

		
   	      mysqli_close($con);
		    

?>



<?php require_once('../db_config.php');

$res=array();
if($_SERVER['REQUEST_METHOD'] === 'POST')
   {

	   if(isset($_POST["id"]) && isset($_POST["slogan"]) && isset($_POST["slogan_ar"]))
	   {

		   $id=$_POST["id"];
		   $slogan=$_POST["slogan"];
             	   $slogan= trim($slogan);
       $slogan= stripslashes($slogan);
       $slogan= htmlspecialchars($slogan);
	   $slogan = mysqli_real_escape_string($con,$slogan);


	           $slogan_ar=$_POST["slogan_ar"];
    	   $slogan_ar= trim($slogan_ar);
       $slogan_ar= stripslashes($slogan_ar);
       $slogan_ar= htmlspecialchars($slogan_ar);
	   $slogan_ar = mysqli_real_escape_string($con,$slogan_ar);


					 $sql="UPDATE info SET slogan='$slogan', slogan_ar='$slogan_ar' WHERE id='$id';";

                           $query=mysqli_query($con,$sql);


						  if($query)
						  {
								$res["status"]= "1";
						  }

						else
						{
							$res["status"]=  "-1";
						}



	   }

          else
		  {
			  echo "error";
		  }


    }

  echo json_encode($res);
echo mysqli_error($con);
   	      mysqli_close($con);


?>

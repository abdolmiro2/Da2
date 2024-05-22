<?php require_once('../db_config.php');

$res=array();
if($_SERVER['REQUEST_METHOD'] === 'POST')
   {

	   if(isset($_POST["id"]) && isset($_POST["policy_ar"]) && isset($_POST["policy"]))
	   {

		   $id=$_POST["id"];
			 $policy_ar=$_POST["policy_ar"];
		   $policy=$_POST["policy"];







					 $sql="UPDATE  `privacy_policy` SET policy_ar='$policy_ar', policy='$policy' WHERE id='$id'";

                           $query=mysqli_query($con,$sql);


						  if($query)
						  {
								echo "1";
						  }

						else
						{
							echo "-1";
						}



	   }

          else
		  {
			  echo "error";
		  }


    }
//echo mysqli_error($con);

   	      mysqli_close($con);


?>

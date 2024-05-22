<?php require_once('../db_config.php');

$res=array();
if($_SERVER['REQUEST_METHOD'] === 'POST')
   {

	   if(isset($_POST["id"]) && isset($_POST["terms_ar"]) && isset($_POST["terms"]))
	   {

		   $id=$_POST["id"];
		   $terms_ar=$_POST["terms_ar"];
			 $terms=$_POST["terms"];







					 $sql="UPDATE terms  SET terms_ar='$terms_ar', terms='$terms' WHERE id='$id';";

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
echo mysqli_error($con);

   	      mysqli_close($con);


?>

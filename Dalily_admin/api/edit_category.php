<?php require_once('../db_config.php');

$res=array();
if($_SERVER['REQUEST_METHOD'] === 'POST')
   {

	   if(isset($_POST["id"]) && isset($_POST["name"]))
	   {
		  

		   $id=$_POST["id"];
		   $name=$_POST["name"];
		   $name_ar=$_POST["name_ar"];






					 $sql="UPDATE  `category` SET name='$name' , name_ar='$name_ar'  WHERE id='$id'";

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
                    window.location = "../department.php"
                    </script>';


   	      mysqli_close($con);


?>

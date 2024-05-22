<?php require_once('../db_config.php');

$res=array();
if($_SERVER['REQUEST_METHOD'] === 'POST')
   {

	   if(isset($_POST["id"]) && isset($_POST["desc"]) && isset($_POST["key"])&& isset($_POST["auth"]))
	   {

		   $id=$_POST["id"];
		   $desc=$_POST["desc"];
                $desc=strip_tags($desc);
			 $key=$_POST["key"];
    $key=strip_tags($key);
                   $auth=$_POST["auth"];

    $auth=strip_tags($auth);



					 $sql="UPDATE meta  SET description='$desc', keywords='$key', author='$auth' WHERE id='$id';";

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
   	      mysqli_close($con);


?>

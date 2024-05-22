<?php require_once('../db_config.php');

$res=array();
if($_SERVER['REQUEST_METHOD'] === 'POST')
   {

	   if(isset($_POST["id"]) && isset($_POST["title"]) && isset($_POST["title_ar"]))
	   {

		   $id=$_POST["id"];
		   $title=$_POST["title"];
             	   $title= trim($title);
       $title= stripslashes($title);
       $title= htmlspecialchars($title);
	   $title= mysqli_real_escape_string($con,$title);
$title=strip_tags($title);

	           $title_ar=$_POST["title_ar"];
    	   $title_ar= trim($title_ar);
       $title_ar= stripslashes($title_ar);
       $title_ar= htmlspecialchars($title_ar);
	   $title_ar= mysqli_real_escape_string($con,$title_ar);
$title_ar=strip_tags($title_ar);


$title= preg_replace('/(&lt;.+?&gt;)/', '', $title);
$title_ar= preg_replace('/(&lt;.+?&gt;)/', '', $title_ar);

					 $sql="UPDATE info SET title_ar='$title_ar', title='$title' WHERE id='$id';";

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

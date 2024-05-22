<?php require_once('../db_config.php');
if($_SERVER['REQUEST_METHOD'] === 'POST')
   {




	   if(isset($_POST["job_title_ar"]) && isset($_POST["job_title"]) && isset($_POST["email_ar"]) && isset($_POST["email"]) && isset($_POST["area"])
      && isset($_POST["job_description_ar"]) && isset($_POST["job_description"]))
	   {

	        $job_title=$_POST["job_title"];
					$job_title_ar=$_POST["job_title_ar"];
					$email=$_POST["email"];
					$email_ar=$_POST["email_ar"];
					$area=$_POST["area"];
					$job_description=$_POST["job_description"];
					$job_description_ar=$_POST["job_description_ar"];
					//echo mysqli_error($con);




         $sql="INSERT INTO `jobs` (job_title, job_title_ar, email, email_ar, area_id, job_description, job_description_ar)"
				  . " VALUES ('$job_title','$job_title_ar', '$email', '$email_ar', '$area', '$job_description', '$job_description_ar')";

         $query=mysqli_query($con,$sql);

	   }


		echo '<script type="text/javascript">
                    window.location = "../jobs.php"
                    </script>';

	      mysqli_close($con);


    }

else
{
	//error
	echo mysqli_error($con);
}



?>

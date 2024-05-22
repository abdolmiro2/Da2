<?php require_once('../db_config.php');
if($_SERVER['REQUEST_METHOD'] === 'POST')
   {



	   if( isset($_POST['id']) &&  !($_FILES['image']['size'] == 0 && $_FILES['image']['error'] == 4  && $_FILES['image']['name'] == ""))
	   {

		$id= $_POST['id'];
	


		    $pic_name= generate_random();

		    $string = str_replace(' ', '', $_FILES['image']['name']);
		    $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

		    if($ext=="jpg" || $ext=="jpeg" || $ext=="gif" || $ext=="bmp" || $ext=="png" || $ext=="icon")
            {
                      $pic="../uploads/".$pic_name.$string;
                        $db_pic="uploads/".$pic_name.$string;

                    if(move_uploaded_file($_FILES['image']['tmp_name'], $pic))
                    {

						  //echo $pic;

						$sql= "SELECT  path FROM  `adv_images` WHERE id='$id' ";
					$query=mysqli_query($con,$sql);

					 if($query)
					 {

						$row=mysqli_fetch_assoc($query);
						 $image=$row["path"];


						if(file_exists("../".$image) )
						unlink("../".$image);
					 }



                     $sql="update `adv_images` SET path='$db_pic' WHERE id='$id'";

                    $query=mysqli_query($con,$sql);


						echo mysqli_error($con);

                    }

            }







	   }



          else
		  {

			  echo "error";
		  }

	   	echo '<script type="text/javascript">
                    window.location = "../advertising.php"
                    </script>';


		echo mysqli_error($con);
	   mysqli_close($con);

}




?>

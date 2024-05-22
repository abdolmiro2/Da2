<?php require_once('../db_config.php');

$res=array();
if($_SERVER['REQUEST_METHOD'] === 'GET')
   {

	   if(isset($_GET["name"]) && isset($_GET["category"]) && isset($_GET["area"]) && isset($_GET["type"])&& isset($_GET["username"])&& isset($_GET["password"]))
	   {

	       $name=$_GET["name"];
           $category=$_GET["category"];

	       $area=$_GET["area"];
           $type=$_GET["type"];


	       $username=$_GET["username"];
           $password1=$_GET["password"];



				    $sql2="SELECT * FROM `company` WHERE `username`='$username'";
		         	$query2=mysqli_query($con,$sql2);


						if($query2) // will return true if succefull else it will return false
						 {


							 $rowcount2=mysqli_num_rows($query2);
							 if($rowcount2 !=0)// found here
							 {
								 $res["status"]= "-1";
							 }

							else
							{
								     $sql="INSERT INTO `company`(name_ar,username,password,category,area,type) VALUES ('$name','$username','$password1','$category','$area','$type')";

                                       $query=mysqli_query($con,$sql);
                             

								  if(!$query)
								  {
									    $res["status"]=  "400";
									  //error
								  }
								else
								{
									$res["status"]= "0";
								}


							}
						 }















	   }

          else
		  {
			   $res["status"]=  "400";

		  }


    }

  echo json_encode($res);

   	      mysqli_close($con);


?>

<?php session_start();



if(isset($_GET["id"]))
{
	 $_SESSION['admin_dalily_access']="true";
$_SESSION['company_id']=$_GET["id"];
	
 	echo '<script type="text/javascript">
    
            window.location = "../../company/index.php";

                    </script>';
}









?>
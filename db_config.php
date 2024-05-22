<?php  session_start();
$con=mysqli_connect("localhost","dadalily_Dadmin","fsd43DSAF3daje%jD","dadalily_dadalily_db");
//$con=mysqli_connect("localhost","root","Xwady2017#","Dalily");
$sSQL= 'SET CHARACTER SET utf8'; 

mysqli_query($con,$sSQL);
	
echo mysqli_connect_error();


$tz = 'Africa/Khartoum';
$timestamp = time();
$dt = new DateTime("now", new DateTimeZone($tz));
$dt->setTimestamp($timestamp); //adjust the object to correct timestamp
$time= $dt->format('Y-m-d H:i:s');
$now=$time;





	function generate_color($length = 6) {
    $characters = '0123456789ABCDEF';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return "#".$randomString;
   }


function generate_random($length = 20) {
    $characters = '0123456789sadaffgfde';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
	

	
   }



?>

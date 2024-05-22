<?php 



  $sql="SELECT *  FROM `contactus` LIMIT 1 OFFSET 0";
           $query=mysqli_query($con,$sql);
		   
		   if($query)
		   {
			   $row=mysqli_fetch_assoc($query);
			   $fb=$row["fb"];
			   $tw=$row["tw"];
			   $ln=$row["ln"];
			   $yt=$row["yt"];
			   
		   }




if($lang=="ar")

{
	?>
	
     <!-- contact us -->
      <footer id="footer" >
         <div class="container">
            <div class="row m-t-10 m-b-10 text-center">
               <div class="col-md-2 col-md-offset-5">
                  <img src="img/_logo.png" class="img-responsive">
               </div>
               <div class="col-md-12 m-t-10 text-center ">
                  <ul class="list-inline m-t-10 text-center">
                     <li class="active list-inline-item"><a class="page-scroll" href="index.php">الرئيسية</a></li>
                     <li class="list-inline-item"><a class="page-scroll" href="creat-card.php">أنشئ بطاقة </a></li>
                     <li class="list-inline-item"><a class="page-scroll" href="contact.php">التواصل </a></li>
                     <li class="list-inline-item"><a class="page-scroll" href="jobs.php">وظائف </a></li>
                     <li class="list-inline-item"><a class="page-scroll" href="terms.php">الشروط و الأحكام </a></li>
                     <li class="list-inline-item"><a class="page-scroll" href="privacy-policy.php">سياسة الخصوصية</a></li>
                   
                  </ul>
                  <p class="m-t-20 text-center"> 2017 All Rights Reserved ©</p>
               </div>
               <div class="col-md-12 m-t-10">
                  <ul class="list-inline m-t-10 social">
                     <li class="active list-inline-item"><a class="page-scroll" href="<?php echo $yt; ?>" target="_blank"> <i class="fa fa-youtube-play" aria-hidden="true"></i> </a></li>
                     <li class="active list-inline-item"><a class="page-scroll" href="<?php echo $ln; ?>" target="_blank"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a></li>
                     <li class="active list-inline-item"><a class="page-scroll" href="<?php echo $tw; ?>" target="_blank"> <i class="fa fa-twitter" aria-hidden="true"></i> </a></li>
                     <li class="active list-inline-item"><a class="page-scroll" href="<?php echo $fb; ?>" target="_blank"> <i class="fa fa-facebook" aria-hidden="true"></i> </a></li>
                  </ul>
               </div>
            </div>
         </div>
      </footer>
 

      <?php 
		  
		  
	
}
else if ( $lang=="en")
{
	?>
     
<!-- contact us -->
      <footer id="footer" >
         <div class="container">
            <div class="row m-t-10 m-b-10 text-center">
               <div class="col-md-2 col-md-offset-5">
                  <img src="img/_logo.png" class="img-responsive">
               </div>
               <div class="col-md-12 m-t-10 text-center ">
                  <ul class="list-inline m-t-10 text-center">
                     <li class="active list-inline-item"><a class="page-scroll" href="index.php">Home</a></li>
                     <li class="list-inline-item"><a class="page-scroll" href="creat-card.php"> Create Your BC </a></li>
                     <li class="list-inline-item"><a class="page-scroll" href="contact.php">Contact </a></li>
                     <li class="list-inline-item"><a class="page-scroll" href="jobs.php">Jobs </a></li>
                     <li class="list-inline-item"><a class="page-scroll" href="terms.php">Terms & Conditions </a></li>
                     <li class="list-inline-item"><a class="page-scroll" href="privacy-policy.php">Privacy Policy</a></li>
                   
                  </ul>
                  <p class="m-t-20 text-center"> 2017 All Rights Reserved ©</p>
               </div>
               <div class="col-md-12 m-t-10">
                  <ul class="list-inline m-t-10 social">
                     <li class="active list-inline-item"><a class="page-scroll" href="<?php echo $yt; ?>" target="_blank"> <i class="fa fa-youtube-play" aria-hidden="true"></i> </a></li>
					      <li class="active list-inline-item"><a class="page-scroll" href="<?php echo $tw; ?>" target="_blank"> <i class="fa fa-twitter" aria-hidden="true"></i> </a></li>
                     <li class="active list-inline-item"><a class="page-scroll" href="<?php echo $ln; ?>" target="_blank"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a></li>
                 
                     <li class="active list-inline-item"><a class="page-scroll" href="<?php echo $fb; ?>" target="_blank"> <i class="fa fa-facebook" aria-hidden="true"></i> </a></li>
                  </ul>
               </div>
            </div>
         </div>
      </footer>
<?php
	
}
?>


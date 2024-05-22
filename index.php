<?php require_once('db_config.php');
     $ok=0;
	   if(! isset($_GET["area"]) || ! isset($_GET["category"]) || ! isset($_GET["text"]))
	   {

          $ok=1;
	   }
				
                                          
                                          
if(isset($_GET["lang"]))
{
   $lang=$_GET["lang"];
   $lang= trim($lang);
   $lang= stripslashes($lang);
   $lang= htmlspecialchars($lang);
   $lang = mysqli_real_escape_string($con,$lang);

	if($lang != "ar" && $lang != "en")
	{
		$lang="ar";
	}


}
else
{
	$lang="ar";
}


// increase visitors


  $sql="SELECT *  FROM `info` LIMIT 1 OFFSET 0";
           $query=mysqli_query($con,$sql);

		   if($query)
		   {
			   $row=mysqli_fetch_assoc($query);
			   $id=$row["id"];

                           $title=$row["title"];
                           $title_ar=$row["title_ar"];
                           $icon=$row["icon"];

			   $website_visits=$row["website_visits"];
			   $website_visits++;

			    $sql="UPDATE  `info` SET website_visits='$website_visits' WHERE id='$id'";
                $query=mysqli_query($con,$sql);
		   }


 $sql="SELECT *  FROM `meta` LIMIT 1 OFFSET 0";
           $query=mysqli_query($con,$sql);

		   if($query)
		   {
			   $row=mysqli_fetch_assoc($query);
			
			   $description=$row["description"];
			 
   					$keywords=$row["keywords"];  
			   
			   $author=$row["author"];
		   }



?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="<?php echo $description; ?>">
	    <meta name="keywords" content="<?php echo $keywords; ?>">
      <meta name="author" content="<?php echo $author; ?>">
      <!-- Add Your favicon here -->
      <!--<link rel="icon" href="img/favicon.ico">-->
      <title>
<?php if($lang=="ar")
{ 
echo $title_ar;
}
else if($lang == "en")
{
echo $title;
}

 ?>
</title>
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Bootstrap core CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

      <link href="https://fonts.googleapis.com/css?family=Changa:400,700" rel="stylesheet">
      <!-- Animation CSS -->
      <link href="css/animate.css" rel="stylesheet">
      <!-- font awesome  -->
      <link href="css/font-awesome.min.css" rel="stylesheet">
      <!-- owl carousel  -->
      <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
      <!-- Custom styles for this slider -->
      <link rel="stylesheet" href="assets/css/slick.css">
      <link rel="stylesheet" href="assets/js/rs-plugin/css/settings.css">
      <link rel="stylesheet" href="assets/css/styles.css">
      <!-- Main css -->
      <link href="css/style.css" rel="stylesheet">
      <link rel="stylesheet" href="css/advertise.css">

      <link rel="shortcut icon" type="img/png" href="<?php echo $icon; ?>" />
	    <script src="js/jquery.js"></script>
	   <?php
	   if($lang=="ar")
	   {
		   ?>
	       <!-- <link href="css/style_english.css" rel="stylesheet"> -->
	         <link href="css/bootstrap-rtl.css" rel="stylesheet">

	    <?php
	   }
	   else if($lang=="en")
	   {
		   ?>
	       <link href="css/style_english.css" rel="stylesheet">
	      <!--     <link href="css/bootstrap-rtl.css" rel="stylesheet"> -->

	   <?php
	   }

	   ?>


   </head>
   <body >



	<?php
                                          if($ok==1)
                                          {

	   //soret el e3lan

$sql= "SELECT * FROM  `adv_images` LIMIT 1 OFFSET 0";
$query=mysqli_query($con,$sql);

 if($query)
 {

	while($row=mysqli_fetch_assoc($query))
	{


		$path=$row["path"];

	   ?>


 <div id="boxes">
  <div style=" position: fixed;    " id="dialog" class="window">
     <div id="popupfoot"> <a href="#" class="close agree">X</a>  </div>
    <div id="lorem">
      <p>
        <img src="<?php echo "Dalily_admin/".$path ;?>" class="img-responsive">

      </p>
    </div>

  </div>
  <div style="width: 100% !important; font-size: 32pt; color:white; height: 602px; display: none; opacity: 0.4;" id="mask"></div>
</div>



	   <?php
	}
 }




					}
	   ?>




		<?php //modal join us
	require_once('index/modal.php');
	?>



      <div class="pre-loader">
         <div class="load-con">
            <img src="img/_logo.png" class="animated fadeInDown" alt="">
            <div class="spinner">
               <div class="bounce1"></div>
               <div class="bounce2"></div>
               <div class="bounce3"></div>
            </div>
         </div>
      </div>

	<?php //header
	require_once('index/header.php');
	?>


	<?php //header
	require_once('index/search.php');
	?>





      <section id="recently_added" class="background-sectio">
         <div class="container m-b-30">
            <div class="row">
               <div class="col-xs-12 text-center">
                  <h1 id="klma" class="section-title title main-color">   </h1>
               </div>
               <div class="col-xs-12 m-t-20 m-b-60">
                  <div class="row all-details">

					  <?php

					  if(isset($_GET["area"]) && isset($_GET["category"]) &&  isset($_GET["text"]) )
					  {
						   $area= trim($_GET["area"]);
						   $area= stripslashes($area);
						   $area= htmlspecialchars($area);
						   $area = mysqli_real_escape_string($con,$area);

						    $category= trim($_GET["category"]);
						    $category= stripslashes($category);
						    $category= htmlspecialchars($category);
						    $category = mysqli_real_escape_string($con,$category);

						    $text= trim($_GET["text"]);
						    $text= stripslashes($text);
						    $text= htmlspecialchars($text);
						    $text = mysqli_real_escape_string($con,$text);

						  if($lang=="en")
								 {
										$se= "Search Results";
								 }
								 else
								 {
									 	$se=" نتائج البحث ";
								 }

						  ?>

						  <script>

							$(document).ready(function(){

							  $('<?php echo "#category"; ?> option[value=<?php echo $category; ?>]').attr('selected','selected');
							  $('<?php echo "#area"; ?> option[value=<?php echo $area; ?>]').attr('selected','selected');
							  $("#txt").val("<?php echo $text; ?>");

							  $("#klma").text("<?php echo $se; ?>");
							});

							</script>




						<?php

						if($area == 0 && $category ==0 && $text =="")
						{
							if($lang=="en")
								 {
										echo "No Results Found";
								 }
								 else
								 {
									 	echo " لا توجد نتائج ";
								 }

							$sql="SELECT * FROM company  LIMIT 0 OFFSET 0";
						}
						  else if($area == 0 && $category ==0)
						  {

						      $sql="SELECT * FROM company  WHERE  ( name LIKE'%$text%' OR  name_ar LIKE'%$text%' ) AND block='0'  ORDER BY id DESC";

						  }

						      else if($area == 0 && $text =="")
						  {

						        $sql="SELECT * FROM company  WHERE  category='$category' AND block='0'  ORDER BY id DESC";

						  }




						    else if($category == 0  && $text =="")
						  {

						        $sql="SELECT * FROM company  WHERE   area='$area' AND block='0'  ORDER BY id DESC";

						  }


						    else if($category == 0 )
						  {

						        $sql="SELECT * FROM company  WHERE  ( name LIKE'%$text%' OR  name_ar LIKE'%$text%' ) AND area='$area' AND block='0'  ORDER BY id DESC";

						  }

						     else if($text =="")
						  {

						        $sql="SELECT * FROM company  WHERE area='$area' AND category='$category' AND block='0'  ORDER BY id DESC";

						  }
						  else
						  {
							   $sql="SELECT * FROM company  WHERE  ( name LIKE'%$text%' OR  name_ar LIKE'%$text%' ) AND area='$area' AND category='$category' AND block='0'  ORDER BY id DESC";
						  }

						  // n7ot el data
						  $query=mysqli_query($con,$sql);


							if($query)
							{
        $the_index=0;
							 while($row=mysqli_fetch_assoc($query))
							 {
$the_index++;
								 $id=$row["id"];
								 $phone=$row["phone"];
								 $mobile=$row["mobile"];
								 $map=$row["map"];
								 $fb=$row["fb"];
								 $tw=$row["tw"];
								 $ins=$row["ins"];
								 $sn=$row["sn"];
								 $logo=$row["logo"];
								 $area=$row["area"];
								 $type=$row["type"];

								 if($lang=="en")
								 {
									 $the_name="name";
								 }
								 else
								 {
									 $the_name="name_ar";
								 }
								  $name=$row["$the_name"];

								 $sql2="SELECT `$the_name` FROM `area` WHERE `id`='$area'";
								 $query2=mysqli_query($con,$sql2);

								if($query2)
								{

									$row2 = mysqli_fetch_assoc($query2);
									$area=$row2["$the_name"];


								}


                             if($type==1)
							 {
								 $special="special_ads";
							 $star="<i class='fa fa-star'></i>" ;


							 }
							 else if($type=="0")
							 {
								 $special="";
							 $star="" ;


							 }


									  ?>

  					<div class="col-md-4 col-xs-12 thehide <?php echo "hide".$the_index; ?>">
                        <div class="<?php echo "item m-t-20 ".$special; ?>">
                           <div class="blog-img m-t-40 ">
                              <a href="<?php echo "details.php?lang=" . $lang ."&id=".$id; ?>" >
                              <img src="<?php echo "Dalily_admin/".$logo; ?>" class="img-responsive center-block img-circle">

                              </a>
                           </div>
                            <?php echo $star; ?>
                           <div class="blog-info">
                              <h3 class="part1 text-center"><a id="text" href="<?php echo "details.php?lang=" . $lang ."&id=".$id; ?>" > <?php echo $name; ?></a></h3>

                              <div  class="socialbtns text-center">
                                 <ul>
                                    <li><a href="<?php echo $fb; ?>" class="fa fa-lg fa-facebook"></a></li>
                                    <li><a href="<?php echo $tw; ?>" class="fa fa-lg fa-twitter"></a></li>
                                    <li><a href="<?php echo $ins; ?>" class="fa fa-lg fa-instagram"></a></li>
									<li><a href="<?php echo $sn; ?>" class="fa fa-lg fa-snapchat"></a></li>
                                 </ul>
                              </div>
                              <p class="text-center">
                                 <span class="label label-primary" data-toggle="modal" data-target="<?php echo "#to".$id; ?>">
                                 <? if($lang=="ar")
								      {
										 ?>
										طلب
										<?php
									  }
								   else
									  {
									    ?>
										Order
										<?php
									  }
								 ?> </span>
                              </p>
                              <div class="row">
                                 <div class="col-md-7">
                                    <p>
                                       <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                                       <span><?php echo $area; ?></span>
                                    </p>
                                 </div>
                                 <div class="col-md-5">
                                    <p>
                                       <span>
                                          <span class="a2a_kit a2a_kit_size_32 a2a_default_style">
                                          <a class="a2a_dd" href="https://www.addtoany.com/share" data-a2a-url="<?php echo "http://dadalily.com/details.php?id=".$id; ?>"></a>
                                          </span>
                                          <script async src="https://static.addtoany.com/menu/page.js"></script>
                                       </span>
                                       <span>share</span>
                                    </p>
                                 </div>
                                 <div class="clearfix"></div>
                                 <div class="col-md-7">
                                    <p>
                                       <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
                                       <span><?php echo $mobile; ?> </span>
                                    </p>
                                 </div>


                                 <div class="col-md-5">
                                    <p>
                                       <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>
                                       <span><?php echo $phone; ?></span>
                                    </p>
                                 </div>

                                 <div class="clearfix"></div>
                              </div>
                              <div class="row m-b-30 m-t-20  text-center">
                                 <div class="col-md-6 col-md-offset-3 ">
                                    <a href="<?php echo "details.php?lang=" . $lang ."&id=".$id; ?>" class="btn btn-danger btn-rounded btn-outline btn-block" ><?php 
								   if($lang=="ar")
								      {
										 ?>
										المزيد
										<?php
									  }
								   else
									  {
									    ?>
										more
										<?php
									  }
										?></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                    


                     	  <?php
								 if($lang=="ar")
								 {
									 ?>
									  
					  				 <!-- Modal -->
                     <div id="<?php echo "to".$id; ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                           <!-- Modal content-->
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                                 <h4 class="modal-title">رسالة طلب الخدمة</h4>
                              </div>
                              <div class="modal-body">

                                    <div class="form-group">
                                       <div class="row">
                                          <div class="col-md-3">
                                             <label for="usr" class="frist-part">
                                                <p>الاسم بالكامل:</p>
                                             </label>
                                          </div>
                                          <div class="col-md-9">
                                             <input type="text" class="form-control" id="<?php echo "namev".$id ; ?>" placeholder="اكتب اسمك بالكامل " required="">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <div class="row">
                                          <div class="col-md-3">
                                             <label for="email" class="frist-part">
                                                <P>البريد الإلكتروني:</P>
                                             </label>
                                          </div>
                                          <div class="col-md-9">
                                             <input type="email" class="form-control" id="<?php echo "emailv".$id ; ?>" placeholder="اكتب البريد الإلكتروني" name="email"  required="">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <div class="row">
                                          <div class="col-md-3">
                                             <label for="pwd" class="frist-part">
                                                <P>رقم الهاتف:</P>
                                             </label>
                                          </div>
                                          <div class="col-md-9">
                                             <input class="form-control" type="number" id="<?php echo "phonev".$id ; ?>" value=""  placeholder="رقم الهاتف"  required="">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <div class="row">
                                          <div class="col-md-3">
                                             <label for="usr" class="frist-part">
                                                <P>الرسالة</P>
                                             </label>
                                          </div>
                                          <div class="col-md-9">
                                             <div class="form-group">
                                                <textarea class="form-control" rows="3" id="<?php echo "msgv".$id ; ?>" placeholder="اكتب الرسالة ....  "  required=""></textarea>
                                             </div>
                                          </div>
                                       </div>
                                    </div>

                                    <div class="form-group">
                                       <div class="row">

										      <div class="col-md-3 col-md-offset-3">
             <span style="color:#44bc3c" id="<?php echo "textv".$id ; ?>"> </span>
            </div>

                                          <div class="col-md-3 col-md-offset-4">
                                          <button id="<?php echo $id; ?>"  type="button" class="save btn btn-primary inverse btn-lg btn-rounded pull-left btn-block">ارسل</button>
                                          </div>
                                       </div>
                                    </div>

                              </div>
                           </div>
                        </div>
                     </div>


					  				<?php
								 }
								 else if($lang=="en")

								 {
									 ?>
					        <!-- Modal -->
                     <div id="<?php echo "to".$id; ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                           <!-- Modal content-->
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                                 <h4 class="modal-title">New message</h4>
                              </div>
                              <div class="modal-body">
                                 <form>
                                    <div class="form-group">
                                       <div class="row">
                                          <div class="col-md-3">
                                             <label for="usr" class="frist-part">
                                                <p>Full Name :</p>
                                             </label>
                                          </div>
                                          <div class="col-md-9">
                                             <input type="text" class="form-control" id="<?php echo "namev".$id ; ?>" placeholder="Full Name " required="">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <div class="row">
                                          <div class="col-md-3">
                                             <label for="email" class="frist-part">
                                                <P>Email Address :</P>
                                             </label>
                                          </div>
                                          <div class="col-md-9">
                                             <input type="email" class="form-control" id="<?php echo "emailv".$id ; ?>" placeholder="Email Address" name="email"  required="">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <div class="row">
                                          <div class="col-md-3">
                                             <label for="pwd" class="frist-part">
                                                <P>Phone Number :</P>
                                             </label>
                                          </div>
                                          <div class="col-md-9">
                                             <input class="form-control" type="number" id="<?php echo "phonev".$id ; ?>"   placeholder="Phone Number"  required="">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <div class="row">
                                          <div class="col-md-3">
                                             <label for="usr" class="frist-part">
                                                <P>Enter your message here :</P>
                                             </label>
                                          </div>
                                          <div class="col-md-9">
                                             <div class="form-group">
                                                <textarea class="form-control" rows="3" id="<?php echo "msgv".$id ; ?>" placeholder="Enter Message ...."  required=""></textarea>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <div class="row">

										      <div class="col-md-4 col-md-offset-2">
             <span style="color:#44bc3c" id="<?php echo "textv".$id ; ?>"> </span>
            </div>
										   <br/>
                                          <div class="col-md-3 col-md-offset-4">
                                          <button id="<?php echo $id; ?>" type="button" class=" save btn btn-primary inverse btn-lg btn-rounded pull-left btn-block">Send</button>
                                          </div>
                                       </div>
                                    </div>

                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>

					  				<?php
								 }
							 }
							}











					  }//end if get request
					  else
					  { // dont know category

						   ?>
						  <script>

							$(document).ready(function(){

						     <?php if($lang=="ar")
						   {
							   ?>

								 $("#klma").text("<?php echo "أحدث الأعمال المضافة"; ?>");
								<?php
						   }
						  else
						  {
							  ?>
								 $("#klma").text("<?php echo "The newest added"; ?>");
								<?php

						  }

						  ?>

							});

							</script>

								<?php


						 $sql="SELECT * FROM company  WHERE block='0' AND type='1'  ORDER BY id DESC";
						 $query=mysqli_query($con,$sql);


							if($query)
							{
                                $the_index=0;
							 while($row=mysqli_fetch_assoc($query))
							 {
                                 $the_index++;
								 $id=$row["id"];
								 $phone=$row["phone"];
								 $mobile=$row["mobile"];
								 $map=$row["map"];
								 $fb=$row["fb"];
								 $tw=$row["tw"];
								 $ins=$row["ins"];
								 $sn=$row["sn"];
								 $logo=$row["logo"];
								 $area=$row["area"];

								 if($lang=="en")
								 {
									 $the_name="name";
								 }
								 else
								 {
									 $the_name="name_ar";
								 }
								  $name=$row["$the_name"];

								 $sql2="SELECT `$the_name` FROM `area` WHERE `id`='$area'";
								 $query2=mysqli_query($con,$sql2);

								if($query2)
								{

									$row2 = mysqli_fetch_assoc($query2);
									$area=$row2["$the_name"];


								}



									  ?>

  					<div class="col-md-4 col-xs-12 thehide <?php echo "hide".$the_index; ?>">
                        <div class="item m-t-20 special_ads">
                           <div class="blog-img m-t-40 ">
                              <a href="<?php echo "details.php?lang=" . $lang ."&id=".$id; ?>" >
                              <img src="<?php echo "Dalily_admin/".$logo; ?>" class="img-responsive center-block img-circle">

                              </a>
                           </div>
                            <i class="fa fa-star"></i>
                           <div class="blog-info">
                              <h3 class="part1 text-center"><a href="<?php echo "details.php?lang=" . $lang ."&id=".$id; ?>"> <?php echo $name; ?></a></h3>

                              <div  class="socialbtns text-center">
                                 <ul>
                                    <li><a href="<?php echo $fb; ?>" class="fa fa-lg fa-facebook"></a></li>
                                    <li><a href="<?php echo $tw; ?>" class="fa fa-lg fa-twitter"></a></li>
                                    <li><a href="<?php echo $ins; ?>" class="fa fa-lg fa-instagram"></a></li>
									<li><a href="<?php echo $sn; ?>" class="fa fa-lg fa-snapchat"></a></li>
                                 </ul>
                              </div>
                              <p class="text-center">
                                 <span class="label label-primary" data-toggle="modal" data-target="<?php echo "#to".$id; ?>">
                              <?php  if($lang=="ar")
								      {
										 ?>
										طلب
										<?php
									  }
								   else
									  {
									    ?>
									Order
										<?php
									  }
								 ?></span>
                              </p>
                              <div class="row">
                                 <div class="col-md-7">
                                    <p>
                                       <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                                       <span><?php echo $area; ?></span>
                                    </p>
                                 </div>
                                 <div class="col-md-5">
                                    <p>
                                       <span>
                                          <span class="a2a_kit a2a_kit_size_32 a2a_default_style">
                                          <a class="a2a_dd" href="https://www.addtoany.com/share" data-a2a-url="<?php echo "http://dadalily.com/details.php?id=".$id; ?>"></a>
                                          </span>
                                          <script async src="https://static.addtoany.com/menu/page.js"></script>
                                       </span>
                                       <span>share</span>
                                    </p>
                                 </div>
                                 <div class="clearfix"></div>
                                 <div class="col-md-7">
                                    <p>
                                       <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
                                       <span><?php echo $mobile; ?> </span>
                                    </p>
                                 </div>


                                 <div class="col-md-5">
                                    <p>
                                       <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>
                                       <span><?php echo $phone; ?></span>
                                    </p>
                                 </div>

                                 <div class="clearfix"></div>
                              </div>
                              <div class="row m-b-30 m-t-20  text-center">
                                 <div class="col-md-6 col-md-offset-3 ">
                                    <a href="<?php echo "details.php?lang=" . $lang ."&id=".$id; ?>" class="btn btn-danger btn-rounded btn-outline btn-block" ><?php 
								   if($lang=="ar")
								      {
										 ?>
										المزيد
										<?php
									  }
								   else
									  {
									    ?>
										more
										<?php
									  }
										?></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

					  <?php
								 if($lang=="ar")
								 {
									 ?>
					  				 <!-- Modal -->
                     <div id="<?php echo "to".$id; ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                           <!-- Modal content-->
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                                 <h4 class="modal-title">رسالة طلب الخدمة</h4>
                              </div>
                              <div class="modal-body">

                                    <div class="form-group">
                                       <div class="row">
                                          <div class="col-md-3">
                                             <label for="usr" class="frist-part">
                                                <p>الاسم بالكامل:</p>
                                             </label>
                                          </div>
                                          <div class="col-md-9">
                                             <input type="text" class="form-control" id="<?php echo "namev".$id ; ?>" placeholder="اكتب اسمك بالكامل " required="">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <div class="row">
                                          <div class="col-md-3">
                                             <label for="email" class="frist-part">
                                                <P>البريد الإلكتروني:</P>
                                             </label>
                                          </div>
                                          <div class="col-md-9">
                                             <input type="email" class="form-control" id="<?php echo "emailv".$id ; ?>" placeholder="اكتب البريد الإلكتروني" name="email"  required="">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <div class="row">
                                          <div class="col-md-3">
                                             <label for="pwd" class="frist-part">
                                                <P>رقم الهاتف:</P>
                                             </label>
                                          </div>
                                          <div class="col-md-9">
                                             <input class="form-control" type="number" id="<?php echo "phonev".$id ; ?>" value=""  placeholder="رقم الهاتف"  required="">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <div class="row">
                                          <div class="col-md-3">
                                             <label for="usr" class="frist-part">
                                                <P>الرسالة</P>
                                             </label>
                                          </div>
                                          <div class="col-md-9">
                                             <div class="form-group">
                                                <textarea class="form-control" rows="3" id="<?php echo "msgv".$id ; ?>" placeholder="اكتب الرسالة ....  "  required=""></textarea>
                                             </div>
                                          </div>
                                       </div>
                                    </div>

                                    <div class="form-group">
                                       <div class="row">

										      <div class="col-md-3 col-md-offset-3">
             <span style="color:#44bc3c" id="<?php echo "textv".$id ; ?>"> </span>
            </div>

                                          <div class="col-md-3 col-md-offset-4">
                                          <button id="<?php echo $id; ?>"  type="button" class="save btn btn-primary inverse btn-lg btn-rounded pull-left btn-block">ارسل</button>
                                          </div>
                                       </div>
                                    </div>

                              </div>
                           </div>
                        </div>
                     </div>


					  				<?php
								 }
								 else if($lang=="en")

								 {
									 ?>
					        <!-- Modal -->
                     <div id="<?php echo "to".$id; ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                           <!-- Modal content-->
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                                 <h4 class="modal-title">New message</h4>
                              </div>
                              <div class="modal-body">
                                 <form>
                                    <div class="form-group">
                                       <div class="row">
                                          <div class="col-md-3">
                                             <label for="usr" class="frist-part">
                                                <p>Full Name :</p>
                                             </label>
                                          </div>
                                          <div class="col-md-9">
                                             <input type="text" class="form-control" id="<?php echo "namev".$id ; ?>" placeholder="Full Name " required="">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <div class="row">
                                          <div class="col-md-3">
                                             <label for="email" class="frist-part">
                                                <P>Email Address :</P>
                                             </label>
                                          </div>
                                          <div class="col-md-9">
                                             <input type="email" class="form-control" id="<?php echo "emailv".$id ; ?>" placeholder="Email Address" name="email"  required="">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <div class="row">
                                          <div class="col-md-3">
                                             <label for="pwd" class="frist-part">
                                                <P>Phone Number :</P>
                                             </label>
                                          </div>
                                          <div class="col-md-9">
                                             <input class="form-control" type="number" id="<?php echo "phonev".$id ; ?>" value=""  placeholder="Phone Number"  required="">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <div class="row">
                                          <div class="col-md-3">
                                             <label for="usr" class="frist-part">
                                                <P>Enter your message here :</P>
                                             </label>
                                          </div>
                                          <div class="col-md-9">
                                             <div class="form-group">
                                                <textarea class="form-control" rows="3" id="<?php echo "msgv".$id ; ?>" placeholder="Enter Message ...."  required=""></textarea>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <div class="row">

										      <div class="col-md-4 col-md-offset-2">
             <span style="color:#44bc3c" id="<?php echo "textv".$id ; ?>"> </span>
            </div>
										   <br/>
                                          <div class="col-md-3 col-md-offset-4">
                                          <button id="<?php echo $id; ?>" type="button" class=" save btn btn-primary inverse btn-lg btn-rounded pull-left btn-block">Send</button>
                                          </div>
                                       </div>
                                    </div>

                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>

					  				<?php
								 }

							 }
							}



					  }// end not select any thing

					  
					  
					  
					  
					  
					  ?>
					  <div class="clearfix"></div>
					  <?php
					  
					  
					  
					  if($lang=="ar")
					  {
					  ?>


  <div class="row">
	  
  <div class="col-md-2 col-md-offset-5 m-t-30">
                          <button class="btn  btn-block btn-download animated bounceIn wow animated loadmore" >تحميل المزيد</button>
                      </div>
  </div>
 <?php 
						  
					  }
					  else
					  {
						  ?>
					   <div class="row">
  <div class="col-md-2 col-md-offset-5 m-t-30">
                          <button class="btn  btn-block btn-download animated bounceIn wow animated loadmore" > Load more</button>
	   </div>
				
                  </div>		   
					  <?php 
					  }
?>



               </div>
            </div>
         </div>
      </section>
      <!-- team -->
     
	<?php //footer
	require_once('index/footer.php');
	?>
 <script type="text/javascript">
      var length = 22

var text = document.getElementById('text')
var string = text.innerHTML
var trimmedString = string.length > length ?
    string.substring(0, length - 3) + "..."  :
  string

text.innerHTML = trimmedString
    </script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.easing.min.js"></script>
      <script src="js/wow.min.js"></script>
      <script src="js/anchorscrol.js"></script>
      <script type="text/javascript" src="js/jquery.owl.carousel.js"></script>
      <!-- slider -->
      <script src="assets/js/slick.min.js"></script>
      <script src="assets/js/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
      <script src="assets/js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
      <script src="assets/js/waypoints.min.js"></script>
      <script src="assets/js/scripts.js"></script>
      <script src="js/validate_number.js"></script>
      <!-- Main js -->
      <script src="js/main.js"></script>
      <script>
         $(document).ready(function() {
             appMaster.preLoader();
                 $(".thehide").hide();
			 
		
			 
			 	 var hide=9;
			 
			 
			 	  if (! $(".hide"+(hide+1)).length ) {
				 
				 $(".loadmore").hide();
				
				}
			 
			 
			 for(var i=1 ; i <= hide ; i++)
					 {
						  $(".hide"+i).show();
					 }
			
		
			
			 $(".loadmore").click(function(){
				 var hide_old=hide;
				 hide=hide+9;
				 
				 var x=0;
				 for(var i=hide_old ; i <= hide ; i++)
					 {
						  $(".hide"+i).show({}, 1900);
						 
						 x=i;
					 }
				 x++;
				  
			 if (! $(".hide"+x).length ) {
				 
				 $(this).hide();
				
				}
				
				 
			 });
			 
			 
			 
			 
         });
      </script>
     
      <script src="js/advertise.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


<script type="text/javascript">
   //set button id on click to hide first modal
$("#popupfoot").on( "click", function() {
        $('#boxes').modal('hide');
});
//trigger next modal
$("#popupfoot").on( "click", function() {
        $('#myModal2').modal('show');
});
</script>
<script>
        $(document).ready(function(){


            $(".save").click(function(){

					  var the_id=$(this).prop("id");



                var name=$("#namev"+the_id).val();
				var email=$("#emailv"+the_id).val();
				var phone=$("#phonev"+the_id).val();
				var msg=$("#msgv"+the_id).val();


  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;


				 $("#text").css("color","red");
				if(name =="")
					{

						 $("#textv"+the_id).text("<?php
										 if($lang=="ar")
										 echo "الاسم  فارغ ";
										 else
										  echo" name is empty ";

										 ?>");


					}
				else if(email=="")
					{
 							$("#textv"+the_id).text("<?php
										 if($lang=="ar")
											 echo " البريد الالكتروني فارغ ";
										 else
										  echo"Email is empty ";

										 ?>");




					}
						else if (! regex.test(email))
						{
							$("#textv"+the_id).text("<?php
										 if($lang=="ar")
											 echo " البريد الالكتروني غير مطابق للمواصفات ";
										 else
										  echo"Email is not valid ";

										 ?>");
						}


				else if(phone=="")
					{
						 $("#textv"+the_id).text("<?php
										 if($lang=="ar")
											 echo "  رقم الهاتف فارغ";
										  else
										  echo"Phone  is empty ";

										 ?>");
					}
				else if(msg=="")
					{
							 $("#textv"+the_id).text("<?php
										 if($lang=="ar")
											 echo " الرسالة فارغة ";
											   else
										  echo" Message is empty ";

										 ?>");
					}



				else
				{

                $.post("api/request.php", { name: name ,email: email ,phone: phone ,msg: msg ,id: the_id }, function(data, status){

				         var result = JSON.parse(data);


										if(result.status == "0")
											{

											<?php
												if($lang=="ar") {

												?>
											 $("#textv"+the_id).text("تم الارسال بنجاح");
												<?php
												}
										   else
										   {
											   ?>
										 $("#textv"+the_id).text("Send successfully thank you");
												<?php
										   }


										 ?>
 $(".modal").modal("hide");


												var name=$("#name").val("");
												var email=$("#email").val("");
												var phone=$("#phone").val("");
												var msg=$("#msg").val("");



												$("#textv"+the_id).css("color","#44bc3c");

											}


										else
										{
										   $("#textv"+the_id).text(" حدث خطأ ما اعد المحاولة ");

										}

                });

				}

            });

        });

    </script>
    

   </body>
</html>

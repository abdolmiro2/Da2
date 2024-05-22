<?php require_once('db_config.php');

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

?>


<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- Add Your favicon here -->
      <!--<link rel="icon" href="img/favicon.ico">-->
      <title>Dadalily</title>
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
      <link rel="shortcut icon" type="img/png" href="img/tabicon.png" />
      <!-- Gallery -->
      <link href='css/simplelightbox.min.css' rel='stylesheet' type='text/css'>
      <link href='css/gallery.css' rel='stylesheet' type='text/css'>

      <script src="js/jquery.js"></script>


<script>
	   function getId(url) {
    var regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
    var match = url.match(regExp);

    if (match && match[2].length == 11) {
        return match[2];
    } else {
        return 'error';
    }
}
	   
	   </script>
	   
	   
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

         if(isset($_GET['id']))
         {

         $id=$_GET['id'];
      }else $id=0;
require_once('details/header.php');

	   if(isset($_GET['id']))
	   {

	   $id=$_GET['id'];



	    $sql="SELECT * FROM company WHERE id='$id'";
          $query=mysqli_query($con,$sql);

				if($query)
				{

				 $rowcount=mysqli_num_rows($query);

				 if($rowcount==1)// found here
				 { // username true

				   $row=mysqli_fetch_assoc($query);


					 $logo=$row["logo"];
					 $cover=$row["cover"];
					 $category=$row["category"];
					 $area=$row["area"];
					 $name=$row["name"];
					 $name_ar=$row["name_ar"];
					 $visits=$row["visits"];

                $visits += 1;
                //update
                $sqlU="UPDATE company SET visits='$visits' WHERE id='$id'";
                  $queryU=mysqli_query($con,$sqlU);


                  if($queryU)
      				{


                  }else{
                     echo mysqli_error($con);
                  }

               $visits -= 1;

					 $descr=$row["descr"];
					 $desc_ar=$row["desc_ar"];
					 $phone=$row["phone"];
					 $mobile=$row["mobile"];
					 $address=$row["address"];
					 $address_ar=$row["address_ar"];
					 $website=$row["website"];
	   				 $owner_name=$row["owner_name"];
					 $fb=$row["fb"];
					 $tw=$row["tw"];
					 $ins=$row["ins"];
					 $sn=$row["sn"];
					 $map=$row["map"];
					 $email=$row["email"];
					 
					 ?>
<script language="javascript" type="text/javascript">

	var url="<?php echo $map ?>";
	
var longlat = /\/\@(.*),(.*),/.exec(url);

var lng = longlat[1]; 
var lat = longlat[2];
	
	

    var map;
    var geocoder;
	
	
	
    var map;
    var geocoder;
    function InitializeMap() {

        var latlng = new google.maps.LatLng(lng, lat);
        var myOptions =
        {
            zoom: 18,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            disableDefaultUI: true
        };
        map = new google.maps.Map(document.getElementById("map"), myOptions);
    }




   

    window.onload = InitializeMap;

</script>

<input id="face"  type="hidden" value="<?php echo $fb; ?>">

	   <?php
	   if($lang=="ar")
	   {

		   $sql2="SELECT `name_ar` FROM `area` WHERE `id`='$area'";
								 $query2=mysqli_query($con,$sql2);

								if($query2)
								{

									$row2 = mysqli_fetch_assoc($query2);
									$area=$row2["name_ar"];


								}
	    ?>





		     <!-- contact us -->
      <section id="details" style=" background:url('<?php echo "Dalily_admin/".$cover; ?>')">
         <div class="container-fluid">
            <div class="row details">
               <div class="col-md-2 col-xs-3 col-md-offset-1">
                  <img src="<?php echo "Dalily_admin/".$logo; ?>" class="img-responsive img-thumbnail img-responsive">
               </div>
               <div class="col-md-6  m-b-30">
                  <div class="">
                     <h1 class="wow fadeInDown white-color"><?php echo $name_ar; ?> </h1>
                     <h1 class="wow fadeInDown white-color">   </h1>
                  </div>
               </div>

            </div>
         </div>
      </section>
      <section class="filter-page " >
         <div class="container ">
            <div class="row m-t-50 m-b-50">
               <div class="col-md-12  all-department all-details">
                  <div class="row">
                     <div class="filter-page__content  main_border m-t-120 m-b-40">
                        <div class="filter-item-wrapper">
                           <div class="item m-t-10 m-b-10">
                              <div class="row">
                                 <div class="col-md-3">
                                    <div class="item-media">
                                       <div class="image-cover"><a ><img src="<?php echo "Dalily_admin/".$logo;  ?>" alt="" class="img-responsive center-block img-circle" style=" border: 1px dashed #999;"></a></div>
                                       <div style="text-align: center; margin-top: 2em; ">
                                          <span class="label label-danger" style="padding: 10px 59px"> <?php echo $visits." "; ?> مشاهدة</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-9">
                                    <div class="item-body">
                                       <div class="item-title">
                                          <h2 class="title main-color"> <?php echo $name_ar; ?> </h2>
                                       </div>
                                       <div class="item-address ">
                                        <?php echo $desc_ar; ?>
                                       </div>
                                       <hr>
                                       <div class="row">
                                          <div class="col-md-6 details-icon">
                                             <div>
                                                <p>
                                                   <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                                                   <span><?php echo $area; ?></span>
                                                </p>
                                                <p>
                                                   <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
                                                   <span><?php echo $mobile; ?> </span>
                                                </p>
                                                <p>
                                                   <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>
                                                   <span><?php echo $phone; ?></span>
                                                </p>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="details-icon">
                                                <p>
                                                   <span class="glyphicon glyphicon-envelope"></span>  <?php echo $email; ?>
                                                </p>
                                                <p>
                                                   <span>
                                                      <span class="a2a_kit a2a_kit_size_32 a2a_default_style">
                                                      <a class="a2a_dd" href="https://www.addtoany.com/share" data-a2a-url="<?php echo "http://dadalily.com/details.php?id=".$id; ?>"></a>
                                                      </span>
                                                      <script async src="https://static.addtoany.com/menu/page.js"></script>
                                                   </span>
                                                   <span>مشاركة</span>
                                                </p>
                                                <p>
                                                   <a >
                                                   <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                                                   <?php echo $address_ar; ?>
                                                   </a>
                                                </p>
                                             </div>
                                          </div>
                                       </div>
                                       <hr>
                                       <div class="row">
                                          <div class="col-md-2">
                                             <span class="title" style="line-height: 2">تابعونا : </span>
                                          </div>
                                          <div class="col-md-7">

                                       <ul class="social-nv model-9">
                                          <li><a href="<?php echo $tw; ?>" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                          <li>
                                             <a  href="<?php echo $fb; ?>"  target="_blank" class="facebook"> <i class="fa fa-facebook"></i></a>

                                          </li>
                                          <li><a href="<?php echo $ins; ?>" target="_blank" class="google-plus"><i class="fa fa-instagram"></i></a></li>
                                          <li><a href="<?php echo $sn; ?>" target="_blank" class="linkedin" ><i class="fa fa-snapchat-ghost" ></i></a></li>
                                       </ul>
                                          </div>

                                       </div>


                                    </div>
                                 </div>
                              </div>
                              <!-- row -->
                           </div>
                           <!-- item -->
                        </div>
                        <!-- filter-item-wrapper -->
                     </div>
                     <div class="filter-page__tab  ">
                        <div class="">

                           <div class="row">
                              <div class="col-md-4">
                                 <h4 class="main-color">
                                    أطلب خدمة
                                 </h4>
                                 <hr>
                                 <!--  -->

                                      <input id="id" value="<?php echo $id; ?>"   type="hidden">

                                    <div class="form-group">
                                        <input type="text" id="name" class="form-control" placeholder="أكتب اسمك بالكامل"  required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" id="email" class="form-control" placeholder="البريد الإلكتروني" required="">
                                    </div>

                                    <div class="form-group">
                                        <input type="number" id="phone" class="form-control" placeholder="رقم الهاتف" required="">
                                    </div>
                                    <div class="form-group">
                                        <textarea cols="30" rows="3" name="body" id="msg" class="form-control" placeholder="أكتب رسالتك هنا ..." required=""></textarea>
                                    </div>

									     <div class="form-group">
										 <span style="color:#44bc3c" id="text"> </span>

 											</div>
  <br/>
                                    <div class="form-group">
                                         <button type="button" id="save" class="btn btn-primary  btn-lg btn-rounded btn-block ">ارسل</button>
                                     </div>

                                    <div class="clearfix"></div>

                                 <!--  -->
                              </div>
                              <div class="col-md-8">
                                 <!-- Nav tabs -->
                                 <div class="card">
                                    <ul class="nav nav-tabs" role="tablist">
                                       <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">البوم الصور</a></li>
                                       <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">الفيديوهات</a></li>
                                       <li role="presentation"><a href="#map" aria-controls="profile" role="tab" data-toggle="tab">خريطة الموقع</a></li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                       <div role="tabpanel" class="tab-pane active" id="home">
                                          <div class="gallery">
                                             <div class="row">

                                               <?php
											  $sql="SELECT * FROM company_pics WHERE  company_id='$id'";
											  $query=mysqli_query($con,$sql);

													if($query)
													{

													while($row=mysqli_fetch_assoc($query))
													 {
 															$img=$row["img"];
														?>


														<div class="col-md-3">
														   <a href="<?php echo "Dalily_admin/".$img ; ?>"><img src="<?php echo "Dalily_admin/".$img ; ?>" alt="" class="img-responsive" title=""/></a>
														</div>

													<?php
													 }
													}
		   ?>

                                             </div>
                                             <div class="clear"></div>
                                          </div>
                                       </div>
                                       <div role="tabpanel" class="tab-pane" id="profile">
                                          <div class="row video">

											            <?php
											  $sql="SELECT * FROM company_videos WHERE  company_id='$id'";
											  $query=mysqli_query($con,$sql);

													if($query)
													{

													while($row=mysqli_fetch_assoc($query))
													 {
															$id_v=$row["id"];
 															$video=$row["video"];
														?>



                                             <div class="col-md-4">
                                                  <div id="<?php echo "myId".$id_v; ?>">
													   
													   <script>
													   var myId = getId( "<?php echo $video; ?>");
														   
													  $('<?php echo "#myId".$id_v; ?>').html('<iframe  style="display:block;width:100%;" src="//www.youtube.com/embed/' + myId + '" frameborder="0" allowfullscreen></iframe>');
														   
													   </script>
                                                      
                                                   </div>
												 
                                                
                                             </div>
											 


													<?php
													 }
													}
		   ?>


                                          </div>




                                       </div>
                                       <div role="tabpanel" style="height:300px" class="tab-pane" id="map">
                                        

                                       </div>
                                    </div>
                                 </div>
                              </div>

                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- End container -->
      </section>

	    <?php
	   }
	   else if($lang=="en")
	   {


		   $sql2="SELECT `name` FROM `area` WHERE `id`='$area'";
								 $query2=mysqli_query($con,$sql2);

								if($query2)
								{

									$row2 = mysqli_fetch_assoc($query2);
									$area=$row2["name"];


								}

		   ?>
	    <!-- contact us -->
      <section id="details" style=" background:url('<?php echo "Dalily_admin/".$cover; ?>')">
         <div class="container-fluid">
            <div class="row details">
               <div class="col-md-2 col-md-offset-1">
                  <img src="<?php echo "Dalily_admin/".$logo; ?>" class="img-responsive img-thumbnail">
               </div>
               <div class="col-md-6 m-b-30">
                  <div class="">
                     <h1 class="wow fadeInDown white-color"><?php echo $name; ?></h1>
                     <h1 class="wow fadeInDown white-color">   </h1>
                  </div>
               </div>

            </div>
         </div>
      </section>
      <section class="filter-page " >
         <div class="container ">
            <div class="row m-t-50 m-b-50">
               <div class="col-md-12  all-department all-details">
                  <div class="row">
                     <div class="filter-page__content  main_border m-t-120 m-b-40">
                        <div class="filter-item-wrapper">
                           <div class="item m-t-10 m-b-10">
                              <div class="row">
                                 <div class="col-md-3">
                                    <div class="item-media">
                                       <div class="image-cover"><a ><img src="<?php echo "Dalily_admin/".$logo;  ?>" alt="" class="img-responsive center-block img-circle" style=" border: 1px dashed #999;"></a></div>
                                    </div>
                                    <div style="text-align: center; margin-top: 2em; ">
                                          <span class="label label-danger" style="padding: 10px 59px"><?php echo $visits." "; ?>  Views</span>
                                       </div>
                                 </div>
                                 <div class="col-md-9">
                                    <div class="item-body">
                                       <div class="item-title">
                                          <h2 class="title main-color">  <?php echo $name; ?>  </h2>
                                       </div>
                                       <div class="item-address ">
                                        <?php echo $descr; ?>
                                       </div>
                                       <hr>
                                       <div class="row">
                                          <div class="col-md-6 details-icon">
                                             <div>
                                                <p>
                                                   <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                                                   <span> <?php echo $area; ; ?></span>
                                                </p>
                                                <p>
                                                   <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
                                                   <span><?php echo $mobile; ?> </span>
                                                </p>
                                                <p>
                                                   <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>
                                                   <span><?php echo $phone; ?></span>
                                                </p>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="details-icon">
                                                <p>
                                                   <span class="glyphicon glyphicon-envelope"></span>  <?php echo $email; ?>
                                                </p>
                                                <p>
                                                   <span>
                                                      <span class="a2a_kit a2a_kit_size_32 a2a_default_style">
                                                      <a class="a2a_dd" href="https://www.addtoany.com/share" data-a2a-url="<?php echo "http://dadalily.com/details.php?id=".$id; ?>"></a>
                                                      </span>
                                                      <script async src="https://static.addtoany.com/menu/page.js"></script>
                                                   </span>
                                                   <span>share</span>
                                                </p>
                                                <p>
                                                   <a >
                                                   <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                                                    <?php echo $address; ?>
                                                   </a>
                                                </p>
                                             </div>
                                          </div>
                                       </div>
                                       <hr>
                                       <div class="row">
                                          <div class="col-md-2">
                                             <span class="title" style="line-height: 2">Follow us   </span>
                                          </div>
                                          <div class="col-md-7">

                                       <ul class="social-nv model-9">
                                          <li><a href="<?php echo $tw; ?>" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                          <li>
                                             <a href="<?php echo $fb; ?>"  target="_blank" class="facebook"> <i class="fa fa-facebook"></i></a>
                                          </li>
                                          <li><a href="<?php echo $ins; ?>" target="_blank" class="google-plus"><i class="fa fa-instagram"></i></a></li>
                                          <li><a href="<?php echo $sn; ?>" target="_blank" class="linkedin" ><i class="fa fa-snapchat-ghost" ></i></a></li>
                                       </ul>
                                          </div>

                                       </div>


                                    </div>
                                 </div>
                              </div>
                              <!-- row -->
                           </div>
                           <!-- item -->
                        </div>
                        <!-- filter-item-wrapper -->
                     </div>
                     <div class="filter-page__tab  ">
                        <div class="">

                           <div class="row">
                              <div class="col-md-4">
                                 <h4 class="main-color">
                                    order request
                                 </h4>
                                 <hr>
                                 <!--  -->

                                    <div class="form-group">
                                       <div class="row">

										         <input id="id" value="<?php echo $id; ?>"   type="hidden">

                                          <div class="col-md-12">
                                             <input type="text" class="form-control" id="name" placeholder="Full Name " required="">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <div class="row">

                                          <div class="col-md-12">
                                             <input type="email" class="form-control" id="email" placeholder="Email Address" name="email"  required="">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <div class="row">

                                          <div class="col-md-12">
                                             <input class="form-control" type="number" id="phone"  value=""  placeholder="Phone Number"  required="">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <div class="row">

                                          <div class="col-md-12">
                                             <div class="form-group">
                                                <textarea class="form-control" rows="3" id="msg"  placeholder="Enter Message ...."  required=""></textarea>
                                             </div>
                                          </div>
                                       </div>
                                    </div>


								    <div class="form-group">
										 <span style="color:#44bc3c" id="text"> </span>

 											</div>
								  <br/>
                                    <div class="form-group">
                                       <div class="row">
                                          <div class="col-md-12">
                                          <button type="button" id="save"  class="btn btn-primary inverse btn-lg btn-rounded pull-left btn-block">Send</button>
                                          </div>
                                       </div>
                                    </div>


                                 <!--  -->
                              </div>
                              <div class="col-md-8">
                                 <!-- Nav tabs -->
                                 <div class="card">
                                    <ul class="nav nav-tabs" role="tablist">
                                       <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Gallery</a></li>
                                       <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Videos</a></li>
                                       <li role="presentation"><a href="#map" aria-controls="profile" role="tab" data-toggle="tab">Map</a></li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                       <div role="tabpanel" class="tab-pane active" id="home">
                                          <div class="gallery">
                                             <div class="row">

                                               <?php

											  $sql="SELECT * FROM company_pics WHERE  company_id='$id'";

											  $query=mysqli_query($con,$sql);

													if($query)
													{

													while($row=mysqli_fetch_assoc($query))
													 {
 															$img=$row["img"];

														?>


														<div class="col-md-3">
														   <a href="<?php echo "Dalily_admin/".$img ; ?>"><img src="<?php echo "Dalily_admin/".$img ; ?>" alt="" class="img-responsive" title=""/></a>
														</div>

													<?php
													 }
													}
												 ?>
                                             </div>
                                             <div class="clear"></div>
                                          </div>
                                       </div>
                                       <div role="tabpanel" class="tab-pane" id="profile">
                                          <div class="row video">
                                                    <?php
											  $sql="SELECT * FROM company_videos WHERE  company_id='$id'";
											  $query=mysqli_query($con,$sql);

													if($query)
													{

													while($row=mysqli_fetch_assoc($query))
													 {
															$id_v=$row["id"];
 															$video=$row["video"];
														?>



                                             <div class="col-md-4">
												    <div id="<?php echo "myId".$id_v; ?>">
													   
													   <script>
													   var myId = getId( "<?php echo $video; ?>");
														   
													  $('<?php echo "#myId".$id_v; ?>').html('<iframe  style="display:block;width:100%;" src="//www.youtube.com/embed/' + myId + '" frameborder="0" allowfullscreen></iframe>');
														   
													   </script>
                                                      
                                                   </div>
												 
                                                
										
                                          </div>


													<?php
													 }
													}
		   ?>



  </div>
                                       </div>
                                        <div role="tabpanel" style="height:300px" class="tab-pane" id="map">


                                       </div>
                                    </div>
										
										
                                 </div>
                              </div>

                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- End container -->
	         <!-- End container -->
      </section>




	   <?php
	   }

				 }
				 }// num rows =1

	   }// end get
	   ?>










		<?php //footer
	require_once('index/footer.php');
	?>



   <script>
        $(document).ready(function(){


            $("#save").click(function(){
          
               var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				var id=$("#id").val();
                var name=$("#name").val();
				var email=$("#email").val();
				var phone=$("#phone").val();
				var msg=$("#msg").val();


				 $("#text").css("color","red");

				if(name =="")
					{
						 $("#text").text("<?php
										 if($lang=="ar")
										 echo "الاسم  فارغ ";
										 else
										  echo" name is empty ";

										 ?>");


					}
				else if(email=="")
					{
 							$("#text").text("<?php
										 if($lang=="ar")
											 echo " البريد الالكتروني فارغ ";
										 else
										  echo "Email is empty ";

										 ?>");

               }
						else if (! regex.test(email))
						{
							$("#text").text("<?php
										 if($lang=="ar")
											 echo " البريد الالكتروني غير مطابق للمواصفات ";
										 else
										  echo"Email is not valid ";

										 ?>");
						}
				else if(phone=="")
					{
						 $("#text").text("<?php
										 if($lang=="ar")
											 echo "  رقم الهاتف فارغ";
										  else
										  echo"Phone  is empty ";

										 ?>");
					}
				else if(msg=="")
					{
							 $("#text").text("<?php
										 if($lang=="ar")
											 echo " الرسالة فارغة ";
											   else
										  echo" Message is empty ";

										 ?>");
					}



				else
				{

                $.post("api/request.php", { name: name ,email: email ,phone: phone ,msg: msg ,id: id }, function(data, status){

				         var result = JSON.parse(data);


										if(result.status == "0")
											{

											<?php
												if($lang=="ar") {

												?>
											 $("#text").text("تم الارسال بنجاح");
												<?php
												}
										   else
										   {
											   ?>
										 $("#text").text("Send successfully thank you");
												<?php
										   }
										 ?>



												var name=$("#name").val("");
												var email=$("#email").val("");
												var phone=$("#phone").val("");
												var msg=$("#msg").val("");



												$("#text").css("color","#44bc3c");

											}


										else
										{
										   $("#text").text(" حدث خطأ ما اعد المحاولة ");

										}

                });

				}

            });

        });

    </script>


	   <!-- WhatsHelp.io widget -->
<!-- WhatsHelp.io widget -->
<script type="text/javascript">

		$(document).ready(function(){

			
		
		var face=$("#face").val();
		   (function () {

        var options = {
            facebook: face, // Facebook page ID
            whatsapp: "<?php echo "+".$mobile ?>", // WhatsApp number

            call: "+<?php echo $phone ?>", // Call phone number
            company_logo_url: "//static.whatshelp.io/img/flag.png", // URL of company logo (png, jpg, gif)
            greeting_message: "Hello, how may we help you? Just send us a message now to get assistance.", // Text of greeting message
            call_to_action: "Message us", // Call to action
            button_color: "#FF6550", // Color of button
            position: "right", // Position may be 'right' or 'left'
            order: "facebook,whatsapp,call" // Order of buttons
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
	});





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
      <!-- Gallery -->
      <script type="text/javascript" src="js/simple-lightbox.js"></script>
      <script>
         $(document).ready(function() {
             appMaster.preLoader();

         });
      </script>
      <!-- Gallery -->
      <script>
         $(function(){
            var $gallery = $('.gallery a').simpleLightbox();

            $gallery.on('show.simplelightbox', function(){
               console.log('Requested for showing');
            })
            .on('shown.simplelightbox', function(){
               console.log('Shown');
            })
            .on('close.simplelightbox', function(){
               console.log('Requested for closing');
            })
            .on('closed.simplelightbox', function(){
               console.log('Closed');
            })
            .on('change.simplelightbox', function(){
               console.log('Requested for change');
            })
            .on('next.simplelightbox', function(){
               console.log('Requested for next');
            })
            .on('prev.simplelightbox', function(){
               console.log('Requested for prev');
            })
            .on('nextImageLoaded.simplelightbox', function(){
               console.log('Next image loaded');
            })
            .on('prevImageLoaded.simplelightbox', function(){
               console.log('Prev image loaded');
            })
            .on('changed.simplelightbox', function(){
               console.log('Image changed');
            })
            .on('nextDone.simplelightbox', function(){
               console.log('Image changed to next');
            })
            .on('prevDone.simplelightbox', function(){
               console.log('Image changed to prev');
            })
            .on('error.simplelightbox', function(e){
               console.log('No image found, go to the next/prev');
               console.log(e);
            });
         });
      </script>
      <script type="text/javascript">
         $(document).ready(function() {
         $(".nav-tabs a").click(function(){
         $(this).tab('show');
         });
         });
      </script>


	 

<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyBmM66njRbGDt_-1GQom_SR6x_GE6fcnlo"></script>




   </body>
</html>

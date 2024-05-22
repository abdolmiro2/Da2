<?php 
if($lang=="ar")

{
	?>
<header>
         <nav class="navbar navbar-default navbar-fixed-top" role="navigation" >
            <div class="container">
               <!-- Brand and toggle get grouped for better mobile display -->
               <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="fa fa-bars fa-lg"></span>
                  </button>
                  <a class="navbar-brand" href="index.php?lang=en">
                  <img src="img/_logo.png" alt="" class="logo">
                  </a>
               </div>
               <!-- Collect the nav links, forms, and other content for toggling -->
               <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-left">
                     <li class="active"><a class="page-scroll" href="index.php?lang=ar">الرئيسية</a>
                     </li>
                     <li><a class="page-scroll" href="creat-card.php?lang=ar"><span><i class="fa fa-user-o" aria-hidden="true"></i></span> أنشئ بطاقة الأعمال الخاصة بك</a>
                     </li>
                     <li ><a class="page-scroll" href="contact.php?lang=ar">
                        <span><i class="fa fa-envelope-open-o" aria-hidden="true"></i></span> التواصل</a>
                     </li>
                     <li><a id="ar" class="lang" class="page-scroll" href="privacy-policy.php?lang=en"><span><i class="fa fa-flag-o" aria-hidden="true"></i></span> English</a>
                     </li>
                  </ul>
               </div>
               <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-->
         </nav>
      </header>
      <?php 
	
}
else if ( $lang=="en")
{
	?>

 <header>
         <nav class="navbar navbar-default navbar-fixed-top" role="navigation" >
            <div class="container">
               <!-- Brand and toggle get grouped for better mobile display -->
               <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="fa fa-bars fa-lg"></span>
                  </button>
                  <a class="navbar-brand" href="index.php?lang=ar">
                  <img src="img/_logo.png" alt="" class="logo">
                  </a>
               </div>
               <!-- Collect the nav links, forms, and other content for toggling -->
               <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-left">
                     <li class="active"><a class="page-scroll" href="index.php?lang=en">Home</a>
                     </li>
                     <li><a class="page-scroll" href="creat-card.php?lang=en"><span><i class="fa fa-user-o" aria-hidden="true"></i></span> Create Your BC</a>
                     </li>
                     <li ><a class="page-scroll" href="contact.php?lang=en">
                        <span><i class="fa fa-envelope-open-o" aria-hidden="true"></i></span> Contact</a>
                     </li>
                     <li><a id="en" class="lang" class="page-scroll" href="privacy-policy.php?lang=ar"><span><i class="fa fa-flag-o" aria-hidden="true"></i></span> العربية</a>
                     </li>
                  </ul>
               </div>
               <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-->
         </nav>
      </header>


<?php
	
}
?>
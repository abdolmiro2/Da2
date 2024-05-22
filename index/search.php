<?php 


  $sql="SELECT *  FROM `info` LIMIT 1 OFFSET 0";
           $query=mysqli_query($con,$sql);
		   
		   if($query)
		   {
			   $row=mysqli_fetch_assoc($query);
			   $website_visits=$row["website_visits"];
			   $slogan=$row["slogan"];
                           $slogan_ar=$row["slogan_ar"];
		   }

if($lang=="ar")

{
	?>
	
      <section id="cover">
         <div id="headerwrap" >
            <div class="container herocontent">
               <!-- <h2 class="wow fadeInUp" data-wow-duration="2s"> BCdom</h2> -->               
               <a href="index.php"><img src="img/_logo.png" style="  height:55px !important;"></a> 
               <h4 class="wow fadeInDown animated" data-wow-duration="3s">
                 <?php echo $slogan_ar; ?>
               </h4>
               <h1 class="number wow fadeInDown animated" data-wow-duration="3s" >
                 <?php echo $website_visits; ?>
               </h1>
               <h4 class="wow fadeInDown animated" data-wow-duration="3s" >  زائر </h4>
            </div>
            <div class="dropdown-buttons m-t-20 ">
               <div class="dropdown-button selectdiv">
                  <select id="area">
                     <option  value="0" class="main-color" selected="">اختر المدينة</option>
	 <?php
	      $sql="SELECT * FROM area ORDER BY id";
          $query=mysqli_query($con,$sql);

				if($query)
				{

				 while($row=mysqli_fetch_assoc($query))
				 {
					 $id=$row["id"];
					 $name_ar=$row["name_ar"];
					 ?>

					  
                     <option value="<?php echo $id; ?>" class="main-color"><?php echo $name_ar; ?></option>
					  
					  <?php 
							 }
							}
	?>
                     
                  </select>
               </div>
               <div class="dropdown-button selectdiv">
                  <select id="category">
                     <option value="0" class="main-color" selected="">اختر الفئة</option>
					  
                     <?php
	      $sql="SELECT * FROM category ORDER BY id";
          $query=mysqli_query($con,$sql);

				if($query)
				{

				 while($row=mysqli_fetch_assoc($query))
				 {
					 $id=$row["id"];
					 $name_ar=$row["name_ar"];
					 ?>

					  
                     <option value="<?php echo $id; ?>" class="main-color"><?php echo $name_ar; ?></option>
					  
					  <?php 
							 }
							}
	?>
                    
                  </select>
               </div>
            </div>
        
				
				  <div class="auto form-group" style="margin-top: 13px">
  
						
               <input id="txt" id="myInput" type="text" placeholder="بحث بأي كلمة / فئة / مدينة"  required="">
					  
				</div>
				
				
               <div class="contact_btn">
                  <button type="button" id="go" class="btn btn-primary btn-rounded">بحث</button>
               </div>
           
            <!-- /container -->
            <!-- /headerwrap -->
         </div>
      </section>


      <?php 
		  
		  
	
}
else if ( $lang=="en")
{
	?>
      <section id="cover">
         <div id="headerwrap" >
            <div class="container herocontent">
               <!-- <h2 class="wow fadeInUp" data-wow-duration="2s"> BCdom</h2> -->               
               <a href="index.php"><img src="img/_logo.png" style="  height:55px !important;"></a> 
               <h4 class="wow fadeInDown animated" data-wow-duration="3s">
                 <?php echo $slogan; ?>
               </h4>
               <h1 class="number wow fadeInDown animated" data-wow-duration="3s" >
                  <?php echo $website_visits; ?>
               </h1>
               <h4 class="wow fadeInDown animated" data-wow-duration="3s" >  Visitors </h4>
            </div>
            <div class="dropdown-buttons m-t-20 ">
               <div class="dropdown-button selectdiv">
                  <select id="area">
                     <option value="0" selected="">Select City</option>
         <?php
	      $sql="SELECT * FROM area ORDER BY id";
          $query=mysqli_query($con,$sql);

				if($query)
				{

				 while($row=mysqli_fetch_assoc($query))
				 {
					 $id=$row["id"];
					 $name=$row["name"];
					 ?>

					  
                     <option value="<?php echo $id; ?>" class="main-color"><?php echo $name; ?></option>
					  
					  <?php 
							 }
							}
	?>
                  </select>
               </div>
               <div class="dropdown-button selectdiv">
                  <select id="category">
                     <option value="0" selected="">Select Category</option>
                      <?php
	      $sql="SELECT * FROM category ORDER BY id";
          $query=mysqli_query($con,$sql);

				if($query)
				{

				 while($row=mysqli_fetch_assoc($query))
				 {
					 $id=$row["id"];
					 $name=$row["name"];
					 ?>

					  
                     <option value="<?php echo $id; ?>" class="main-color"><?php echo $name; ?></option>
					  
					  <?php 
							 }
							}
	?>
                  </select>
               </div>
            </div>
          
				  <div class="auto form-group" style="margin-top: 13px">
  
								
               <input id="txt" type="text" placeholder="search by word/category/city" >
					  
				</div>
               <div class="contact_btn">
                  <button type="button" id="go" class="btn btn-primary btn-rounded">Search</button>
               </div>
       
            <!-- /container -->
            <!-- /headerwrap -->
         </div>
      </section>

<?php
	
}


?>

<script>

		var countries = [];
	var ids = [];
	var types = [];


		 
	
	 $(document).ready(function() {
		 
		 var lang="<?php echo $lang; ?>";
		
		 		
			  
		 
		  $("#go").click(function(){
		    
			  var area=$("#area").val();
			   var category=$("#category").val();
			  var text=$("#txt").val();
			  
           window.location.href="index.php?area="+area+"&category="+category+"&text="+text+"&lang="+lang;
			  
		  }); //end click go
		 
		 
		 
		 
		 

	 });
	
	
	

</script>
          
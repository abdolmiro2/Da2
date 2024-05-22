<?php 
if($lang=="ar")

{
	
	?><!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
       
        <h4 class="modal-title" id="myModalLabel">مرحباً بكم في دادليلي  
        (للاشتراك)</h4>
      </div>
      
      <div class="modal-body">
        <form class="form-horizontal" >
  <div class="form-group">
    <label class="control-label col-sm-3" for="email">البريد الإلكتروني :</label>
    <div class="col-sm-9">
      <input type="email" class="form-control" id="email" placeholder="البريد الإلكتروني">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="pwd" style="text-align: center;">الهاتف :</label>
    <div class="col-sm-9"> 
      <input type="number" class="form-control" id="phone" placeholder="الهاتف">
    </div>
  </div>
  
  <div class="form-group"> 
    <div class="col-sm-offset-3 col-sm-9">
      <button type="button"  id="send" class="btn btn-primary btn-block" style="padding: 11px 50px;
    border-radius: 22px;">ارسال</button>
    </div>
  </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">اغلاق</button>
      </div>
       
    </div>
  </div>
</div>
	


      <?php 
	
}
else if ( $lang=="en")
{
	?>
  <!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
       
        <h4 class="modal-title" id="myModalLabel">Welcome in Dadalily, to subscribe</h4>
      </div>
      
      <div class="modal-body">
        <form class="form-horizontal" >
  <div class="form-group">
    <label class="control-label col-sm-3" for="email">Email Address :</label>
    <div class="col-sm-9">
      <input type="email" class="form-control" id="email" placeholder="Email Address">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="pwd" style="text-align: center;" ;>Phone :</label>
    <div class="col-sm-9"> 
      <input type="number" class="form-control" id="phone" placeholder="Phone">
    </div>
  </div>
  
  <div class="form-group"> 
    <div class="col-sm-offset-3 col-sm-9">
      <button type="button" id="send" class="btn btn-primary btn-block" style="padding: 11px 50px;
    border-radius: 22px;">Send</button>
    </div>
  </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
       
    </div>
  </div>
</div>


<?php
	
}
?>


<script>
$(document).ready(function(){
	
	
	
	
	$("#send").click(function(){
	var email=$("#email").val();
    var phone= $("#phone").val();
		
			if(email.length >0 && phone.length >0)
				{
				
			$.ajax({
				type:'GET',
				url:'api/add_adv.php?email='+email+'&phone='+phone,
				success:function(result){
				
                   $('#myModal2').modal('hide');
				   }// end success
				});
					
				}
		
	
	});
});
	

</script>
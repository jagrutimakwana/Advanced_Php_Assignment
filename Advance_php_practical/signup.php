
<script> 
</script>


    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary py-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase">Book A Room</h1>
                </div>
              
            </div>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- signup Start -->
    <div class="container-fluid bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                </div>    
                </div>
                <div class="col-lg-7 mb-5 my-lg-5 py-5 pl-lg-5">
                    <div class="contact-form">
                        <div id="success"></div>
						
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="control-group">
							<label><b> Name: </b></label>
                                <input type="text" class="form-control p-4" name="name" placeholder="Your Fullname" >
                                <p class="help-block text-danger"></p>
                            </div>
							 
                            <div class="control-group">
							<label><b> Check In Date : </b></label>
                                <input type="date" class="form-control p-4" name="ch_indate" >
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
							<label><b> Check Out Date : </b></label>
                                <input type="date" class="form-control p-4" name="ch_outdate" >
                                <p class="help-block text-danger"></p>
                            </div>
                            
							   
							   <div class="control-group">
                                <label for="inputState"><b>Booking Types </b></label>
                                 <select name="type_id" class="form-control">
                                  <option value="">Select Types</option></td>
                                  <?php
                                   if(!empty($types_arr))
                                     {
                                       foreach($types_arr as $c)
                                     {
                                     ?>
                                <option value="<?php echo $c->type_id?>"><?php echo $c->type_name?></option>
                                  <?php
					             	   }
					             }
                               ?>
                              </select>
                             </div>
			               		
                            <div><br>
							 
                                <button class="btn btn-primary py-3 px-5" type="submit" name="submit" value="submit" id="sendMessageButton">Room Booking</button>								
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- signup End -->
	
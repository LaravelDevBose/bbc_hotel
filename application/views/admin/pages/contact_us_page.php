<div class="row">
	<div class="col-md-12">
		<div class="panel widget">
		    <div class="panel-heading vd_bg-blue">
		        <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-picture-o"></i> </span>Contact Us Information</h3>
		    </div>
		    <div class="panel-body">
			 	<form id="fileupload" class="form-horizontal" action="<?= base_url();?>contact_us/update" method="POST" enctype="multipart/form-data">
	                <div class="form-group">
	                    <label class="col-sm-3 control-label">Address: </label>
	                    <div class="col-sm-7 controls">
	                        <textarea class="form-control" name="address" rows="3" placeholder="Your Business Address" ><?php if($address && isset($address)){echo $address->value; }?></textarea>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label class="col-sm-3 control-label">Phone Number: </label>
	                    <div class="col-sm-7 controls">
	                        <input type="number" name="phone" value="<?php if($phone && isset($phone)){echo $phone->value; }?>" placeholder="Phone Number">
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label class="col-sm-3 control-label">Email: </label>
	                    <div class="col-sm-7 controls">
	                        <input type="email" name="email" value="<?php if($email && isset($email)){echo $email->value; }?>" placeholder="Email Address">
	                    </div>
	                </div>
	               
	                <button type="submit" class="btn btn-success start pull-right">
	                    <i class="glyphicon glyphicon-upload"></i> 
	                    <span>Submit</span> 
	                </button>
	                
			 	</form>
			</div>
		</div>
	</div>
</div>
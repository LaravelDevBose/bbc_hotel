<div class="row">
	<div class="col-md-12">
		<div class="panel widget">
		    <div class="panel-heading vd_bg-blue">
		        <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-picture-o"></i> </span>Add A New Admin Information </h3>
		    </div>
		    <div class="panel-body">
			 	<form id="fileupload" class="form-horizontal" autocomplete="off"  action="<?= base_url(); ?>admin/update/<?= $admin->id ;?>" method="POST" enctype="multipart/form-data">
	                <div class="form-group">
	                    <label class="col-sm-3 control-label">Name: <span class="text-danger text-bold">*</span> </label>
	                    <div class="col-sm-7 controls">
	                        <input type="text" name="name" value="<?= $admin->name; ?>" placeholder="Admin Name" required data-toggle="tooltip" data-placement="top" data-original-title="Enter Admin Name Here">
	                    </div>
	                </div>
	                
					<div class="form-group">
	                    <label class="col-sm-3 control-label">UserName:<span class="text-danger text-bold">*</span> </label>
	                    <div class="col-sm-7 controls">
	                        <input type="text" name="username" value="<?= $admin->username; ?>" placeholder="Admin User-Name" required data-toggle="tooltip" data-placement="top" data-original-title="Enter Admin User-Name Here">
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-sm-3 control-label">Email Address:<span class="text-danger text-bold">*</span> </label>
	                    <div class="col-sm-7 controls">
	                        <input type="email" name="email" value="<?= $admin->email; ?>" placeholder="Admin Email Address" required data-toggle="tooltip" data-placement="top" data-original-title="Enter Admin Email Address Here">
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-sm-3 control-label">Phone Number:<span class="text-danger text-bold">*</span> </label>
	                    <div class="col-sm-7 controls">
	                        <input type="number" name="phone_num" value="<?= $admin->phone_num; ?>" placeholder="Admin Phone Number" required data-toggle="tooltip" data-placement="top" data-original-title="Enter Admin Phone Number Here">
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-sm-3 control-label">Image: </label>
	                    <div class="col-sm-7 controls">
	                        <span class="btn btn-info fileinput-button" data-toggle="tooltip" data-placement="top" data-original-title="Select Admin Image Here">
	                            <i class="glyphicon glyphicon-plus"></i> 
	                            <span>Admin Image</span>
	                            <input type="file" name="image" multiple accept="images/*" >
	                        </span>
	                        <input type="hidden" name="old_image" value="<?= $admin->image; ?>" >
	                    	<?php $image = base_url().$admin->image; if(!@getimagesize($image)){$image = base_url().'libs/upload_pic/admin_image/admin_defult.jpg';}?>
	                        <img src="<?= $image; ?>" alt="Image" style="width: 100px; height:100px; border: 2px solid; ">
	                    </div>

	                </div>
	                
	                <div class="form-group">
	                    <label class="col-sm-3 control-label">Old Password:<span class="text-danger text-bold">*</span> </label>
	                    <div class="col-sm-7 controls">
	                        <input type="password" name="old_password" minlength="6" placeholder="Admin Old Password" required data-toggle="tooltip" data-placement="top" data-original-title="Enter Old Password Hear">
	                        <span class="" id="pass_check"></span>
	                    </div>
	                </div>


	                <div class="form-group">
	                    <label class="col-sm-3 control-label">Password: </label>
	                    <div class="col-sm-7 controls">
	                        <input type="password" name="password" disabled minlength="6" placeholder="Admin Password"  data-toggle="tooltip" data-placement="top" data-original-title="Enter 6 Digit Password Hear">
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-sm-3 control-label">Confirm Password: </label>
	                    <div class="col-sm-7 controls">
	                        <input type="password" name="confirm_password" placeholder="Admin Confirm Passwords"  data-toggle="tooltip" disabled data-placement="top" data-original-title="Enter Confirm Password Here">
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



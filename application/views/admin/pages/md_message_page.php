<div class="row">
	<div class="col-md-12">
		<div class="panel widget">
		    <div class="panel-heading vd_bg-blue">
		        <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-picture-o"></i> </span>Message Info </h3>
		    </div>
		    <div class="panel-body">
			 	<form id="fileupload" class="form-horizontal" autocomplete="off"  action="<?= base_url(); ?>md_message/update" method="POST" enctype="multipart/form-data">
	                <div class="form-group">
	                    <label class="col-sm-3 control-label">Person Name: </label>
	                    <div class="col-sm-7 controls">
	                        <input type="text" name="md_name" placeholder="Name" value="<?php if($md_name && isset($md_name)){ echo $md_name->value; }?>" required data-toggle="tooltip" data-placement="top" data-original-title="Enter Name Here">
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label class="col-sm-3 control-label">Designation: </label>
	                    <div class="col-sm-7 controls">
	                        
                            <input type="text" name="md_desig" value="<?php if($md_desig && isset($md_desig)){ echo $md_desig->value; }?>" placeholder="Designation" required data-toggle="tooltip" data-placement="top" data-original-title="Enter Designation Here">
                       
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-sm-3 control-label">Image: </label>
	                    <div class="col-sm-6 controls">
	                        <span class="btn btn-info fileinput-button" data-toggle="tooltip" data-placement="top" data-original-title="Select your Event Image Here">
	                            <i class="glyphicon glyphicon-plus"></i> 
	                            <span>Image</span>
	                            <input type="file" name="md_image" multiple accept="images/*" >
	                        </span>
	                    
	                        <input type="hidden" name="old_image" value="<?php if($md_image && isset($md_image)){ echo $md_image->value; }?>" >
	                    	<?php $image = base_url().$md_image->value; if(!@getimagesize($image)){$image = base_url().'libs/upload_pic/admin_image/admin_defult.jpg';}?>
	                        <img src="<?= $image; ?>" alt="Image" style="width: 100px; height:100px; border: 2px solid; ">
                        </div>
	                </div>
	                <div class="form-group">
	                    <label class="col-sm-3 control-label">Message: </label>
	                    <div class="col-sm-9 controls">
	                        <textarea name="md_message" id="wysiwyghtml" class="width-100 form-control" required  rows="15" placeholder="Write your message here"><?php if($md_message && isset($md_message)){ echo $md_message->value; }?></textarea>
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

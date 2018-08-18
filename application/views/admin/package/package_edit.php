<div class="row" >
	<div class="col-md-12">
		<div class="panel widget">
		    <div class="panel-heading vd_bg-blue">
		        <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-picture-o"></i> </span>Package Edit </h3>
		    </div>
		    <div class="panel-body">
			 	<form id="fileupload" class="form-horizontal" autocomplete="off"  action="<?= base_url(); ?>package/update/<?= $package->id ?>" method="POST" enctype="multipart/form-data">
	                <div class="form-group">
	                    <label class="col-sm-3 control-label">Title: </label>
	                    <div class="col-sm-7 controls">
	                        <input type="text" name="title" placeholder="Package Title" required data-toggle="tooltip" data-placement="top" value="<?= $package->title?>" data-original-title="Your Package Title Here">
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label class="col-sm-3 control-label">Price: </label>
	                    <div class="col-sm-7 controls">
	                        <input type="text" name="price" placeholder="Package Price" required data-toggle="tooltip" data-placement="top" value="<?= $package->price ?>" data-original-title="Your Package Price Here">
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-sm-3 control-label">Image: </label>
	                    <div class="col-sm-7 controls">
	                        <span class="btn btn-info fileinput-button" data-toggle="tooltip" data-placement="top" data-original-title="Select your Package Image Here">
	                            <i class="glyphicon glyphicon-plus"></i> 
	                            <span>Package Image</span>
	                            <input type="file" name="image"  accept="images/*" >
	                        </span>
	                    </div>
	                    <div class="col-md-3 col-md-offset-4">
	                        <input type="hidden" name="old_image" value="<?= $package->image?>">
	                    	<?php $image = base_url().$package->image; if(!@getimagesize($image)){$image = base_url().'libs/upload_pic/no_image_small.jpg';}?>
	                        <img src="<?= $image; ?>" alt="Image" style="width: 100px height:100px; ">
                        </div>
	                </div>
	                <div class="form-group">
	                    <label class="col-sm-3 control-label">Package Details: </label>
	                    <div class="col-sm-9 controls">
	                        <textarea name="description" id="wysiwyghtml" class="width-100 form-control" required  rows="15" placeholder="Write your Package Details here"><?= $package->description; ?></textarea>
	                    </div>
	                </div>

	                <button type="submit" class="btn btn-success start pull-right">
	                    <i class="glyphicon glyphicon-upload"></i> 
	                    <span>Update</span> 
	                </button>
	                
			 	</form>
			</div>
		</div>
	</div>
</div>

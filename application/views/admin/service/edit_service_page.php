<?php if($service && isset($service)): ?>

<div class="col-md-12" style="width: 760px!important;">
	<div class="panel widget">
	    <div class="panel-heading vd_bg-blue">
	        <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-picture-o"></i> </span>Service & Price Edit </h3>
	    </div>
	    <div class="panel-body">
		 	<form id="fileupload" class="form-horizontal" action="<?= base_url();?>service/update/<?= $service->id;?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Title: </label>
                    <div class="col-sm-7 controls">
                        <input type="text" name="s_title" value="<?= $service->s_title; ?>" required placeholder="Service Title" data-toggle="tooltip" data-placement="top" data-original-title="Enter Service Title Here">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Price: </label>
                    <div class="col-sm-7 controls">
                        <input type="text" name="price" value="<?= $service->price; ?>" placeholder="Service Price" data-toggle="tooltip" data-placement="top" data-original-title="Enter Service Price Here">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label">Image: </label>
                    <div class="col-sm-7 controls">
                        <span class="btn btn-info fileinput-button">
                            <i class="glyphicon glyphicon-plus"></i> 
                            <span>Service Image</span>
                            <input type="file" name="image"  accept="images/*" required>
                        </span>
                        
                    </div>
                    <div class="col-md-7 col-md-offset-4">
                        <input type="hidden" name="old_image" value="<?= $service->image?>">
                    <?php $image = base_url().$service->image; if(!@getimagesize($image)){$image = base_url().'libs/upload_pic/no_image_small.jpg';}?>
                        <img src="<?= $image; ?>" alt="Image">
                        </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Details: </label>
                    <div class="col-sm-7 controls">
                        <textarea rows="3" name="description" class="form-control" data-toggle="tooltip" data-placement="top" data-original-title="Enter Service Details Here"><?= $service->description; ?></textarea>
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

<?php endif; ?>
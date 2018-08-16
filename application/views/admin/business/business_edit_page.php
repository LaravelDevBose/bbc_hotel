<div class="col-md-8 col-md-offset-2" >
	<div class="panel widget">
	    <div class="panel-heading vd_bg-blue">
	        <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-dot-circle-o"></i> </span>Other Business Edit </h3>
	    </div>
	    <div class="panel-body">
		 	<form id="fileupload" class="form-horizontal" autocomplete="off" action="<?= base_url();?>business/update/<?= $busines->id; ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Title: </label>
                    <div class="col-sm-7 controls">
                        <input type="text" name="b_title" value="<?= $busines->b_title; ?>" required placeholder="Business Name" data-toggle="tooltip" data-placement="top" data-original-title="Enter Business Name Here">
                    </div>
                    
                </div>
                <div class="form-group">
                    
                    <label class="col-sm-3 control-label">Image: </label>
                    <div class="col-sm-7 controls">
                        <span class="btn btn-info fileinput-button">
                            <i class="glyphicon glyphicon-plus"></i> 
                            <span>Logo Image</span>
                            <input type="file" name="image"  accept="images/*" required>
                        </span>
                    </div>
                    
                </div>

                <div class="form-group">

                    <label class="col-sm-3 control-label">Resent Image: </label>
                    <div class="col-sm-4 ">
                        <input type="hidden" name="old_image" value="<?= $busines->image?>">
                    <?php $image = base_url().$busines->image; if(!@getimagesize($image)){$image = base_url().'libs/upload_pic/no_image_small.jpg';}?>
                        <img src="<?= $image; ?>" alt="Image">
                    </div>
                </div>

                <br>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Details: </label>
                    <div class="col-sm-9 controls">
                        <textarea rows="7" id="wysiwyghtml" name="description" class="form-control" data-toggle="tooltip" data-placement="top" data-original-title="Enter Business Details Here"><?= $busines->description; ?></textarea>
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

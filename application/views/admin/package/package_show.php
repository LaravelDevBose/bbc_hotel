<div class="row" style="width: 700px;">
	<div class="col-md-12">
		<div class="panel widget">
		    <div class="panel-heading vd_bg-blue">
		        <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-picture-o"></i> </span> Package View </h3>
		    </div>
		    <div class="panel-body">
			 	
                <div class="form-group">
                    <label class="col-sm-3 control-label">Title: </label>
                    <div class="col-sm-7 controls">
                        <p><?= $package->title; ?></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Price: </label>
                    <div class="col-sm-7 controls">
                        <div class="input-group">
                            <p><?= number_format($package->price)?> TK.</p>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Image: </label>
                    <div class="col-md-9">
                    	<?php $image = base_url().$package->image; if(!@getimagesize($image)){$image = base_url().'libs/upload_pic/no_image_small.jpg';}?>
                        <img src="<?= $image; ?>" alt="Image" style="width: 100%; height:200px; ">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Package Details: </label>
                    <div class="col-sm-9 controls">
                        <p><?= $package->description; ?></p>
                    </div>
                </div>

	                
			</div>
		</div>
	</div>
</div>

<div class="col-md-8 col-md-offset-2" >
	<div class="panel widget">
	    <div class="panel-heading vd_bg-blue">
	        <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-dot-circle-o"></i> </span>Other Business View</h3>
	    </div>
	    <div class="panel-body">
            <div class="form-group">
                <label class="col-sm-3 control-label">Title: </label>
                <div class="col-sm-7 controls">
                   <p><?= $busines->b_title; ?></p>
                </div>
                
            </div>
            <div class="form-group">

                <label class="col-sm-3 control-label">Resent Image: </label>
                <div class="col-sm-9 ">
                    <input type="hidden" name="old_image" value="<?= $busines->image?>">
                <?php $image = base_url().$busines->image; if(!@getimagesize($image)){$image = base_url().'libs/upload_pic/no_image_small.jpg';}?>
                    <p><img src="<?= $image; ?>" alt="Image" style="width: 100px!important; height: 100px!important;"></p>
                </div>
            </div>

            <br>
            <div class="form-group">
                <label class="col-sm-3 control-label">Details: </label>
                <div class="col-sm-9 controls">
                    <p><?= $busines->description; ?></p>
                </div>
            </div>
		</div>
	</div>
</div>

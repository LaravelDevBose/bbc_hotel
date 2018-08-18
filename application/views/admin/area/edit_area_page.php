<?php if($area && isset($area)): ?>

<div class="col-md-12" style="width: 760px!important;">
	<div class="panel widget">
	    <div class="panel-heading vd_bg-blue">
	        <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-picture-o"></i> </span>Area Edit </h3>
	    </div>
	    <div class="panel-body">
		 	<form id="fileupload" class="form-horizontal" action="<?= base_url();?>area/update/<?= $area->id;?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Title: </label>
                    <div class="col-sm-7 controls">
                        <input type="text" name="name" value="<?= $area->name; ?>" required placeholder="Area Title" data-toggle="tooltip" data-placement="top" data-original-title="Enter Area Title Here">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-4 control-label">Details: </label>
                    <div class="col-sm-7 controls">
                        <textarea rows="3" name="description" class="form-control" data-toggle="tooltip" data-placement="top" data-original-title="Enter Area Details Here"><?= $area->description; ?></textarea>
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
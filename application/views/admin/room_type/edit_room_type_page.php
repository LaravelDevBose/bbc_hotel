<?php if($room_type && isset($room_type)): ?>

<div class="col-md-12" style="width: 760px!important;">
	<div class="panel widget">
	    <div class="panel-heading vd_bg-blue">
	        <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-picture-o"></i> </span>Room Type Edit </h3>
	    </div>
	    <div class="panel-body">
		 	<form id="fileupload" class="form-horizontal" action="<?= base_url();?>room_type/update/<?= $room_type->id;?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Title: </label>
                    <div class="col-sm-7 controls">
                        <input type="text" name="title" value="<?= $room_type->title; ?>" required placeholder="Room Type Title" data-toggle="tooltip" data-placement="top" data-original-title="Enter Room Type Title Here">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-4 control-label">Details: </label>
                    <div class="col-sm-7 controls">
                        <textarea rows="3" name="description" class="form-control" data-toggle="tooltip" data-placement="top" data-original-title="Enter Room Type Details Here"><?= $room_type->description; ?></textarea>
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
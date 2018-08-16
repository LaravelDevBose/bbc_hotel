<div class="row" style="width: 700px;">
	<div class="col-md-12">
		<div class="panel widget">
		    <div class="panel-heading vd_bg-blue">
		        <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-picture-o"></i> </span>News & Event Edit </h3>
		    </div>
		    <div class="panel-body">
			 	<form id="fileupload" class="form-horizontal" autocomplete="off"  action="<?= base_url(); ?>event/update/<?= $event->id ?>" method="POST" enctype="multipart/form-data">
	                <div class="form-group">
	                    <label class="col-sm-3 control-label">Title: </label>
	                    <div class="col-sm-7 controls">
	                        <input type="text" name="title" placeholder="Event Title" required data-toggle="tooltip" data-placement="top" value="<?= $event->title?>" data-original-title="Your Event Title Here">
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label class="col-sm-3 control-label">Date: </label>
	                    <div class="col-sm-7 controls">
	                        <div class="input-group">
	                            <input type="text" name="date" value="<?= date('d M Y', strtotime($event->date))?>" placeholder="Date" id="datepicker-icon" required data-toggle="tooltip"  data-placement="top" data-original-title="Select Event Date Here" >
	                            <span class="input-group-addon" id="datepicker-icon-trigger" data-datepicker="#datepicker-icon"><i class="fa fa-calendar"></i></span> 
	                        </div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-sm-3 control-label">Image: </label>
	                    <div class="col-sm-7 controls">
	                        <span class="btn btn-info fileinput-button" data-toggle="tooltip" data-placement="top" data-original-title="Select your Event Image Here">
	                            <i class="glyphicon glyphicon-plus"></i> 
	                            <span>Event Image</span>
	                            <input type="file" name="image" multiple accept="images/*" >
	                        </span>
	                    </div>
	                    <div class="col-md-3 col-md-offset-4">
	                        <input type="hidden" name="old_image" value="<?= $event->image?>">
	                    	<?php $image = base_url().$event->image; if(!@getimagesize($image)){$image = base_url().'libs/upload_pic/no_image_small.jpg';}?>
	                        <img src="<?= $image; ?>" alt="Image" style="width: 100px height:100px; ">
                        </div>
	                </div>
	                <div class="form-group">
	                    <label class="col-sm-3 control-label">Event Details: </label>
	                    <div class="col-sm-9 controls">
	                        <textarea name="description" id="wysiwyghtml" class="width-100 form-control" required  rows="15" placeholder="Write your message here"><?= $event->description; ?></textarea>
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

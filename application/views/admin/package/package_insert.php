<div class="row">
	<div class="col-md-12">
		<div class="panel widget">
		    <div class="panel-heading vd_bg-blue">
		        <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-picture-o"></i> </span>Package Insert </h3>
		    </div>
		    <div class="panel-body">
			 	<form id="fileupload" class="form-horizontal" autocomplete="off"  action="<?= base_url(); ?>package/store" method="POST" enctype="multipart/form-data">
	                <div class="form-group">
	                    <label class="col-sm-3 control-label">Title: </label>
	                    <div class="col-sm-7 controls">
	                        <input type="text" name="title" placeholder="Package Price" required data-toggle="tooltip" data-placement="top" data-original-title="Your Package Price Here">
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label class="col-sm-3 control-label">Price: </label>
	                    <div class="col-sm-7 controls">
	                        <input type="number" name="price" placeholder="Package Price" required data-toggle="tooltip" data-placement="top" data-original-title="Your Package Price Here">
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
	                </div>
	                <div class="form-group">
	                    <label class="col-sm-3 control-label">Package Details: </label>
	                    <div class="col-sm-9 controls">
	                        <textarea name="description" id="wysiwyghtml" class="width-100 form-control" required  rows="15" placeholder="Write your message here"></textarea>
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

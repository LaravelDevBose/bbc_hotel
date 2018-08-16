<div class="col-md-12">
	<div class="panel widget">
	    <div class="panel-heading vd_bg-blue">
	        <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-picture-o"></i> </span> Logo Image </h3>
	    </div>
	    <div class="panel-body">
			<?php $no_image = base_url().'libs/upload_pic/no_image_small.jpg'; 
				if(isset($logo) && $logo){
					$image = base_url().$logo->value;
					if(!@getimagesize($image)){ $image = $no_image; }
				}
			?>
			<img src="<?= $image; ?>" alt="logo" style="height: 100px; width: 100px;">
		 	<form id="fileupload" action="<?= base_url();?>logo/store_update" method="POST" enctype="multipart/form-data">
		 		<div class="form-group">
		            <div class="col-lg-6"> 
		 				<span class="btn btn-info fileinput-button">
			 				<i class="glyphicon glyphicon-plus"></i> 
			 				<span>Upload Logo Image</span>
			 				<input type="file" name="logo" multiple accept="images/*" data-toggle="tooltip" data-placement="top" data-original-title="Select your Slider Image Here">
		 				</span>
			 			<button type="submit" class="btn btn-success start">
			 				<i class="glyphicon glyphicon-upload"></i> 
			 				<span>Submit</span> 
			 			</button>
		 			
		 			</div>
		 		</div>
		 	</form>
		</div>
	</div>
</div>
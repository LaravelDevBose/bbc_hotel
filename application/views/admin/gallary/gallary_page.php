
<div class="col-md-12">
	<div class="panel widget">
	    <div class="panel-heading vd_bg-blue">
	        <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-picture-o"></i> </span> Gallary Images </h3>
	    </div>
	    <div class="panel-body">

		 	<!-- The file upload form used as target for the file upload widget -->
		 	<form id="fileupload" action="<?= base_url();?>gallary_image_store" method="POST" enctype="multipart/form-data">
		 		<!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
		 		<div class="form-group">
		            <label class="col-sm-1 control-label">Title: </label>
		            <div class="col-sm-5 controls">
		              <input class="width-100" type="text" name="g_title" placeholder="Image Title" data-toggle="tooltip" data-placement="top" data-original-title="Insert your Image Title Here">
		            </div>
		            <div class="col-lg-6"> 
		 				<!-- The fileinput-button span is used to style the file input field as button --> 
		 				<span class="btn btn-info fileinput-button">
			 				<i class="glyphicon glyphicon-plus"></i> 
			 				<span>Upload Gallary Image</span>
			 				<input type="file" name="image" multiple accept="images/*" data-toggle="tooltip" data-placement="top" data-original-title="Select your Slider Image Here">
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
<div class="col-md-12">
    <div class="panel widget">
        <div class="panel-heading vd_bg-grey">
            <h3 class="panel-title"> 
            	<span class="menu-icon"> 
            		<i class="fa fa-dot-circle-o"></i> 
            	</span> Gallary Image list 
            </h3>
        </div>
        <div class="panel-body table-responsive">
            <table class="table table-striped table-hover table-bordered" id="data-tables">
                <thead>
                    <tr>
                        <th>Sl No.</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $i = 1;
                        if($gallarys && isset($gallarys)): 
                            foreach($gallarys as $gallary):
                     ?>
                    <tr class="gradeC">
                        <td><?= $i++; ?></td>
                        <td><?= $gallary->g_title; ?></td>
                        <td>
                            <img src="<?= base_url().$gallary->image ;?>" alt="<?= $gallary->g_title; ?>" style="height: 50px; width: 50px;">
                        </td>
                        <td class="menu-action">
                            <!-- <a data-original-title="view" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bg-green"> <i class="fa fa-eye"></i> </a> 
                            <a data-original-title="edit" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bg-yellow"> <i class="fa fa-pencil"></i> </a>  -->
                            <a href="<?= base_url();?>gallery_image_delete/<?= $gallary->id; ?>" data-original-title="delete" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bg-red" onclick="return confirm('Are You Sure Went to delete this ?')"> <i class="fa fa-times"></i> </a>
                        </td>
                    </tr>
                    <?php endforeach; endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Panel Widget --> 
</div>

<div class="col-md-12">
	<div class="panel widget">
	    <div class="panel-heading vd_bg-blue">
	        <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-picture-o"></i> </span> Material Images </h3>
	    </div>
	    <div class="panel-body">

		 	<!-- The file upload form used as target for the file upload widget -->
		 	<form id="fileupload" action="<?= base_url();?>material/store" method="POST" enctype="multipart/form-data">
		 		<!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
		 		<div class="form-group">
		            <label class="col-sm-1 control-label">Title: </label>
		            <div class="col-sm-5 controls">
		              <input class="width-100" type="text" name="material_name" placeholder="Image Title" data-toggle="tooltip" data-placement="top" data-original-title="Insert your Image Title Here">
		            </div>
		            <div class="col-lg-6"> 
		 				<!-- The fileinput-button span is used to style the file input field as button --> 
		 				<span class="btn btn-info fileinput-button" data-toggle="tooltip" data-placement="top" data-original-title="Select Material Image Here">
			 				<i class="glyphicon glyphicon-plus"></i> 
			 				<span>Upload Material Image</span>
			 				<input type="file" name="image" multiple accept="images/*" >
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
            	</span> Material info list 
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
                        if($materials && isset($materials)): 
                            foreach($materials as $material):
                     ?>
                    <tr class="gradeC">
                        <td><?= $i++; ?></td>
                        <td><?= $material->material_name; ?></td>
                        <td>
                            <img src="<?= base_url().$material->image ;?>" alt="<?= $material->material_name; ?>" style="height: 50px; width: 50px;">
                        </td>
                        <td class="menu-action">
                            
                            <a href="<?= base_url();?>material/delete/<?= $material->id; ?>" data-original-title="delete" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bg-red" onclick="return confirm('Are You Sure Went to delete this ?')"> <i class="fa fa-times"></i> </a>
                        </td>
                    </tr>
                    <?php endforeach; endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Panel Widget --> 
</div>
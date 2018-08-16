
<div class="col-md-12">
	<div class="panel widget">
	    <div class="panel-heading vd_bg-blue">
	        <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-picture-o"></i> </span> Slider Images </h3>
	    </div>
	    <div class="panel-body">

		 	<!-- The file upload form used as target for the file upload widget -->
		 	<form id="fileupload" action="<?= base_url();?>slider/store" method="POST" enctype="multipart/form-data">
		 		<!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
		 		<div class="form-group">
		            <label class="col-sm-1 control-label">Title: </label>
		            <div class="col-sm-5 controls">
		              <input class="width-100" type="text" name="s_title" placeholder="Image Title" data-toggle="tooltip" data-placement="top" data-original-title="Insert your Image Title Here">
		            </div>
		            <div class="col-lg-6"> 
		 				<!-- The fileinput-button span is used to style the file input field as button --> 
		 				<span class="btn btn-info fileinput-button">
			 				<i class="glyphicon glyphicon-plus"></i> 
			 				<span>Upload Slider Image</span>
			 				<input type="file" name="image"  accept="images/*" >
		 				</span>
			 			<button type="submit" class="btn btn-success start">
			 				<i class="glyphicon glyphicon-upload"></i> 
			 				<span>Submit</span> 
			 			</button>
		 			
		 			</div>
		 		</div>
                <p class="text-danger">Slider Image width: 1600px (min) and Height: 800px (min)</p>
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
            	</span> Slider Image list 
            </h3>
        </div>
        <div class="panel-body table-responsive">
            <table class="table table-striped table-hover table-bordered" id="data-tables">
                <thead>
                    <tr>
                        <th># Sl No.</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; if(isset($sliders) && $sliders): foreach($sliders as $slider):?>
                    <tr class="gradeC">
                        <td><?= $i++; ?></td>
                        <td><?= $slider->s_title ;?></td>
                        <td><img src="<?= base_url().$slider->image; ?>" alt="<?= $slider->s_title ;?>" style="width: 100px; height: 60px; "></td>
                        
                        <td class="menu-action center">
                            <!-- <a data-original-title="view" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bg-green"> <i class="fa fa-eye"></i> </a> 
                            <a data-original-title="edit" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bg-yellow"> <i class="fa fa-pencil"></i> </a>  -->
                            <a href="<?= base_url();?>slider/delete/<?= $slider->id; ?>" data-original-title="delete" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bg-red" onclick="return confirm('Are You Sure Went to delete this ?')"> <i class="fa fa-times"></i> </a>
                        </td>
                    </tr>
                    <?php endforeach; endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Panel Widget --> 
</div>
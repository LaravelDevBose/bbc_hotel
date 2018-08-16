
<div class="col-md-12">
	<div class="panel widget">
	    <div class="panel-heading vd_bg-blue">
	        <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-dot-circle-o"></i> </span>Other Business Insert </h3>
	    </div>
	    <div class="panel-body">
		 	<form id="fileupload" class="form-horizontal" autocomplete="off" action="<?= base_url();?>business/store" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="col-sm-1 control-label">Title: </label>
                    <div class="col-sm-5 controls">
                        <input type="text" name="b_title" required placeholder="Business Name" data-toggle="tooltip" data-placement="top" data-original-title="Enter Business Name Here">
                    </div>
                    <label class="col-sm-2 control-label">Image: </label>
                    <div class="col-sm-3 controls">
                        <span class="btn btn-info fileinput-button">
                            <i class="glyphicon glyphicon-plus"></i> 
                            <span>Logo Image</span>
                            <input type="file" name="image" required  accept="images/*" required>
                        </span>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label class="col-sm-1 control-label">Details: </label>
                    <div class="col-sm-9 controls">
                        <textarea rows="7" id="wysiwyghtml" name="description" class="form-control" data-toggle="tooltip" data-placement="top" data-original-title="Enter Business Details Here"></textarea>
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
<div class="col-md-12">
    <div class="panel widget">
        <div class="panel-heading vd_bg-grey">
            <h3 class="panel-title"> 
            	<span class="menu-icon"> 
            		<i class="fa fa-dot-circle-o"></i> 
            	</span> Other Business list 
            </h3>
        </div>
        <div class="panel-body table-responsive">
            <table class="table table-striped table-hover table-bordered" id="data-tables">
                <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Business Title</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; if($business && isset($business)): foreach($business as $busines): ?>
                    <tr class="gradeC">
                        <td><?= $i++ ?></td>
                        <td><?= $busines->b_title; ?></td>
                     
                        <td class="center">
                            <?php $image = base_url().$busines->image; if(!@getimagesize($image)){$image = base_url().'libs/upload_pic/no_image_small.jpg'; }?>
                                <img src="<?= $image?>" alt="<?= $busines->b_title;?>" style="width:60px; height:60px;">
                        </td>
                        <td class="center menu-action">
                            <a href="<?= base_url();?>business/view_page/<?= $busines->id; ?>" data-original-title="view" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bg-green "> <i class="fa fa-eye"></i> </a> 
                            <a href="<?= base_url();?>business/edit_page/<?= $busines->id; ?>" data-original-title="edit" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bg-blue  "> <i class="fa fa-pencil"></i> </a> 
                            <a href="<?= base_url();?>business/delete/<?= $busines->id; ?>" data-original-title="delete" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bg-red" onclick="return confirm('Are You Sure Went to delete this ?')"> <i class="fa fa-times"></i> </a>
                        </td>
                    </tr>
                    <?php endforeach; endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Panel Widget --> 
</div>
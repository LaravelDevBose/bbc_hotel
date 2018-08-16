
<div class="col-md-12">
	<div class="panel widget">
	    <div class="panel-heading vd_bg-blue">
	        <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-picture-o"></i> </span>Service & Price Insert </h3>
	    </div>
	    <div class="panel-body">
		 	<form id="fileupload" class="form-horizontal" action="<?= base_url();?>service/store" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Title: </label>
                    <div class="col-sm-7 controls">
                        <input type="text" name="s_title" required placeholder="Service Title" data-toggle="tooltip" data-placement="top" data-original-title="Enter Service Title Here">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Price: </label>
                    <div class="col-sm-7 controls">
                        <input type="text" name="price" placeholder="Service Price" data-toggle="tooltip" data-placement="top" data-original-title="Enter Service Price Here">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label">Image: </label>
                    <div class="col-sm-7 controls">
                        <span class="btn btn-info fileinput-button">
                            <i class="glyphicon glyphicon-plus"></i> 
                            <span>Service Image</span>
                            <input type="file" name="image"  accept="images/*" required>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Details: </label>
                    <div class="col-sm-7 controls">
                        <textarea rows="3" name="description" class="form-control" data-toggle="tooltip" data-placement="top" data-original-title="Enter Service Details Here"></textarea>
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
            	</span> Service & Price list 
            </h3>
        </div>
        <div class="panel-body table-responsive">
            <table class="table table-striped table-hover table-bordered" id="data-tables">
                <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Service Title</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; if($services && isset($services)): foreach($services as $service): ?>
                    <tr class="gradeC">
                        <td><?= $i++ ?></td>
                        <td><?= $service->s_title; ?></td>
                        <td><?= number_format($service->price)?> Tk.</td>
                        <td class="center">
                            <?php $image = base_url().$service->image; if(!@getimagesize($image)){$image = base_url().'libs/upload_pic/no_image_small.jpg'; }?>
                                <img src="<?= $image?>" alt="<?= $service->s_title;?>" style="width:60px; height:60px;">
                        </td>
                        <td class="center menu-action">
                            <!-- <a href="" data-original-title="view" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bg-green"> <i class="fa fa-eye"></i> </a>  -->
                            <a href="<?= base_url();?>service/edit/<?= $service->id; ?>" data-original-title="edit" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bg-yellow linka fancybox fancybox.ajax"> <i class="fa fa-pencil"></i> </a> 
                            <a href="<?= base_url();?>service/delete/<?= $service->id; ?>" data-original-title="delete" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bg-red" onclick="return confirm('Are You Sure Went to delete this ?')"> <i class="fa fa-times"></i> </a>
                        </td>
                    </tr>
                    <?php endforeach; endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Panel Widget --> 
</div>
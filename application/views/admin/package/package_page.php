

<div class="col-md-12">
    <div class="panel widget">
        <div class="panel-heading vd_bg-green" style="padding: 10px;">
            <h3 class="panel-title"> 
            	<span class="menu-icon"> 
            		<i class="fa fa-dot-circle-o"></i> 
            	</span> Package list 
            </h3>
            <div class="vd_panel-menu">
                <a href="<?= base_url(); ?>package/create" class="btn btn-warning btn-sm pull-right" > <i class="glyphicon glyphicon-plus"></i>  Add Package</a>
            </div>
        </div>
        
        <div class="panel-body table-responsive">
            <table class="table table-striped table-hover table-bordered" id="data-tables">
                <thead>
                    <tr>
                        <th>Sl No.</th>
                        <th>Package Title</th>
                        <th>Package Price</th>
                        <th>Packages Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; if(isset($packages) && $packages): foreach($packages as $package): ?>
                    <tr class="gradeC">
                        <td><?= $i++ ?></td>
                        <td><?= $package->title; ?></td>
                        <td>
                            <?= number_format($package->price); ?>
                        </td>
                        <td class="center">
                            <?php $image = base_url().$package->image; if(!@getimagesize($image)){$image = base_url().'libs/upload_pic/no_image_small.jpg'; }?>
                            <img src="<?= $image; ?>" alt="<?= $package->title; ?>" style="width: 70px; height: 50px;">
                        </td>
                        <td class="menu-action">
                            <a href="<?= base_url();?>package/view_page/<?= $package->id; ?>" data-original-title="view" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bg-green linka fancybox fancybox.ajax"> <i class="fa fa-eye"></i> </a> 
                            <a href="<?= base_url();?>package/edit_page/<?= $package->id; ?>" data-original-title="edit" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bg-blue "> <i class="fa fa-pencil"></i> </a> 
                            <a href="<?= base_url();?>package/delete/<?= $package->id; ?>"    data-original-title="delete" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bg-red" onclick="return confirm('Are You Sure Went to delete this ?')"> <i class="fa fa-times"></i> </a>
                        </td>
                    </tr>
                    <?php endforeach; endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Panel Widget --> 
</div>
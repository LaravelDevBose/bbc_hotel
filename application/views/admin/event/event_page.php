

<div class="col-md-12">
    <div class="panel widget">
        <div class="panel-heading vd_bg-green" style="padding: 10px;">
            <h3 class="panel-title"> 
            	<span class="menu-icon"> 
            		<i class="fa fa-dot-circle-o"></i> 
            	</span> News & Event list 
            </h3>
            <div class="vd_panel-menu">
                <a href="<?= base_url(); ?>event/create" class="btn btn-warning btn-sm pull-right" > <i class="glyphicon glyphicon-plus"></i>  Add News & Event</a>
            </div>
        </div>
        
        <div class="panel-body table-responsive">
            <table class="table table-striped table-hover table-bordered" id="data-tables">
                <thead>
                    <tr>
                        <th>Sl No.</th>
                        <th>Event Title</th>
                        <th>Event Date</th>
                        <th>Event Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; if(isset($events) && $events): foreach($events as $event): ?>
                    <tr class="gradeC">
                        <td><?= $i++ ?></td>
                        <td><?= $event->title; ?></td>
                        <td>
                            <?= date('d M Y', strtotime($event->date)); ?>
                        </td>
                        <td class="center">
                            <?php $image = base_url().$event->image; if(!@getimagesize($image)){$image = base_url().'libs/upload_pic/no_image_small.jpg'; }?>
                            <img src="<?= $image; ?>" alt="<?= $event->title; ?>" style="width: 70px; height: 50px;">
                        </td>
                        <td class="menu-action">
                            <a href="<?= base_url();?>event/view_page/<?= $event->id; ?>" data-original-title="view" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bg-green linka fancybox fancybox.ajax"> <i class="fa fa-eye"></i> </a> 
                            <a href="<?= base_url();?>event/edit_page/<?= $event->id; ?>" data-original-title="edit" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bg-blue linka fancybox fancybox.ajax"> <i class="fa fa-pencil"></i> </a> 
                            <a href="<?= base_url();?>event/delete/<?= $event->id; ?>"    data-original-title="delete" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bg-red" onclick="return confirm('Are You Sure Went to delete this ?')"> <i class="fa fa-times"></i> </a>
                        </td>
                    </tr>
                    <?php endforeach; endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Panel Widget --> 
</div>
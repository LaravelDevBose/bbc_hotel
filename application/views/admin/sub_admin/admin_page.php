

<div class="col-md-12">
    <div class="panel widget">
        <div class="panel-heading vd_bg-green" style="padding: 10px;">
            <h3 class="panel-title"> 
            	<span class="menu-icon"> 
            		<i class="fa fa-dot-circle-o"></i> 
            	</span> Admin Information List 
            </h3>
            <div class="vd_panel-menu">
                <a href="<?= base_url(); ?>admin/create" class="btn btn-warning btn-sm pull-right" > <i class="glyphicon glyphicon-plus"></i>  Add Admin</a>
            </div>
        </div>
        
        <div class="panel-body table-responsive">
            <table class="table table-striped table-hover table-bordered" id="data-tables">
                <thead>
                    <tr>
                        <th>Sl No.</th>
                        <th>Name</th>
                        <th>User Name</th>
                        <th>Email Address</th>
                        <th>Phone Num</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; if(isset($admins) && $admins): foreach($admins as $admin): ?>
                    <tr class="gradeC">
                        <td><?= $i++ ?></td>
                        <td><?= $admin->name; ?></td>
                        <td><?= $admin->username; ?></td>
                        <td><?= $admin->email; ?></td>
                        <td><?= $admin->phone_num; ?></td>
                        <td class="center">
                            <?php $image = base_url().$admin->image; if(!@getimagesize($image)){$image = base_url().'libs/upload_pic/admin_image/admin_defult.jpg' ; }?>
                            <img src="<?= $image; ?>" alt="<?= $admin->name; ?>" style="width: 70px; height: 50px;">
                        </td>
                        <td class="menu-action">
                            
                            <a href="<?= base_url();?>event/edit_page/<?= $admin->id; ?>" data-original-title="edit" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bg-blue "> <i class="fa fa-pencil"></i> </a> 
                            <?php if($this->session->userData('admin_id') != $admin->id): ?>
                            <a href="<?= base_url();?>event/delete/<?= $admin->id; ?>"    data-original-title="delete" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bg-red" onclick="return confirm('Are You Sure Went to delete this ?')"> <i class="fa fa-times"></i> </a>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach; endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Panel Widget --> 
</div>
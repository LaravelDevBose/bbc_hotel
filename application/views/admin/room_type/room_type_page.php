
<div class="col-md-12">
    <div class="panel widget">
        <div class="panel-heading vd_bg-blue">
            <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-picture-o"></i> </span>Room Type Insert </h3>
        </div>
        <div class="panel-body">
            <form id="fileupload" class="form-horizontal" action="<?= base_url();?>room_type/store" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Title: </label>
                    <div class="col-sm-7 controls">
                        <input type="text" name="title" required placeholder="Room Type Title" data-toggle="tooltip" data-placement="top" data-original-title="Enter Room Type Title Here">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-4 control-label">Details: </label>
                    <div class="col-sm-7 controls">
                        <textarea rows="3" name="description" class="form-control" data-toggle="tooltip" data-placement="top" data-original-title="Enter Room Type Details Here"></textarea>
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
                        <th>Title</th>
                        <th>Discription</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; if($room_types && isset($room_types)): foreach($room_types as $room_type): ?>
                    <tr class="gradeC">
                        <td><?= $i++ ?></td>
                        <td><?= $room_type->title; ?></td>
                        <td><?= ucfirst($room_type->description)?></td>
                       
                        <td class="center menu-action">
                           
                            <a href="<?= base_url();?>room_type/edit/<?= $room_type->id; ?>" data-original-title="edit" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bg-yellow linka fancybox fancybox.ajax"> <i class="fa fa-pencil"></i> </a> 
                            <a href="<?= base_url();?>room_type/delete/<?= $room_type->id; ?>" data-original-title="delete" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bg-red" onclick="return confirm('Are You Sure Went to delete this ?')"> <i class="fa fa-times"></i> </a>
                        </td>
                    </tr>
                    <?php endforeach; endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Panel Widget --> 
</div>
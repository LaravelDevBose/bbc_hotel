

<div class="col-md-12">
    <div class="panel widget">
        <div class="panel-heading vd_bg-green" >
            <h3 class="panel-title"> 
            	<span class="menu-icon"> 
            		<i class="fa fa-dot-circle-o"></i> 
            	</span> Booking information list 
            </h3>
            
        </div>
        
        <div class="panel-body table-responsive">
            <table class="table table-striped table-hover table-bordered" id="data-tables">
                <thead>
                    <tr>
                        <th>Sl No.</th>
                        <th>Name</th>
                        <th>Company Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Area</th>
                        <th>Room Type</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i= 1; if($booking_list && isset($booking_list)): foreach($booking_list as $data):?>
                    <tr class="gradeC">
                        <td><?= $i++ ?></td>
                        <td><?= ucfirst($data->persone_name); ?></td>
                        <td><?= ucfirst($data->cmpy_name); ?></td>
                        <td><?= $data->email; ?></td>
                        <td><?= $data->phone_num; ?></td>
                        <td><?= $data->name; ?></td>
                        <td><?= $data->title; ?></td>
                        
                        <td class="menu-action">
                            <a href="<?= base_url();?>booking_view/<?= $data->id; ?>" data-original-title="view" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bg-green linka fancybox fancybox.ajax"> <i class="fa fa-eye"></i> </a> 
                            
                        </td>
                    </tr>
                    <?php endforeach; endif;  ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Panel Widget --> 
</div>
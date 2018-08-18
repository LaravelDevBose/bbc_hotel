

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
                        <th>Reference</th>
                        <th>Area</th>
                        <th>Room Type</th>
                        <th>Room Qty</th>
                        <th>Check In</th>
                        <th>Check Out</th>
                        <th>Adults</th>
                        <th>Childen</th>
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
                        <td><?= $data->reference; ?></td>
                        <td><?= $data->name; ?></td>
                        <td><?= $data->title; ?></td>
                        <td><?= $data->room_qty; ?></td>
                        <td><?= date('d M y', strtotime($data->start_date)); ?></td>
                        <td><?= date('d M y', strtotime($data->end_date)); ?></td>
                        <td><?= $data->adults; ?></td>
                        <td><?= $data->children; ?></td>
                    </tr>
                    <?php endforeach; endif;  ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Panel Widget --> 
</div>
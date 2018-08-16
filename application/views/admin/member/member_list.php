

<div class="col-md-12">
    <div class="panel widget">
        <div class="panel-heading vd_bg-green" >
            <h3 class="panel-title"> 
            	<span class="menu-icon"> 
            		<i class="fa fa-dot-circle-o"></i> 
            	</span> Member information list 
            </h3>
            
        </div>
        
        <div class="panel-body table-responsive">
            <table class="table table-striped table-hover table-bordered" id="data-tables">
                <thead>
                    <tr>
                        <th>Sl No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i= 1; if($members && isset($members)): foreach($members as $member):?>
                    <tr class="gradeC">
                        <td><?= $i++ ?></td>
                        <td><?= ucfirst($member->name); ?></td>
                        <td><?= $member->email; ?></td>
                        <td><?= $member->phone_num; ?></td>
                        <td><?= $member->message?></td>
                    </tr>
                    <?php endforeach; endif;  ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Panel Widget --> 
</div>
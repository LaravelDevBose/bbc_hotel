
<div class="col-md-12">
	<div class="panel widget">
	    <div class="panel-heading vd_bg-blue">
	        <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-picture-o"></i> </span> Area Wise Room Type Add </h3>
	    </div>
	    <div class="panel-body">

		 	<!-- The file upload form used as target for the file upload widget -->
		 	<form id="fileupload" action="<?= base_url();?>area_room_type/store" method="POST" >
		 		<!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
		 		<div class="form-group">
		            <label class="col-sm-2 control-label">Area Name: </label>
		            <div class="col-sm-3 ">
                        <select class="selectpicker" name="area_id" required data-show-subtext="true" data-live-search="true">
                            <?php if($areas && isset($areas)): foreach($areas as $area):?>
                            <option value="<?= $area->id; ?>"><?= $area->name; ?></option>
                            <?php endforeach; endif; ?>
                        </select>
		            </div>

                    <label class="col-sm-2 control-label">Room Type: </label>
                    <div class="col-sm-3 ">
                        <select class="selectpicker" name="room_type_id" required data-show-subtext="true" data-live-search="true">
                            <?php if($room_types && isset($room_types)): foreach($room_types as $room_type):?>
                            <option value="<?= $room_type->id; ?>"><?= $room_type->title; ?></option>
                            <?php endforeach; endif; ?>
                        </select>
                    </div>

		            <div class="col-lg-2"> 
			 			<button type="submit" class="btn btn-success start">
			 				<i class="glyphicon glyphicon-upload"></i> 
			 				<span>Submit</span> 
			 			</button>
		 			</div>
		 		</div>
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
            	</span> Area Wish Room Type list 
            </h3>
        </div>
        <div class="panel-body table-responsive">
            <table class="table table-striped table-hover table-bordered" id="data-tables">
                <thead>
                    <tr>
                        <th>Sl No.</th>
                        <th>Area Name</th>
                        <th>Room Type</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $i = 1;
                        if($all_data && isset($all_data)): 
                            foreach($all_data as $data):
                     ?>
                    <tr class="gradeC">
                        <td><?= $i++; ?></td>
                        <td><?= $data->name; ?></td>
                        <td><?= $data->title; ?></td>
                       
                        <td class="menu-action">
                            <!-- <a data-original-title="view" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bg-green"> <i class="fa fa-eye"></i> </a> 
                            <a data-original-title="edit" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bg-yellow"> <i class="fa fa-pencil"></i> </a>  -->
                            <a href="<?= base_url();?>area_room_type/delete/<?= $data->id; ?>" data-original-title="delete" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bg-red" onclick="return confirm('Are You Sure Went to delete this ?')"> <i class="fa fa-times"></i> </a>
                        </td>
                    </tr>
                    <?php endforeach; endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Panel Widget --> 
</div>
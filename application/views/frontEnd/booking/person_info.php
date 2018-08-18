<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="panel panel-info">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Booking Information</h3>
			  	</div>
			  	<div class="panel-body">
			  		<ul class="list-group">
			  			<?php 
				  			$areaName = $this->db->where('id', $this->session->userData('area_id'))->get('areas')->row(); 
				  			$room_type = $this->db->where('id', $this->session->userData('room_type'))->get('room_types')->row(); 
			  			?>
						<li class="list-group-item"><strong>Area Name: </strong><?= $areaName->name; ?></li>
						<li class="list-group-item"><strong>Room Type: </strong><?= $room_type->title; ?></li>
						<li class="list-group-item"><strong>Room QTY: </strong><?= $this->session->userData('room_qty')  ?></li>
						<li class="list-group-item"><strong>Check In: </strong><?= $this->session->userData('start_date')  ?></li>
						<li class="list-group-item"><strong>Check Out: </strong><?= $this->session->userData('end_date')  ?></li>
						<li class="list-group-item"><strong>Adults: </strong><?= $this->session->userData('adults')  ?></li>
						<li class="list-group-item"><strong>Children: </strong><?= $this->session->userData('children')  ?></li>
						
					</ul>
			  	</div>
			</div>
		</div>
		<div class="col-md-8">
			<div class="panel panel-info">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Personal Information</h3>
			  	</div>
			  	<div class="panel-body">
					<form action="<?= base_url();?>booking/store" method="POST" style="z-index:9998;">
						<div class="flex-row form-row">
							<div class="col-md-12">
								<div class="col-md-6">
								<!--date picker arrival-->
									<div class="hg-form-component-input form-group">
										<label for="reservation-area">Your Name</label>
										<div class='input-group'>
						                  	<input id="reservation-startdate" type='text' name="persone_name" required class="form-control" value placeholder="Your Name"/>

						              	</div>
						          	</div>
								</div>
								<div class="col-md-6">
								<!--date picker arrival-->
									<div class="hg-form-component-input form-group">
										<label for="reservation-area">Company Name</label>
										<div class='input-group'>
						                  	<input id="reservation-startdate" type='text'  name="cmpy_name" required class="form-control" value placeholder="Company Name"/>

						              	</div>
						          	</div>
								</div>
							</div>


							<div class="col-md-12">
								<div class="col-md-6">
								<!--date picker arrival-->
									<div class="hg-form-component-input form-group">
										<label for="reservation-area">Phone Number</label>
										<div class='input-group'>
						                  	<input id="reservation-startdate" type='text' name="phone_num" required class="form-control" value placeholder="Phone Number"/>

						              	</div>
						          	</div>
								</div>
								<div class="col-md-6">
								<!--date picker arrival-->
									<div class="hg-form-component-input form-group">
										<label for="reservation-area">Email Address</label>
										<div class='input-group'>
						                  	<input id="reservation-startdate" type='text' name="email" required class="form-control" value placeholder="Email Address"/>

						              	</div>
						          	</div>
								</div>
								<div class="col-md-6">
								<!--date picker arrival-->
									<div class="hg-form-component-input form-group">
										<label for="reservation-area">Reference</label>
										<div class='input-group'>
						                  	<input id="reservation-startdate" type='text' name="reference"  class="form-control" value placeholder="Reference"/>

						              	</div>
						          	</div>
								</div>

							</div>
							<!--Coloana submit -->
							<div class="col-md-4 col-md-offset-8">
								<div class="hg-form-component">
									<button class="hb_btn btn-gradient" type="submit"> Confirm Booking</button>
								</div>
							</div>
						</div>
					</form>
			  	</div>
			</div>
		</div>
	</div>
</div>
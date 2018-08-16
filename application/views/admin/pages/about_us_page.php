<div class="row">
	<div class="col-md-12">
		<div class="panel widget">
		    <div class="panel-heading vd_bg-blue">
		        <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-picture-o"></i> </span>About Us Information </h3>
		    </div>
		    <div class="panel-body">
			 	<form  class="form-horizontal" action="<?= base_url();?>about_us/update" method="POST" >
	                <div class="form-group">
	                    <div class="col-sm-12 controls">
	                        <textarea id="wysiwyghtml" name="about_us" required class="width-100 form-control"  rows="15" placeholder="Write your message here"><?php if($about_us && isset($about_us)){echo $about_us->value; }?></textarea>
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
</div>
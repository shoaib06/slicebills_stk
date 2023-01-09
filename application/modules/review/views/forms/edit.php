<!-- MAIN CONTENT-->
<div class="main-content" style="margin-top:80px">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="">
				<div class="col-md-12">
					<div class="overview-wrap">
						
					</div>
				</div>
			</div>
			<div class="row row m-t-25">

				<div class="col-md-12">
					<div class="col-lg-12">
					
						<?php 
							if($this->session->flashdata('flash_message'))
							{ ?>
								<div class="sufee-alert alert with-close alert-<?php echo $this->session->flashdata('class'); ?> alert-dismissible fade show">
									 <?php echo $this->session->flashdata('flash_message'); ?> 
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">×</span>
									</button>
								</div>
								<?php
							}
							if((validation_errors()))
							{
								?>
								<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
									<?php echo validation_errors(); ?>
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">×</span>
									</button>
								</div>	
								<?php
							}
						?>
						<div class="col-md-12">
						  <div class="card">
							<div class="card-header card-header-primary">
							  <h4 class="card-title"><h2 class="title-1"><?php echo ucfirst($module_title); ?></h2></h4>
							 
							</div>
							<div class="card-body">
							  <form action="<?php echo base_url($module.'/admin/edit/'.$id) ?>"  method="POST" enctype="multipart/form-data" >
								  
								<div class="row">
								  <div class="col-md-6">
									<div class="form-group bmd-form-group">
									  <label class="bmd-label-floating">Name</label>
									  <input type="text" class="form-control" name="name" value="<?=$name?>">
									</div>
								  </div>
								  <div class="col-md-6">
									<div class="form-group bmd-form-group">
									  <label class="bmd-label-floating">Email</label>
									  <input type="text" class="form-control" name="email" value="<?=$email?>" >
									</div>
								  </div>
								</div>
								<div class="row">
								  <div class="col-md-6">
									<div class="form-group bmd-form-group">
									  <label class="bmd-label-floating">Address</label>
									  <input type="text" class="form-control" min="1"  name="address" value="<?=$address?>">
									</div>
								  </div>
								  <div class="col-md-6">
									<div class="form-group bmd-form-group">
									  <label class="bmd-label-floating">Rating</label>
									  <input type="number" class="form-control" min="1" max="5" name="rating" value="<?=$rating?>" >
									</div>
								  </div>
								</div>
								
								<div class="row">
								  
								  <div class="col-md-12">
									<div class="form-group bmd-form-group">
									  <label class="bmd-label-floating">Description</label>
									  <textarea type="text" class="form-control"  name="description" ><?php echo $description; ?></textarea>
									</div>
								  </div>
								</div>
								<div class="row">
								  
								  <div class="col-md-6">
									<div class="form-file-upload form-file-simple">
										<label class="bmd-label-floating">Image</label>
										<input type="file" class="" name="image">
										<input type="hidden" class="" name="s" value="s">
									</div>
									
								  </div>
								  <?php
								  if(!empty($image))
								  {
								  ?>
									<div class="col-md-6 single_image">
										<div class="form-file-upload form-file-simple">
											<input type="hidden" name="upload_image" value="<?php echo $image; ?>">
											<img src="<?php echo base_url('uploads/'.$image);?>">
											<span class="profile_close_image"><i class="material-icons" style="margin-right:200px">close</i></span>
										</div>
									
									</div>
								  <?php } ?>
								</div>
								
								<button type="submit" class="btn btn-primary pull-right">Submit</button>
								<div class="clearfix"></div>
							  </form>
							</div>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
$(document).on('click','.profile_close_image',function(e)
{
	e.preventDefault();
	$(this).parents('.single_image').remove();
});
</script>
<style>
.close_image 
{
    display: inline-block;
    position: absolute;
    top: 0;
    right: 15px;
	cursor: pointer;
}
.profile_close_image 
{
    display: inline-block;
    position: absolute;
    top: 0;
    right: 15px;
	cursor: pointer;
}
.hide
{
	display: none;
} 
.hides
{
	display: none;
} 
</style>
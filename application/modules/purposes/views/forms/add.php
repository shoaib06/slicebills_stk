<!-- MAIN CONTENT-->
<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="">
				<div class="col-md-12">
					<div class="overview-wrap">
						<h2 class="title-1"><?php echo $module_title; ?></h2>
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
						
						
						
						<div class="card">
							<form action="<?php echo base_url($module.'/admin/add') ?>" method="POST">
								<div class="card-header">
									<strong><?php echo $module; ?></strong>
									<small> Form</small>
								</div>
								<div class="card-body card-block">
									
									<div class="row form-group">
										<div class="col-12">
											<div class="form-group">
												<label for="title" class=" form-control-label">Title</label>
												<input type="text" id="title" name="title" value="<?=set_value('title')?>" placeholder="Enter title" class="form-control">
											</div>
										</div>

									</div>
								</div>
								<div class="card-footer" align="right">
									<input type="hidden" name="s" value="OK">
									<button type="submit" class="btn btn-primary btn-sm">
										<i class="fa fa-dot-circle-o"></i> Submit
									</button>
								</div>
							</form>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<style>
.select2-container
{
	display: block !important;
}
.select2-container--default .select2-selection--single {
   min-height: 38px;
}
</style>
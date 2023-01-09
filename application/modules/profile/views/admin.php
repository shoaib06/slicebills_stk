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
								<form action="<?php echo base_url($module.'/admin/update_admin_profile/') ?>" method="POST" enctype="multipart/form-data">
									
									<div class="card-body card-block">
										
										<div class="row form-group">
											<div class="col-6">
												<div class="form-group">
													<label>Name:<span class="required"> * </span></label>
													<input type="text" value="<?= $row->name; ?>" name="name" class="form-control"/>
												</div>
											</div>
											<div class="col-6">
												<div class="form-group">
													<label>Email:<span class="required"> * </span></label>
													<input type="text" readonly value="<?= $row->email; ?>" name="email" class="form-control"/> 
												</div>
											</div>
											<div class="col-6">
												<div class="form-group">
													<label>Password:<span class="required"> * </span></label>
													<input type="password" name="password" class="form-control"/>
												</div>
											</div>
										</div>
									</div>
									<div class="card-footer pull-right" align="right">
										<input type="hidden" name="s" value="OK">
										<button type="submit" class="btn btn-primary pull-right">Submit</button>
									</div>
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

<!-- MAIN CONTENT-->
<div class="main-content " style="margin-top:80px">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="overview-wrap mr-3">
						<!--<a class="btn btn-success pull-right" href="<?php echo base_url('pages/admin/add');?>" >Add New+</a>-->
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-md-12">
				<?php if($this->session->flashdata('flash_message'))
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
					}?>
				<div class="card">
					<div class="card-header card-header-primary">
						<h4 class="card-title "><?php echo $module_title; ?></h4>
						<p class="card-category"> </p>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table">
								<thead class=" text-primary">
									<tr>
										<th>Title</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php if($results): ?>
									<?php foreach($results as $result): ?>
										<tr>
											
											<td><?php echo ucfirst($result['title'])?></td>
											
											<td>
												<div class="td-actions">
													<button class="btn btn-success edit nw_clicks" rel="tooltip" data-toggle="tooltip" pid="<?php echo $result['id'] ?>" data-placement="top" title="" data-original-title="Edit">
														<a href="<?php echo base_url($module.'/admin/edit/'.$result['id']); ?>" ><i class="material-icons" style="color:white ">edit</i></a>
													</button>
													
													
													
													<!--<button class="btn btn-danger" data-toggle="tooltip" rel="tooltip" pid="<?php echo $result['id'] ?>" data-placement="top" title="" data-original-title="Delete">
														<i class="material-icons">trash</i></i>
													</button>
													
												</div>
											</td>-->
										
										</tr>
									<?php endforeach; ?>
									<?php else:?>
											<tr>
												<td style="text-align: center;" colspan="15">Data not found.</td>
											</tr>
									<?php endif; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
            </div>
		</div>
	</div>
</div>

	<!-- modal medium -->

	<!-- end modal medium -->
<style>
.rs-select2--sm {
    width: 114px;
}
.select2-container {
    display: block !important;
}
</style>
<link href="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/css/datepicker.css" rel="stylesheet" media="all">
<script src="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/datepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/i18n/datepicker.en.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>

<script>

/* All script of same page will go here */
$('.date').datepicker({
    language: 'en',
	inline: true,
	dateFormat: "dd-mm-yyyy",
    minDate: new Date(), // Now can select only dates, which goes after today
	onSelect: function(formattedDate, date, inst)
	{
		$(document).find('input[name="hold_date"]').val(formattedDate);
	}
})


	
$(document).on('click','.delete',function(e) // Delete category
	{
		e.preventDefault();
		var id = $(this).attr('pid');
		$.confirm({
			title: 'Confirm!',
			content: 'Are you sure to delete?',
			buttons: {
				confirm: function () 
				{
					var data = "type=delete&id="+id;
					var path = "<?php echo $module ?>/admin/delete"
					var result = CallAjax(path,data);
					modalbox(result);
				},
				cancel: function () {
					
				},
			}
		});
	});	



</script>
<!-- END MAIN CONTENT-->
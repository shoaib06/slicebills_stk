<div class="main-content" style="margin-top: 80px;">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<!-- <div class="">
                <div class="col-md-12"><?php $this->load->view('filters'); ?></div>
            </div> -->
			<!--
			<div class="">
				<div class="col-md-12">
					<div class="overview-wrap">
						<button class="btn btn-primary pull-right">Download CSV</button>
					</div>
				</div>
			</div>
			-->
			<div class="clearfix"></div>
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
			<div class="col-md-12">
				<div class="card">
					<div class="row card-header card-header-primary">
						<div class="col-md-6">
							<h4 class="card-title"><?php echo "Do not sell"; ?></h4>
							<p class="card-category"></p>
						</div>
						<!-- <div class="col-md-6">
							<a href="<?php echo base_url($module . '/admin/add') ?>" class="btn btn-success pull-right">Add New</a>
						</div> -->
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table dataTable">
								<thead class="text-primary">
									<tr>
										<!-- <th>Name</th> -->
										<th>Email</th>
										<th>Request Type</th>
										<th>Requested By</th>
										<!-- <th>State</th>
										<th>Zip</th> -->
										
										<th>Created At</th>
									</tr>
								</thead>
								<tbody>
								<?php if($results): ?>
									<?php foreach($results as $result): ?>
										
											
											<!-- <td><?php echo $result['name']; ?></td> -->
											<td><?php echo $result['email']; ?></td>
											<td><?php echo ucwords($result['type_of_request']); ?></td>
											<td><?php echo ucwords($result['request_on']); ?></td>
											<!-- <td><?php echo $result['state']; ?></td>
											<td><?php echo $result['zip']; ?></td> -->
											
											<td><?php echo date('d-M-Y', $result['timestamp']) ?></td>

											
										</tr>
									<?php endforeach; ?>
									<?php else:?>
											<tr>
												<td style="text-align: center;" colspan="7">Data not found.</td>
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
<link href="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/css/datepicker.css" rel="stylesheet" media="all" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/datepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/i18n/datepicker.en.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>

<script>
	/* All script of same page will go here */
	$(".date").datepicker({
		language: "en",
		inline: true,
		dateFormat: "dd-mm-yyyy",
		minDate: new Date(), // Now can select only dates, which goes after today
		onSelect: function(formattedDate, date, inst) {
			$(document).find('input[name="hold_date"]').val(formattedDate);
		},
	});

	// $(document).on("click", ".delete", function(e) {
	// 	e.preventDefault();
	// 	var id = $(this).attr("pid");

		

	// 	$.confirm({
	// 		title: "Confirm!",
	// 		content: "Are you sure to delete?",
	// 		buttons: {
	// 			confirm: function() {
	// 				// var data = "type=delete&id=" + id;
	// 				// var path = "<?php echo $module ?>/admin/delete";
	// 				// var result = CallAjax(path, data);
	// 				// modalbox(result);
	// 				var id = $(this).attr("pid");
	// 				debugger
	// 				let url ="<?php echo base_url($module.'/admin/delete/'); ?>"+id;
	// 				// window.location.href = "<?php echo base_url($module.'/admin/delete/'); ?>"+id;
					
	// 			},
	// 			cancel: function() {},
	// 		},
	// 	});
	// });
	$('.dataTable').DataTable({order:[[3,"asc"]]});
</script>
<!-- END MAIN CONTENT-->
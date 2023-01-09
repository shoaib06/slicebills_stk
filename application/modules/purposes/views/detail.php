<!-- MAIN CONTENT-->
<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="overview-wrap">
						<h2 class="title-1"><?php echo $module_title; ?></h2>
						<button  class="au-btn au-btn-icon au-btn--green au-btn--small nw_clicks">
							<a  style="color: #fff;" href="<?php echo base_url($module.'/admin/add') ?>"><i class="zmdi zmdi-plus"></i>Add New</a>
						</button>
						
					</div>
				</div>
			</div>
			<div class="row row m-t-25">
				<div class="col-md-12">
					<!-- DATA TABLE-->
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
					?>
					<div class="table-responsive m-b-40">
						<table class="table table-borderless table-data3">
							<thead>
								<tr>
									<th>Title</th>
									<th>action</th>
								</tr>
							</thead>
							<tbody>
								<?php if($results): ?>
									<?php foreach($results as $result): ?>
										<?php $status = empty($result['active']) ? "" : "checked"; ?>
										<tr>
											<td><?php echo ucfirst($result['title']); ?></td>
										
											<td>
												<div class="table-data-feature">
													<button class="item edit nw_clicks" data-toggle="tooltip" pid="<?php echo $result['id'] ?>" data-placement="top" title="" data-original-title="Edit">
														<a href="<?php echo base_url($module.'/admin/edit/'.$result['id']); ?>" ><i class="zmdi zmdi-edit"></i></a>
													</button>
													<!--
													<button class="item delete_category" data-toggle="tooltip" pid="<?php echo $result['id'] ?>" data-placement="top" title="" data-original-title="Delete">
														<i class="zmdi zmdi-delete"></i>
													</button>
													-->
												</div>
												
											</td>
										</tr>
									<?php endforeach; ?>
									<?php else:?>
											<tr>
												<td style="text-align: center;" colspan="7">Data not found.</td>
											</tr>
											
								<?php endif; ?>
							</tbody>
						</table>
						<div class = "pagination green">
							<?php echo $pagination; ?>
						</div>
					</div>
					<!-- END DATA TABLE-->
				</div>
			</div>
		</div>
	</div>
</div>

<script>

/* All script of same page will go here */

$(document).on('click','.delete_category',function(e) // Delete category
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

$(document).on('change','input.change_status',function()
	{
		var value = 0;
		if($(this).is(':checked')) 
		{
			value = 1;
		}
		var type = $(this).val();
		var pid = $(this).attr('pid');
		var data = "value="+value+"&type="+type+"&pid="+pid;
		var path = "<?php echo $module ?>/admin/change_status"
		var result = CallAjax(path,data);
		//modalbox(result);
	});

</script>
<!-- END MAIN CONTENT-->
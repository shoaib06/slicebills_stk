// author: Subhash Shipu
// email/skype: provider.nexus@gmail.com


function CallAjax(PATH,data)
	{
		var result;
		var BASE_URL = $(document).find('#base_url').val();
		$.ajax(
		{
			type: "POST",
			url: BASE_URL+PATH,
			data: data,
			dataType: "json",
			async:false,
			success: function(resp)
			{
				result = resp;
			}
		});
		return result;
	}	
	
function refreshmodal()
	{
		$('#MyModal').find('.modal-title').html('');
		$('#MyModal').find('.modal-body').html('');
		$('#MyModal').find('.modal-footer span').html('');
	}
	
function modalbox(result)
	{
		refreshmodal()
		if(result.type == "modal" )
		{
			$('#MyModal').find('.modal-title').html(result.title);
			$('#MyModal').find('.modal-body').html(result.html);
			$('#MyModal').find('.modal-footer span').html(result.button);
		}
		else 
		{
			if(result.status == "success" )
			{
				$('#MyModal').find('.modal-title').html('Success');
				$('#MyModal').find('.modal-body').html(result.html);
			}
			else
			{
				$('#MyModal').find('.modal-title').html('Error');
				$('#MyModal').find('.modal-body').html(result.html);
			}
			
			setTimeout(function()
			{
					window.location.reload();
			},1500)
			
		}
		$('#MyModal').modal();
	}

function validateForm(id) // fom empty validation ;
	{
		var count = 0;
		$(id).find('form input.imp').each(function()
			{
				var val = $(this).val()
				if(val == "")
				{
					$(this).addClass('red');
					count++;
				}
			});
		if(count > 0)
		{
			return false ;
		}
		else
		{
			return true ;
		}			
	}
	
$(document).on('focus','.imp',function(e)
	{
		e.preventDefault();
		$(this).removeClass('red');
	})		

function showLoader()
	{
		$(document).find('.ajax_loader').show();
	}	
$(document).on('click','.nw_clicks',function() 
	{
		var url = $(this).find('a').attr('href');
		location.href = url;
	});
	
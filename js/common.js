var date = new Date();
$('#week_branch').text($('.week_button.active').text())
var dep_index = 0

$(function() {
	var schedule_array = 0;
	$('.schedule_group_item').click(function(){
		console.log(schedule_array)
		if($(this).hasClass('active'))
		{
			if(schedule_array>=1)
			{
				schedule_array = 1
			}
			schedule_array--
			$(this).removeClass('active');
			$('.schedule_box_array.active .schedule_box').eq(parseInt($(this).index())).removeClass('active')
		}
		else
		{	if(schedule_array>=1)
			{
				schedule_array = 1
				$('.schedule_group_item.active').eq(0).removeClass('active');
				$('.schedule_box.active').eq(0).removeClass('active');
			}
			schedule_array++
			$(this).addClass('active');
			if (is_mobile()) {
			$('.schedule_box_array').eq(dep_index).addClass('active')
			$('.respons_rememb').show(300)
			}
			$('.schedule_box_array.active .schedule_box').eq(parseInt($(this).index())).addClass('active')
		}
	});

	$('.control_buttons').click(function()
	{
		var index_button = $(this).index()
		$('.control_dir').hide(300)
		$('.control_dir').eq(index_button-1).show(300)
		$('.control_buttons').removeClass('active')
		$(this).addClass('active')
	});

	$('.nav_button').click(function(){
		clear_schudule_active();
		
		$('.schedule_group_array').eq($(this).index()).addClass('active')
		if (!is_mobile()) {
		$('.schedule_box_array').eq($(this).index()).addClass('active')
		}
		dep_index = $(this).index()
		$(this).addClass('active')
		$('.teach_list').hide(300)
		$('.schudule_teacher').hide(300)
		schedule_array = 0
	});
	$(document).mouseup(function (e) {

		var change_button = $('.change_window');
		if (change_button.has(e.target).length === 0) {
			change_button.hide(300);
		}

		var delete_button = $('.delete_window');
		if (delete_button.has(e.target).length === 0) {
			delete_button.hide(300);
		}

		var hic = $('.hic');
		if (hic.has(e.target).length === 0) {
			hic.hide(300);
		}
	})

	$('.change_button').click(function(){
		$('.change_window').hide(300)
		$(this).parent().find('.change_window').show(300)
	});

	$('.C_show_delete_wind').click(function(){
		$('.delete_window').hide(300);
		$(this).parent().find('.delete_window').show(300);
	});

	$('.C_close_delete_wind').click(function(){
		$('.delete_window').hide(300);
	});

	$('.create_button').click(function(){
		$('.form_create_user').show(300);
	});

	$('.cancel_button').click(function(){
		$('.form_create_user').hide(300);
	});

	if($('.schedule_block').innerHeight()>450)
	{
		$('.schedule_push').show(300)
	}

	var schedule_bottom = 0
	$('.schedule_up').click(function(){
		if (schedule_bottom-100 >= 0) {
			$('.schedule_scroll').css('bottom',schedule_bottom-100)
			schedule_bottom -=100
		}
	});

	$('.schedule_down').click(function(){
		if (schedule_bottom+50 <= $('.schedule_block').innerHeight()/2) {
			$('.schedule_scroll').css('bottom',schedule_bottom+100)
			schedule_bottom += 100
		}
	});

	$('.show_group').click(function(){
		if ($(this).hasClass('active')) {
			$(this).parent().find('.alfov_block').hide(300)
			$(this).removeClass('active')
		}
		else
		{
			$(this).parent().find('.alfov_block').show(300)
			$(this).addClass('active')
		}
		
	});
});

function clear_schudule_active() {
	$('.nav_button').removeClass('active')
	$('.schedule_box_array').removeClass('active')
	$('.schedule_box').removeClass('active')
	$('.schedule_group_item').removeClass('active')
	$('.schedule_group_array').removeClass('active')
	$('.schedule_box').hide(300)
}

function is_mobile() {
	if (document.documentElement.clientWidth <= 768) {
		return true;
	}
	else
	{
		return false;
	}
}
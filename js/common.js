var date = new Date(2018,0.3);
$('.week_button').eq(date.getDay()).addClass('active');
$('#week_branch').text($('.week_button.active').text())

$(function() {
	var schedule_array = 0;
	$('.schedule_group_item').click(function(){
		console.log(schedule_array)
		if($(this).hasClass('active'))
		{
			if(schedule_array>=4)
			{
				schedule_array = 4
			}
			schedule_array--
			$(this).removeClass('active');
			$('.schedule_box_array.active .schedule_box').eq(parseInt($(this).index())).removeClass('active')
		}
		else
		{	if(schedule_array>=4)
			{
				schedule_array = 4
				$('.schedule_group_item.active').eq(0).removeClass('active');
				$('.schedule_box.active').eq(0).removeClass('active');
			}
			schedule_array++
			$(this).addClass('active');
			$('.schedule_box_array.active .schedule_box').eq(parseInt($(this).index())).addClass('active')
		}
	});


	$('.nav_button').click(function(){
		$('#nav_branch').text($(this).attr('alt'))
		$('.nav_button').removeClass('active')
		$('.schedule_group_array').removeClass('active')
		$('.schedule_group_array').eq($(this).index()).addClass('active')
		$('.schedule_box_array').removeClass('active')
		$('.schedule_box_array').eq($(this).index()).addClass('active')
		$(this).addClass('active')
		schedule_array = 0
		$('.schedule_box').removeClass('active')
		$('.schedule_group_item').removeClass('active');
	});
	$('.week_button').click(function(){
		$('#week_branch').text($(this).text())
		$('.week_button').removeClass('active')
		$('.schedule_box').removeClass('active')
		$('.schedule_group_item').removeClass('active');
		schedule_array = 0
		$(this).addClass('active')
	});
});

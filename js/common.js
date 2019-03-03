$(function() {
	var schedule_array = 0;
	$('.schedule_group_item').click(function(){
		console.log(schedule_array)
		if($(this).hasClass('active'))
		{
			if(schedule_array>=5)
			{
				schedule_array = 5
			}
			schedule_array--
			$(this).removeClass('active');
			$('.schedule_box').eq(parseInt($(this).index())).removeClass('active')
		}
		else
		{	if(schedule_array>=5)
			{
				schedule_array = 5
				$('.schedule_group_item.active').eq(0).removeClass('active');
				$('.schedule_box.active').eq(0).removeClass('active');
			}
			schedule_array++
			$(this).addClass('active');
			$('.schedule_box').eq(parseInt($(this).index())).addClass('active')
		}
	});

	$('.nav_button').click(function(){
		$('#nav_branch').text($(this).text())
		$('.nav_button').removeClass('active')
		$(this).addClass('active')
	});
	$('.week_button').click(function(){
		$('#week_branch').text($(this).text())
		$('.week_button').removeClass('active')
		$(this).addClass('active')
	});
});

function changFrag()
{
	$('#slide').on('click', 'span.chx', function() {
		var idFrag = $(this).attr('id');
		$('.ui-tabs-panel').attr('class', 'ui-tabs-panel ui-tabs-hide');
		$('#frag'+idFrag).removeAttr('class', 'ui-tabs-hide');
		$('#frag'+idFrag).attr('class', 'ui-tabs-panel');
	});
	
}

function sousMenu()
{
	$('li.select-tab').hover(function() {
		$(this).children('.tab-content').show();	
	}, function() {
		$(this).children('.tab-content').hide();
	});
}

function autoChangFrag()
{
	$('#slide').ready(function() {
		
	});
}

$(sousMenu);
$(autoChangFrag);
$(changFrag);
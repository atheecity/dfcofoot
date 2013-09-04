function changFrag()
{
	$('#slide').on('click', 'span.chx', function() {
		var idFrag = $(this).attr('id');
		$('.ui-tabs-panel').attr('class', 'ui-tabs-panel ui-tabs-hide');
		$('#frag'+idFrag).removeAttr('class', 'ui-tabs-hide');
		$('#frag'+idFrag).attr('class', 'ui-tabs-panel');
	});
	
}

function autoChangFrag()
{
	$('#slide').ready(function() {
		alert('ok');
	});
}

$(autoChangFrag);
$(changFrag);
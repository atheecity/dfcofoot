function initTextarea()
{
	$('textarea#fos_comment_comment_body').attr('placeholder', 'Ajouter un commentaire...');
	$('textarea#fos_comment_comment_body').focus(function() {
		$(this).css('font-size', '14px');
		$(this).css('line-height', '14px');
		$(this).animate({
			height: '80px'
		});
	});
	$('textarea#fos_comment_comment_body').blur(function() {
		if($(this).val() == "") {
			$(this).css('font-size', '20px');
			$(this).css('line-height', '38px');
			$(this).animate({
				height: '38px'
			});
		}
	});
}
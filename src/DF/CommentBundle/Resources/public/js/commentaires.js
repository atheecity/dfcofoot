function affichageCommentaire(nbCom) 
{
	$('.fos_comment_comment_depth_0:gt('+nbCom+')').css("display", "none" );
	$('.fos_comment_comment_depth_0:eq('+nbCom+')').after('<div id="bt_affCom">Afficher la totalité des commentaires</div>');
}

function clickAffCommentaire()
{
	$('#fos_comment_thread').on('click', '#bt_affCom', function() {
		$('#bt_affCom').remove();
		$('.fos_comment_comment_depth_0:gt(0)').show();
	});
}

function modifTextarea()
{
	$('textarea#fos_comment_comment_body').attr('placeholder', 'Ajouter un commentaire...');
	$('textarea#fos_comment_comment_body').focus(function() {
		$(this).css('font-size', '14px');
		$(this).animate({
			height: '100px'
		});
	});
	$('textarea#fos_comment_comment_body').blur(function() {
		if($(this).val() == "") {
			$(this).css('font-size', '20px');
			$(this).animate({
				height: '25px'
			});
		}
	});
}

function reloadComment()
{
	$('#fos_comment_thread').on('click', '.reload_comment', function() {
		$('#fos_comment_thread').remove();
		$('#foscommentbundle_asset_url').parent().append('<div id="fos_comment_thread"></div>');
		$('#fos_comment_thread').append('<div style="text-align:center;color:#cc1c00;font-weight:bold;font-size:14px"><div class="bubblingG"><span id="bubblingG_1"></span><span id="bubblingG_2"></span><span id="bubblingG_3"></span></div>Chargement des commentaires</div>');
		
		// thread id
		var fos_comment_thread_id = $('input[name="fos_comment_thread_id"]').val();

		// api base url to use for initial requests
		var fos_comment_thread_api_base_url = $('input[name="fos_comment_thread_api_base_url"]').val();
		
		var foscommentbundle_asset_url = $('#foscommentbundle_asset_url').val();

		// Snippet for asynchronously loading the comments
		(function() {
		    var fos_comment_script = document.createElement('script');
		    fos_comment_script.async = true;
		    fos_comment_script.src = foscommentbundle_asset_url;
		    fos_comment_script.type = 'text/javascript';

		    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(fos_comment_script);
		})();
		reloadComment();
	});
}

function sendComment()
{
	$('#fos_comment_thread').on('submit', '.fos_comment_comment_new_form', function() {
		var firstThis = $(this);
		$(this).children('.form_textarea').hide();
		$(this).children('.fos_comment_submit').hide();
		$(this).append('<div class="boule" style="text-align:center;color:#cc1c00;font-weight:bold;font-size:14px"><div class="bubblingG"><span id="bubblingG_1"></span><span id="bubblingG_2"></span><span id="bubblingG_3"></span></div>Envoi du commentaire</div>');
		
		$(document).on('fos_comment_new_comment', function(event, data)
		{
			$(firstThis).children('.form_textarea').show();
			$(firstThis).children('.fos_comment_submit').show();
			$(firstThis).children('.boule').hide();
		});
	});
}

$(clickAffCommentaire);
$(sendComment);
$(reloadComment);
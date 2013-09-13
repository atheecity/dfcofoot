function newFeuilleMatch() 
{
	$('.newFeuilleMatch').click(function() {
		var _this = $(this);
		var match_id = $(_this).children('input[name=match_id]').val();
		var url = Routing.generate('DFManageMatchBundle_newFeuilleMatch', { match_id : match_id });
		
		$.ajax({
			dataType: "json",
			url: url,
			success: function(data){
				if(data.code == 100 && data.success == true) {
					var url_feuille = Routing.generate('DFManageMatchBundle_displayFeuilleMatch', { feuille_id : data.feuille_id });
					$(_this).parent().append('<a href="'+url_feuille+'">Voir</a>');
					$(_this).remove();
					
				}
			}
		});
	});
}

$(newFeuilleMatch);
(function($){
	$(document).ready(function(){
		$('.masktxt').focus(function(){
			$(this).val(null);
		});
		$('.masktxt').blur(function(){
			var lbl = $(this).attr('title');
			if($.trim($(this).val())==''){
				$(this).val(lbl);
			}
			
		});
	});
	
}(jQuery));
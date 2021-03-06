/**
* Joomla Community Builder jQuery Plugin: cbfield
* @version $Id$
* @package jquery.cbfield.js
* @author Beat
* @copyright (C) 2009 Beat, www.joomlapolis.com
* @license Limited http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU/GPL version 2
*/
(function($) {
	$.fn.cbajxfAttachForm = function(options) {
		this.each(function() {
			$(this).find( 'div' ).andSelf().addClass( 'cbClicksInside' );
			$(this).children( '.cbajAjaxForm' ).keydown(function(e) {
				if( e.keyCode == 27 ){
					$(this).fadeOut( 'slow', function() {
						$(this).parent().children( '.cbajValue' ).fadeIn( 'slow' );
					});
				}
			});
			$(this).children( '.cbajValue' ).click( function(e) {
				if ( ! $(e.target).is( 'a' ) ) {
					$(this).fadeOut( 'medium', function() {
						var firstInput = $(this).parent().children('.cbajAjaxForm').fadeIn( 'medium' ).find( ':text:first' );
						firstInput.focus().val( firstInput.val() );
					});
				}
			});
			$(this).find( 'form .cbajButCancel' ).click( function() {
				$(this).parents( 'form' ).parent().fadeOut( 'slow', function() {
					$(this).parent().children( '.cbajValue' ).fadeIn( 'slow' );
				});
				return false;
			});
			if ( $(this).hasClass( 'cbajLst' ) ) {
				var firstInput = $(this).children( '.cbajAjaxForm' ).find( ':text:first' );
				firstInput.blur( function() {
					$(this).parents( 'form' ).parent().fadeOut( 'slow', function() {
						$(this).parent().children( '.cbajValue' ).fadeIn( 'slow' );
					});
				});
			}
			var myFormDiv = $(this);
			$(this).find( 'form' ).ajaxForm({
				target: $(this).children( '.cbajValue' ),
				type: 'POST',
				beforeSubmit:	function(formData, jqForm, options) {
									jqForm.parent().hide();
									myFormDiv.children( '.cbajValue' ).hide();
									myFormDiv.children( '.cbajLoading' ).fadeIn( 'fast' );
								},
				success:		function(responseText, statusText) {
									myFormDiv.children( '.cbajLoading' ).stop(true,true).hide();
									myFormDiv.children( '.cbajValue' ).fadeIn( 'medium' );
								}
			} );
		});
		return this;
	};

})(jQuery);

jQuery(document).ready(function($){
	$( '.cbajContainer' ).cbajxfAttachForm();
});
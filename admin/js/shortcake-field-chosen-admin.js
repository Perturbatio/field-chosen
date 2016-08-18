(function ( $ ) {
	'use strict';
	/**
	 * enhance all elements with the .chosen-enhance class
	 */
	function makeChosen() {
		$('.chosen-enhance').chosen({
				no_results_text: 'Item not found'
			}
		);
	}

	$(document).ready(function () {

		if ( typeof wp !== 'undefined' && typeof wp.shortcake !== 'undefined' && typeof wp.shortcake.hooks !== 'undefined' ) {
			wp.shortcake.hooks.addAction('shortcode-ui.render_new', makeChosen);
			wp.shortcake.hooks.addAction('shortcode-ui.render_edit', makeChosen);
		}
	});

})(jQuery);

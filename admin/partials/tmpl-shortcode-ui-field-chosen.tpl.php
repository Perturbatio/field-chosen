<script type="text/html" id="tmpl-shortcake-field-chosen">
	<div class="field-block shortcode-ui-field-chosen shortcode-ui-attribute-{{ data.attr }}">
		<label for="{{ data.id }}">{{{ data.label }}}</label>
		<select name="{{ data.attr }}" id="{{ data.id }}" {{{ data.meta }}} class="chosen-enhance">
			<# _.each( data.options, function( label, value ) { #>
				<option value="{{ value }}"
				<# if ( value == data.value ){ print('selected'); } #>>{{ label }}</option>
					<# }); #>
		</select>
		<# if ( typeof data.description == 'string' ) { #>
			<p class="description">{{{ data.description }}}</p>
			<# } #>
	</div>
</script>
<div <?php acf_esc_attr_e( $attrs ); ?>>

	<div class="acf-osm-search">
		<div class="acf-osm-search-input">
			<input type="text" id="acf-osm-search-keywords" placeholder="<?php esc_attr_e( 'Enter your search keywords here..', 'acf-mapifylite' ) ?>">
		</div>
		<div class="acf-osm-search-button">
			<button class="button" id="acf-osm-search-button"><?php esc_html_e( 'Search on Map', 'acf-mapifylite' ) ?></button>
		</div>
	</div>

	<div id='acf-osm-map-search-results'></div>

	<div id="acf-osm-map-canvas" <?php acf_esc_attr_e( $map_canvas_attrs ); ?>></div>

	<div id="acf-osm-map-info" class='d-none'>
		<div class="form-group">
			<label><?php esc_html_e( 'Lattitude', 'acf-mapifylite' ) ?></label>
			<input type="text" name="<?php echo esc_attr( $field['name'] . '[selected_lat]' ) ?>" id="selected_lat">
		</div>
		<div class="form-group">
			<label><?php esc_html_e( 'Longitude', 'acf-mapifylite' ) ?></label>
			<input type="text" name="<?php echo esc_attr( $field['name'] ) . '[selected_lng]' ?>" id="selected_lng">
		</div>
		<div class="form-group">
			<label><?php esc_html_e( 'Centered Lattitude', 'acf-mapifylite' ) ?></label>
			<input type="text" name="<?php echo esc_attr( $field['name'] ) . '[centered_lat]' ?>" id="centered_lat">
		</div>
		<div class="form-group">
			<label><?php esc_html_e( 'Centered Longitude', 'acf-mapifylite' ) ?></label>
			<input type="text" name="<?php echo esc_attr( $field['name'] ) . '[centered_lng]' ?>" id="centered_lng">
		</div>
		<div class="form-group">
			<label><?php esc_html_e( 'Zoom Level', 'acf-mapifylite' ) ?></label>
			<input type="text" name="<?php echo esc_attr( $field['name'] ) . '[zoom_level]' ?>" id="zoom_level">
		</div>
	</div>
	
</div>
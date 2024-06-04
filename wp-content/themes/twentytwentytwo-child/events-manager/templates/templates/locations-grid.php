<?php
/*
 * Default Location Grid Template
 * This page displays a grid of locations, called during the em_content() if this is an events list page.
 * You can override the default display settings pages by copying this file to yourthemefolder/plugins/events-manager/templates/ and modifying it however you need.
 * You can display locations (or whatever) however you wish, there are a few variables made available to you:
 *
 * $args - the args passed onto EM_Locations::output()
 *
 */
/* @var array $args - the args passed onto EM_Locations::output() */
$args = apply_filters('em_content_locations_args', $args);
if( empty($args['id']) ) $args['id'] = rand(100, getrandmax()); // prevent warnings
$id = esc_attr($args['id']);
?>
<div class="<?php em_template_classes('view-container'); ?>" id="em-view-<?php echo $id; ?>" data-view="grid" style="--view-grid-width : <?php echo esc_attr( get_option('dbem_location_grid_item_width') ); ?>px">
	<div class="<?php em_template_classes('locations-list', 'locations-grid'); ?>" id="em-locations-grid-<?php echo $id; ?>" data-view-id="<?php echo $id; ?>">
		<?php
		echo EM_Locations::output( $args );
		?>
	</div>
</div>
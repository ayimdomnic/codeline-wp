<?php

add_action('wp_enqueue_scripts', 'enqueue_child_theme', PHP_INT_MAX);


function enqueue_child_theme_styles() {
	wp_enqueue_style('parent-style', get_template_directory_uri(). '/style.css');
}

function theme_slug_filter_content($content) {
	if (is_post_archive() == "films") {

		# code...
		$custom_content = $content;
		$post_id = get_the_ID();
		$country = wp_get_post_terms($post_id, 'country', [ "fields" => "all"]);

		foreach ($country as $c) {
			$c_name =  "<strong> Country : </strong>" .$c->name. " ";
		}

		$genre = wp_get_post_terms($post_id, 'genre', ['fields' => "all"]);
		foreach ($genre as $g) {
			$g_name = "<strong> Genre : </strong>" .$g->name. " ";
		}

		$ticket_price = "<strong> Ticket Price: </strong>" . get_field('ticket_price', $post_id);
		$release_date = get_field('release_date', false, false);
		$release_date = new DateTime($release_date);
		$release_date = $release_date->format('j M Y');
		$release_date = "<strong> Release Date: </strong>" .$release_date;

		return $custom_content.$c_name.$g_name.$ticket_price.$release_date; 
	} else {
		return $content;
	}

	add_filter('the_content', 'theme_slug_filter_content');
}
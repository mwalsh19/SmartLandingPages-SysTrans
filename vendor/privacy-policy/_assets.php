<?php

$directory = get_template_directory_uri() . '/templates/privacy-policy';

wp_enqueue_style("boostrap", $directory . '/assets/css/swift/bootstrap.css');
wp_enqueue_style("template_styles", $directory . '/assets/css/swift/style.css');
wp_enqueue_style("validation", $directory . '/assets/css/swift/validationEngine.jquery.css');
wp_enqueue_style("google_font_1", 'http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600italic,600,700,700italic');

//SCRIPTS
wp_enqueue_script("placeholder", $directory . '/assets/js/swift/jquery.placeholder.js', array('jquery'), '', true);
wp_enqueue_script("validationEngine_en", $directory . '/assets/js/swift/jquery.validationEngine-en.js', array('jquery'), '', true);
wp_enqueue_script("validationEngine", $directory . '/assets/js/swift/jquery.validationEngine.js', array('jquery'), '', true);
?>

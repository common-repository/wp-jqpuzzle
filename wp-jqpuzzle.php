<?php
/*
Plugin Name: WP-jqPuzzle
Plugin URI: http://www.relijoc.ro/descarca/wp-jqpuzzle
Description: Create sliding puzzles for your web page. To use it, just put [jqpuzzle img=http://www.mysite.com/mypicture.jpg] in a post, updating the path for the image, of course. Other options are available. Consult readme.html for more information.
Version: 1.1
Author: Jürgen Toth
Author URI: http://www.relijoc.ro
Credits: www.2meter3.de/jqPuzzle, www.bueltge.de, www.cnet.ro, www.tolingo.de 
License: GPL
*/

// WP-Plugin based on the jqPuzzle-Scripts from www.2meter3.de/jqPuzzle


load_plugin_textdomain('wp-jqpuzzle', false, dirname( plugin_basename(__FILE__) ) . '/languages');


function wp_jqpuzzle_ext() {
	if (!is_admin()) {
	wp_enqueue_script('jquery-1.3.2.min', WP_PLUGIN_URL . '/wp-jqpuzzle/js/jquery-1.3.2.min.js');
	}
}

add_action('init', 'wp_jqpuzzle_ext');


function wp_jqpuzzle_scripts() {
	wp_enqueue_script('jqpuzzle', WP_PLUGIN_URL . '/wp-jqpuzzle/js/jquery.jqpuzzle.js'); 
	wp_enqueue_style( 'jqpuzzle', WP_PLUGIN_URL . '/wp-jqpuzzle/css/jquery.jqpuzzle.css' );
}

add_action('wp_head', 'wp_jqpuzzle_scripts', 1);//load scripts in header


function wp_jqpuzzle_func($atts) {
	extract(shortcode_atts(
	     array('img'=> WP_PLUGIN_URL . '/wp-jqpuzzle/img/default-picture.jpg',
                 'cols'=>4,
                 'rows'=>4,
                 'mix'=> __('Mix!', 'wp-jqpuzzle'),
                 'image'=> __('Image', 'wp-jqpuzzle'),
                 'numbers'=> __('Numbers', 'wp-jqpuzzle'),
                 'reallymix'=> __('Really mix?', 'wp-jqpuzzle'),
                 'moves'=> __('moves', 'wp-jqpuzzle'),
                 'seconds'=> __('seconds', 'wp-jqpuzzle'),
                 'message'=> __('Great! You resolved the puzzle with || moves, in || seconds.', 'wp-jqpuzzle')
        ), $atts));
	$parts=explode("||",$message);
	if(is_feed())
		$result = "<img src='$img' alt='WPjqPuzzle Image' class='WPjqPuzzle'>" . __('See my Website for this great puzzle.', 'wp-jqpuzzle');
	else $result = "
		<script language='JavaScript' type='text/javascript' charset='utf-8'>
			$(document).ready(function() { 
				// define your own settings and texts
				var mySettings = {
				rows: $rows, 
				cols: $cols,  
				success: { 
					callback: function(results) {  
						alert('$parts[0] ' + results.moves + ' $parts[1] ' + 
							+ results.seconds + ' $parts[2].'); 
					} 
				} 
			}; 
			var myTexts = { 
				shuffleLabel:           '$mix', 
				toggleSolutionLabel:    '$image', 
				toggleNumbersLabel:     '$numbers', 
				confirmShuffleMessage:  '$reallymix',
				movesLabel:             '$moves',
				secondsLabel:           '$seconds'  
			}; 
			// call jqPuzzle with mySettings and myTexts on an image with class 'WPjqPuzzle'  
			$('.WPjqPuzzle').jqPuzzle(mySettings, myTexts);
		});
		</script>";
		$result .= "<img src='$img' alt='WPjqPuzzle Image' class='WPjqPuzzle'>";
	return $result;
}

add_shortcode('jqpuzzle', 'wp_jqpuzzle_func');
?>
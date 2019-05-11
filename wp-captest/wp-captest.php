<?php
/*
Plugin Name: WP CapTest
Plugin URI:  http://link to your plugin homepage
Description: This plugin replaces words with your own choice of words.
Version:     1.0
Author:      Battbeach
Author URI:  http://link to your website
License:     GPL2 etc
License URI: https://link to your plugin license

Copyright YEAR PLUGIN_AUTHOR_NAME (email : your email address)
(Plugin Name) is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

(Plugin Name) is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with (Plugin Name). If not, see (http://link to your plugin license).
*/

/*Use this function to replace multiple words or phrases at once*/
function captest_content_replace( $content ) {
	$search  = array( '10', '20', '30', '40', '50' );
	$replace = array( 'ten', 'twenty', 'thirty', 'fourty', 'fifty' );
	return str_replace( $search, $replace, $content );
}
add_filter( 'the_content', 'captest_content_replace' );

?>
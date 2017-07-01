<?php 

include("js_includes.php"); 

$rev_cust_base = ABSPATH . 'wp-content/themes/rev_cust';

?>

<?php

/**
 *    Sets up theme defaults and registers support for various WordPress features.
 *
 *    Note that this function is hooked into the after_setup_theme hook, which
 *    runs before the init hook. The init hook is too late for some features, such
 *    as indicating support for post thumbnails.
 */
if ( ! function_exists( 'rev_cust_setup' ) ) {
	add_action( 'after_setup_theme', 'rev_cust_setup' );

	function rev_cust_setup() {

		// Load Theme Textdomain
		load_theme_textdomain( 'rev_cust', get_stylesheet_directory_uri() . '/languages' );
	}
}

/* Add Scripts */

if ( ! function_exists('rev_cust_scripts')) {

	add_action( 'wp_enqueue_scripts', 'rev_cust_scripts' );

	function rev_cust_scripts() {
		$script_paths = array("layout");
		$scripts_stack = [];

		foreach ($script_paths as &$value) {

			$dir = get_stylesheet_directory() . '/' . $value;
			$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir), RecursiveIteratorIterator::SELF_FIRST );

			foreach ( $iterator as $path ) {
				if ( ! $path -> isDir() ) {
					$path_parts = pathinfo($path);
					$file_parts = $path_parts['extension'];

					if ( !in_array($file_parts, array('css','js'), true ) ) 
						continue;

					switch ($file_parts) {
						case 'css':
						$file_name = basename($path, '.css');
						break;
						case 'js':
						$file_name = basename($path, '.js');
						break;
					}

					if ($file_name == "test")
						continue;

					$pages_base = "/opt/lampp/htdocs/projects/wordpress_projects/mmac";
					$server_pages_base = "http://localhost/projects/wordpress_projects/mmac";
					$url = str_replace($pages_base, $server_pages_base, $path);

					$array_item = array('script' => $file_parts, 'handle' => $file_name, 'src' => $url);

					if (in_array($file_name, $scripts_stack)) {
						continue;
					} else {
						array_push($scripts_stack, $file_name);
					}
				}
			}
		}

		doAttachScripts($scripts_stack);
	}

	function doAttachScripts($scripts) {
		wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
		foreach ($scripts as $key => $child_array) {
			if (is_array($child_array)) {
				$script = $child_array['script'];

				switch ($script) {
					case 'css':
					// print('<div>' . $key . " : " . $script . " : "  . $child_array['handle'] . " : " . $child_array['src'] . '</div>');
					wp_enqueue_style($child_array['handle'], $child_array['src']);
					break;

					case 'js' :
					// print('<div>' . $key . " : " . $script . " : "  . $child_array['handle'] . " : " . $child_array['src'] . '</div>');
					wp_enqueue_script( $child_array['handle'], $child_array['src'],  array( 'jquery' ), false, true );
					break;
				}
				// echo PHP_EOL;
				unset($scripts[$key]);
			}
		}
	}
}

?>
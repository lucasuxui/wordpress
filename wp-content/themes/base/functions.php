<?php
//Funções Básicas
if (!defined('WP_HOME')) {
    define('WP_HOME', get_home_url());
}

if (!defined('WP_DIRECTORY')) {
    define('WP_DIRECTORY', get_template_directory_uri());
}

if (!defined('WP_STYLES')) {
    define('WP_STYLES', WP_DIRECTORY . '/dist/css');
}

if (!defined('WP_SCRIPTS')) {
    define('WP_SCRIPTS', WP_DIRECTORY . '/dist/js');
}

if (!defined('WP_IMAGES')) {
    define('WP_IMAGES', WP_DIRECTORY . '/dist/images');
}


//Auto Load app
$directories = array('template-parts','app/config', 'app/widgets', 'app/poststypes');
$types = array( 'php' );

foreach ($directories as $directory){

    $path_absolute = __DIR__ . DIRECTORY_SEPARATOR . $directory;

    if ( $handle = opendir($path_absolute) ) {

        while ( $entry = readdir( $handle ) ) {

            $ext = strtolower( pathinfo( $entry, PATHINFO_EXTENSION) );

            if( in_array( $ext, $types ) ){

                include_once ($path_absolute . DIRECTORY_SEPARATOR . $entry);

            }

        }

        closedir($handle);

    }

}

if ( ! file_exists( WP_HOME . 'app/class-wp-bootstrap-navwalker.php' ) ) {
	// file does not exist... return an error.
	return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
	// file exists... require it.
	require_once WP_HOME . 'app/class-wp-bootstrap-navwalker.php';
}
?>

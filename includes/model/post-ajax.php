
<?php
	// Exit if accessed directly
	if ( ! defined( 'ABSPATH' ) ) 
	{
		exit;
	}

	/** 
		* @package bytescrafter-usocketnet-restapi
		* Name: USocketNet RestAPI
		* Description: Self-Host Realtime Multiplayer Server 
		*       for your Game or Chat Application.
		* Package-Website: https://usocketnet.bytescrafter.net
		* 
		* Author: Bytes Crafter
		* Author-Website:: https://www.bytescrafter.net/about-us
		* License: Copyright (C) Bytes Crafter - All rights Reserved. 
	*/
?>

<?php

    //AJAX LISTENER for Apps
	include_once ( plugin_dir_path( __FILE__ ) . '/action/reload.php' );
	include_once ( plugin_dir_path( __FILE__ ) . '/action/create.php' );
	include_once ( plugin_dir_path( __FILE__ ) . '/action/update.php' );
    include_once ( plugin_dir_path( __FILE__ ) . '/action/delete.php' );

?>
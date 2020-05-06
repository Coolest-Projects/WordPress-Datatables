
<?php
	// Exit if accessed directly
	if ( ! defined( 'ABSPATH' ) ) 
	{
		exit;
	}

	/** 
		* @package bytescrafter-secretpage
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

	DEFINE('SP_PREFIX', 'bc_sp_');

	DEFINE('SP_HOST', 'localhost');

	// Global prefix for this plugins table name prefix.
	DEFINE('SP_SECRET_TAB', SP_PREFIX.'secrets');

	DEFINE('SP_ASSETS', plugin_dir_url( __FILE__ ) . '../../' );

	// Global as Plugin URL of USocketNet.
	DEFINE('SP_PLUGIN', plugin_dir_path( __FILE__ ) . '../../' );
	
?>
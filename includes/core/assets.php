
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
    
    if( isset($_GET['secret']) )
    {
        function secretpage_plugin_admin_enqueue()
        {    
            wp_enqueue_script( 'jquery' );

            wp_enqueue_script( 'secretpage_popper_script', SP_ASSETS . 'assets/popper/popper.min.js' ); 
            wp_enqueue_script( 'secretpage_clipboard_script', SP_ASSETS . 'assets/clipboard/clipboard.min.js' );    
            wp_enqueue_script( 'secretpage_chartjs_script', SP_ASSETS . 'assets/chartjs/chart.min.js' );
            wp_enqueue_script( 'secretpage_handlebars_script', SP_ASSETS . 'assets/handlebars/handlebars.js' );
            
            // wp_enqueue_style( 'secretpage_bootstrap_style', SP_ASSETS . 'assets/bootstrap/css/bootstrap.min.css' );
            wp_enqueue_script( 'secretpage_bootstrap_script', SP_ASSETS . 'assets/bootstrap/js/bootstrap.min.js' );

            wp_enqueue_style( 'secretpage_datatables_style', SP_ASSETS . 'assets/datatables/datatables.min.css' );
            wp_enqueue_script( 'secretpage_datatables_script', SP_ASSETS . 'assets/datatables/datatables.min.js' );

            
            wp_enqueue_style( 'secretpage_jqueryui_style', SP_ASSETS . 'assets/jquery-ui/jquery-ui.min.css' );
            wp_enqueue_script( 'secretpage_jqueryui_script', SP_ASSETS . 'assets/jquery-ui/jquery-ui.min.js' );

            wp_enqueue_script( 'secretpage_socketio_script', SP_ASSETS . 'assets/usocketnet/socket.io.js' ); 
            wp_enqueue_script( 'secretpage_core_script', SP_ASSETS . 'assets/usocketnet/usocketnet.js' ); 

            wp_enqueue_style( 'secretpage_admin_style', SP_ASSETS . 'assets/custom/styles.css' );
            //wp_enqueue_script( 'secretpage_admin_script', SP_ASSETS . 'assets/usocketnet/backend.js', array('jquery'), '1.0', true );
            wp_localize_script( 'secretpage_admin_script', 'ajaxurl', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
        }
        add_action( 'wp_enqueue_scripts', 'secretpage_plugin_admin_enqueue' );
    }

?>
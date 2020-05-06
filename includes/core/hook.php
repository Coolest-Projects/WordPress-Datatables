
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

    function secretpage_activate() {
        global $wpdb;

        #region CREATING TABLE FOR Clusters
            $sp_secret_tab = SP_SECRET_TAB;
            if($wpdb->get_var( "SHOW TABLES LIKE '$sp_secret_tab'" ) != $sp_secret_tab) {
                $sql = "CREATE TABLE `".$sp_secret_tab."` (";
                    $sql .= "`ID` bigint(20) NOT NULL AUTO_INCREMENT, ";
                    $sql .= "`cluster_name` varchar(120) NOT NULL, ";
                    $sql .= "`cluster_info` varchar(255) NOT NULL, ";
                    $sql .= "`cluster_owner` bigint(20) NOT NULL, ";
                    $sql .= "`cluster_hostname` varchar(120) NOT NULL, ";
                    $sql .= "`cluster_secretkey` varchar(120) NOT NULL, ";
                    $sql .= "`cluster_capacity` varchar(120) NOT NULL, ";
                    $sql .= "`mcafee_ready` enum('Active','Inactive') NOT NULL DEFAULT 'Active', ";
                    $sql .= "`date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP, ";
                    $sql .= "PRIMARY KEY (`ID`), ";
                    $sql .= "UNIQUE  (`cluster_name`) ";
                    $sql .= ") ENGINE = InnoDB; ";
                $result = $wpdb->get_results($sql);
                
            }
        #endregion
    } 
    add_action( 'activated_plugin', 'secretpage_activate' );

    /**
     * Deactivation hook.
     */
    function secretpage_deactivate() {
        //echo "DEACTIVATED";
    }
    register_deactivation_hook( __FILE__, 'secretpage_deactivate' );

?>

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

	<div class="usn-panel-body">
		<div class="usn-panel-first">
			<button id="ReloadClusterList" type="button" class="btn btn-mods btn-dark">Refresh List</button>
			<?php 
				$user = wp_get_current_user();
				$allowed_roles = array('editor', 'administrator', 'author');
				if( array_intersect($allowed_roles, $user->roles ) ) { 
			?>
				<button type="button" class="btn btn-mods btn-dark" data-toggle="modal" data-target="#AddNewCluster">Add Agent</button>
			<?php } ?>
		</div>
		<table id="project-datatables" class="stripe" style="width: 100%;"></table>
		<div id="project-notification" class="alert alert-info usn-center-item " role="alert" style="margin-top: 20px;">
			Currently fetching updates for all available clusters. Please wait...
		</div>
	</div>

	<?php include_once( SP_PLUGIN . "includes/model/ajax-load.php" ); ?>

	<?php 
		//if( array_intersect($allowed_roles, $user->roles ) ) { 
	?>
		<?php include_once( SP_PLUGIN . "includes/view/modal/create.php" ); ?>
		<?php include_once( SP_PLUGIN . "includes/view/modal/edit.php" ); ?>
	<?php //} ?>
	
	<div id="jquery-overlay" class="modal-backdrop fade show usn-display-hide" style="z-index: 9999;"></div>
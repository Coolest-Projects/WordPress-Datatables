
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

<div id="EditClusterOption" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center" style="margin-top: 49px;">

            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title" style="text-align: center;">Modify Agent</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <form id="edit-cluster-form">
                        <div class="form-group">
                            <label for="cluster_name_edit">FIRST NAME:</label>
                            <input required type="text" class="form-control" id="cluster_name_edit" name="cluster_name_edit" placeholder="Juan" 
                                <?php $user = wp_get_current_user(); $allowed_roles = array('editor', 'administrator', 'author');
                                    if( !array_intersect($allowed_roles, $user->roles ) ) { echo "readonly"; } ?>>
                        </div>
                        <div class="form-group">
                            <label for="cluster_info_edit">LAST NAME:</label>
                            <input required type="text" class="form-control" id="cluster_info_edit" name="cluster_info_edit" placeholder="Dela Cruz" 
                                <?php $user = wp_get_current_user(); $allowed_roles = array('editor', 'administrator', 'author');
                                    if( !array_intersect($allowed_roles, $user->roles ) ) { echo "readonly"; } ?>>
                        </div>
                        <div class="form-group">
                            <label for="cluster_hostname_edit">DEPARTMENT:</label>
                            <input required type="text" class="form-control" id="cluster_hostname_edit" name="cluster_hostname_edit" placeholder="APS">
                        </div>
                        <div class="form-group">
                            <label for="cluster_capacity_edit">SCHEDULE NOTE:</label>
                            <textarea required type="text" maxlength="12" class="form-control" id="cluster_capacity_edit" name="cluster_capacity_edit" 
                                placeholder="1 Week Daily FREE TIME" rows="4"></textarea>
                        </div>
                        <?php 
                            $user = wp_get_current_user();
                            $allowed_roles = array('editor', 'administrator', 'author');
                            if( array_intersect($allowed_roles, $user->roles ) ) { 
                        ?>
                        <div class="form-group">
                            <label for="mcafee_ready_edit">MCAFEE READY:</label><br>
                            <select class="form-control" id="mcafee_ready_edit" name="mcafee_ready_edit">
                                <option>Active</option>
                                <option selected="selected">Inactive</option>
                            </select>
                        </div>
                        <?php } ?>
                        <div class="form-group">
                            <div class="alert alert-dark usn-center-item" role="alert">
                                <strong>NOTE:</strong> Before we submit your request a dialog confirmation will appear 
                                to ask for your permission to complete the task.
                            </div>
                        </div>
                        <div class="usn-center-item">
                            <input id="cluster_id_edit" type="hidden" value="">
                            <?php if( array_intersect($allowed_roles, $user->roles ) ) { ?>
                            <button id="delete-cluster-btn" type="submit" class="btn btn-danger"> - DELETE - </button>
                            <?php } ?>
                            <button id="update-cluster-btn" type="submit" class="btn btn-success"> - UPDATE - </button>
                        </div>
                        <div id="dialog-confirm-edit" title="Confirmation">
                            <p id="confirm-content-edit"></p>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <div id="DFAMessage" class="alert usn-fullwidth usn-center-item usn-display-hide" role="alert">
                        <p id="DFAMcontent">A simple success alert—check it out!</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
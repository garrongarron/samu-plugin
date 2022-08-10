<?php

$redirect_to_panel = function() {
	echo '<input type="hidden" name="redirect" value="/dashboard/" />';
};
add_action( 'redirect_to_panel',  $redirect_to_panel);
add_action( 'woocommerce_register_form_start',  $redirect_to_panel);
add_action( 'woocommerce_resetpassword_form',  $redirect_to_panel);
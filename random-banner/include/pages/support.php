<?php

/**
 * Support.
 *
 * @return void
 */
function bc_get_random_banner_support() {
	global $wp_version, $wpdb;
	if ( method_exists( $wpdb, 'db_version' ) ) {
		$mysql_version = preg_replace( '/[^0-9.].*/', '', $wpdb->db_version() );
	} else {
		$mysql_version = 'N/A';
	}
	?>
<div class="bc_rb container bc_random_banner bc_random_banner_support" data-display_name="<?php echo esc_attr( bc_rb_get_user_display_name() ); ?>">
	<?php echo wp_kses_post( bc_rb_loader() ); ?>
    <h2>
		<?php echo esc_html__( 'Random Banner Support', 'random-banner' ); ?>
    </h2>
    <div class="col-md-12">
		<?php
		if ( isset( $_REQUEST['success'] ) ) {
			bc_rb_on_success_payment( $_REQUEST );
		}
		?>
    </div>
    <div class="row bc_rb_transaction_details">
        <div class="col-md-5">
			<?php
			if ( ! isset( $_REQUEST['success'] ) ) {
				?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><?php esc_html_e( 'Buy Pro Version', 'random-banner' ); ?></h3>
                            </div>
                            <div class="panel-body">
                                <div class="row  flex_center ">
									<?php echo wp_kses_post( bc_rb_show_payment_details() ); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<?php
			}
			?>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php esc_html_e( 'Support', 'random-banner' ); ?></h3>
                        </div>
                        <div class="panel-body">
                            <div class="flex_between">
                                <!--								<div class="bc_item">-->
                                <!--									<a href="https://buffercode.com/plugin/random-banner-pro">-->
                                <!--										<img src="--><?php //echo esc_url( plugins_url( 'assets/images/chat.png', BC_RB_PLUGIN ) ); ?><!--"/>-->
                                <!--									</a>-->
                                <!--									<h5 class="text-center">--><?php //esc_html_e( 'Chat', 'random-banner' ); ?><!--</h5>-->
                                <!--								</div>-->
                                <div class="bc_item">
                                    <a href="mailto:support@buffercode.com">
                                        <img src="<?php echo esc_url( plugins_url( 'assets/images/mail.png', BC_RB_PLUGIN ) ); ?>"/>
                                    </a>
                                    <h5 class="text-center"><?php esc_html_e( 'Mail', 'random-banner' ); ?></h5>
                                </div>
                                <div class="bc_item paypal_donation_button">
                                    <a href="#">
                                        <img src="<?php echo esc_url( plugins_url( 'assets/images/tickets.png', BC_RB_PLUGIN ) ); ?>"/>
                                    </a>
                                    <h5 class="text-center"><?php esc_html_e( 'Ticket[Pro]', 'random-banner' ); ?></h5>
                                </div>
                                <div class="bc_item">
                                    <a href="https://wordpress.org/support/plugin/random-banner/reviews/?rate=5#new-post">
                                        <img src="<?php echo esc_url( plugins_url( 'assets/images/rate.png', BC_RB_PLUGIN ) ); ?>"/>
                                    </a>
                                    <h5 class="text-center"><?php esc_html_e( 'Rate us', 'random-banner' ); ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php esc_html_e( 'Settings', 'random-banner' ); ?></h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-5">
                                    <h4><?php esc_html_e( 'Plugin Version', 'random-banner' ); ?></h4>
                                </div>
                                <div class="col-md-7">
                                    <h4><?php echo esc_html( get_option( 'bc_random_banner_db_version', 'Error' ) ); ?></h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <h4><?php esc_html_e( 'PHP Version', 'random-banner' ); ?></h4>
                                </div>
                                <div class="col-md-7">
                                    <h4>
										<?php echo esc_html( phpversion() ); ?>
                                    </h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <h4><?php esc_html_e( 'WordPress Version', 'random-banner' ); ?></h4>
                                </div>
                                <div class="col-md-7">
                                    <h4>
										<?php echo esc_html( $wp_version ); ?>
                                    </h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <h4><?php esc_html_e( 'MySQL Version', 'random-banner' ); ?></h4>
                                </div>
                                <div class="col-md-7">
                                    <h4>
										<?php echo esc_html( $mysql_version ); ?>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="col-md-7">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php esc_html_e( 'How to install the Pro version', 'random-banner' ); ?></h3>
                        </div>
                        <div class="panel-body">
                            <ol>
                                <li><?php esc_html_e( 'Please deactivate and uninstall the free version of Random Banner.', 'random-banner' ); ?></li>
                                <li><?php esc_html_e( 'Ensure you have received the login credentials at your PayPal email address following your purchase. If not, please reach out to us support@buffercode.com',
										'random-banner' ); ?>
                                <li><?php esc_html_e( 'Download the Pro version using the provided credentials.', 'random-banner' ); ?></li>
                                <li><?php esc_html_e( 'Upload the file via Plugins > Add New in your Admin Dashboard.', 'random-banner' ); ?></li>
                                <li><?php esc_html_e( 'Activate the plugin using your license key.', 'random-banner' ); ?></li>
                                <li><?php esc_html_e( 'Retrieve the license key from Buffercode - ',
										'random-banner' ); ?> <a href="https://buffercode.com/dashboard" target="_blank">Activation</a></li>
                                <li><?php esc_html_e( 'Apply and activate the license key.', 'random-banner' ); ?></li>
                                <li><?php esc_html_e( 'If you encounter any issues activating the plugin, please contact us at support@buffercode.com', 'random-banner' ); ?></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php esc_html_e( 'Tables', 'random-banner' ); ?></h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-5">
                                    <h4><?php esc_html_e( 'Random Banner', 'random-banner' ); ?></h4>
                                </div>
                                <div class="col-md-7 padding_top_10">

									<?php echo wp_kses_post( bc_success_error( bc_get_table_status( BC_RB_RANDOM_BANNER_DB ) ) ); ?>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <h4><?php esc_html_e( 'Category', 'random-banner' ); ?></h4>
                                </div>
                                <div class="col-md-7 padding_top_10">

									<?php echo wp_kses_post( bc_success_error( bc_get_table_status( BC_RB_RANDOM_BANNER_CATEGORY ) ) ); ?>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <h4><?php esc_html_e( 'Options', 'random-banner' ); ?></h4>
                                </div>
                                <div class="col-md-7 padding_top_10">
									<?php echo wp_kses_post( bc_success_error( bc_get_table_status( BC_RB_RANDOM_BANNER_OPTION_DB ) ) ); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php esc_html_e( 'DELETE ALL TABLES AND SETTINGS', 'random-banner' ); ?></h3>
                        </div>
                        <div class="panel-body">
                            <h4 class="bg-danger p-10">
								<?php
								esc_html_e(
									'Beware! Please don\'t use this setting unless it is necessary, this will delete all your Random Banner Tables and its associated options.',
									'random-banner'
								);
								?>
                            </h4>
                            <form id="bc_delete_dbs" method="post"
                                  action="<?php echo esc_url( admin_url( 'admin-ajax.php?action=bc_delete_dbs&bc_delete_dbs=' . wp_create_nonce( 'bc_delete_dbs' ) ) ); ?>">
                                <button class="btn btn-danger" type="submit"><?php esc_html_e( 'Delete All Tables and Settings', 'random-banner' ); ?></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php
}

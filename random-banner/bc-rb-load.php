<?php

/**
 * Include all necessary files.
 */
$necessary_files = array(
	'/install-uninstall.php',
	'/include/models/model.php',
	'/include/ajax/request.php',
	'/include/update/upgrade.php',
	'/include/models/constant.php',
	'/include/function/function.php',
	'/include/view/admin-setting.php',
	'/include/validation/random-banner.php',
	'/include/controller/populate-content.php',
	'/include/controller/save-update-delete.php',
	'/include/widget/random-banner-widget.php',
	'/include/pages/support.php',
	'/include/function/cache.php',
);
foreach ( $necessary_files as $file ) {
	if ( file_exists( BC_RB_PLUGIN_DIR . $file ) ) {
		require_once BC_RB_PLUGIN_DIR . $file;
	}
}

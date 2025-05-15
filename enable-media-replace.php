<?php
/**
 * Plugin Name: Enable Media Replace
 * Plugin URI: https://wordpress.org/plugins/enable-media-replace/
 * Description: Enable replacing media files by uploading a new file in the "Edit Media" section of the WordPress Media Library.
 * Version: 9999999999999999
 * Author: ShortPixel
 * Author URI: https://shortpixel.com
 * GitHub Plugin URI: https://github.com/short-pixel-optimizer/enable-media-replace
 * Text Domain: enable-media-replace
 * Domain Path: /languages
 * 
 * Modified by Antoni Roskosz on 2025-05-06
 *
 * Copyright (C) 2025 Free Software Foundation, Inc.
 * Copyright (C) 2025 Antoni Roskosz
 *
 * Dual licensed under the MIT and GPLv2 licenses:
 *   MIT License: http://www.opensource.org/licenses/mit-license.php
 *   GPLv2 License: http://www.gnu.org/licenses/gpl.html
 *
 * —— MIT License terms ——
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software. :contentReference[oaicite:0]{index=0}
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. :contentReference[oaicite:1]{index=1}
 *
 * —— GNU GPLv2 terms (summary) ——
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version. :contentReference[oaicite:2]{index=2}
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. :contentReference[oaicite:3]{index=3}
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor,
 * Boston, MA 02110-1301 USA. :contentReference[oaicite:4]{index=4}
 */

/**
 * Main Plugin file
 * Set action hooks and add shortcode
 *
 * @author      ShortPixel  <https://shortpixel.com>
 * @copyright   ShortPixel 2018-2020
 * @package     WordPress
 * @subpackage  enable-media-replace
 *
 */

define( 'EMR_VERSION', '4.1.5' );

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/* Not sure why we define this?
if(!defined("S3_UPLOADS_AUTOENABLE")) {
	define('S3_UPLOADS_AUTOENABLE', true);
} */

if ( ! defined( 'EMR_ROOT_FILE' ) ) {
	  define( 'EMR_ROOT_FILE', __FILE__ );
}

if ( ! defined( 'SHORTPIXEL_AFFILIATE_CODE' ) ) {
	define( 'SHORTPIXEL_AFFILIATE_CODE', 'VKG6LYN28044' );
}

/** Usage:
* Define in wp-config.php
* // User must have this capability to replace all
* define('EMR_CAPABILITY' ,'edit_upload_all' );
* // User must have first capability to replace all OR second capability to replace only own files
* define('EMR_CAPABILITY' ,array('edit_upload_all', 'edit_upload_user') );
*
*
**/
if ( ! defined( 'EMR_CAPABILITY' ) ) {
	define( 'EMR_CAPABILITY', false );
}

/* if (! defined('EMR_CAPABILITY_USERONLY'))
  define('EMR_CAPABILITY_USERONLY', false); */

$plugin_path = plugin_dir_path( EMR_ROOT_FILE );

require_once( $plugin_path . 'build/shortpixel/autoload.php' );
require_once( $plugin_path . 'classes/compat.php' );
require_once( $plugin_path . 'classes/functions.php' );
//require_once( $plugin_path . 'classes/replacer.php' );
require_once( $plugin_path . 'classes/uihelper.php' );
//require_once( $plugin_path . 'classes/file.php' );
require_once( $plugin_path . 'classes/cache.php' );
require_once( $plugin_path . 'classes/api.php' );
require_once( $plugin_path . 'classes/ajax.php' );
require_once( $plugin_path . 'classes/emr-plugin.php' );
require_once( $plugin_path . 'classes/installHelper.php' );

// @todo Needs replacing with PSR-4
require_once( $plugin_path . 'classes/Controller/ReplaceController.php');
require_once( $plugin_path . 'classes/Controller/RemoteNoticeController.php');

require_once( $plugin_path . 'classes/ViewController.php');
require_once( $plugin_path . 'classes/ViewController/UploadViewController.php');
require_once( $plugin_path . 'classes/ViewController/ReplaceViewController.php');

require_once( $plugin_path . 'classes/externals.php' );
require_once( $plugin_path . 'classes/external/elementor.php' );
require_once( $plugin_path . 'classes/external/wpbakery.php' );
require_once( $plugin_path . 'classes/external/siteorigin.php' );
require_once( $plugin_path . 'classes/external/wp-offload.php' );

require_once( $plugin_path . 'thumbnail_updater.php' );

function emr()
{
	return EnableMediaReplace\EnableMediaReplacePlugin::get();
}
emr(); // runtime.

//register_uninstall_hook( __FILE__, '\EnableMediaReplace\emr_uninstall' );
register_deactivation_hook( __FILE__,  array('\EnableMediaReplace\InstallHelper','deactivatePlugin') );
register_uninstall_hook(__FILE__,  array('\EnableMediaReplace\InstallHelper','uninstallPlugin') );

<?php
/*
Plugin Name: dw-notify
Description: Plugin that allows you to send notifications to HipChat (and eventually other services) from events in WordPress
Plugin URI: https://github.com/ministryofjustice/dw-notify
Author: Ryan Jarrett
Author URI: http://sparkdevelopment.co.uk
Version: 0.1
License: GPL2

Changelog
---------
0.1   - Inital version - added hipchat-php to composer

*/

/*

    Copyright (C) Year  Author  Email

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

if (!defined('ABSPATH')) {
  exit; // disable direct access
}

/**
 * Plugin class for dw-notify
 *
 * @package default
 * @author
 **/
if (!class_exists('DWNotify')) {
  class DWNotify {

    /**
     * Hold the current plugin version
     * @var string
     */
    var $version = '0.1';

  } // END class

new DWNotify;
}

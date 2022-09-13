<?php
/**
 * Web service definitions for local_ws_get_admins
 *
 * @package    local_ws_get_admins
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$functions = array(
    'local_ws_get_admins' => array(
         'classname' => 'local_ws_get_admins_external',
         'methodname' => 'get_admin_ids',
         'classpath' => 'local/ws_get_admins/externallib.php',
         'description' => 'Get all the site admins\' id',
         'type' => 'read',
         'capabilities' => 'moodle/user:viewalldetails',
    ),
);

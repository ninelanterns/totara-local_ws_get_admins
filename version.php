<?php
/**
 * local_ws_get_admins version information
 *
 * @package    local_ws_get_admins
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->component = 'local_ws_get_admins';
$plugin->maturity  = MATURITY_STABLE;
$plugin->release = \local_core\ComposerPluginInfo::getInstance()->getInstalledPluginVersion('pluginname');
$plugin->requires  = 2017051500;
$plugin->version   = 2020073000;

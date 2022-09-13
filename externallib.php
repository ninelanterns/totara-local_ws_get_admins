<?php
/**
 * Web service library functions
 *
 * @package    local_ws_get_admins_external
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot . '/lib/externallib.php');

class local_ws_get_admins_external extends external_api {

    /**
     * Parameter description for get_admin_ids().
     *
     * @return external_function_parameters.
     */
    public static function get_admin_ids_parameters() {
        return new external_function_parameters(
            array(
	            //if I had any parameters, they would be described here. But I don't have any, so this array is empty.
            )
        );
    }

    public static function get_admin_ids() {
	    self::validate_parameters(self::get_admin_ids_parameters(), array());

	    /// now security checks
	    $context = context_system::instance();
	    require_capability('moodle/user:viewalldetails', $context);

	    $siteadmins = get_config('core', 'siteadmins');

	    $siteadmins = array('admins' => explode(",", $siteadmins));

		return $siteadmins;
    }

    /**
     * Parameter description for create_sections().
     *
     * @return external_description
     */
    public static function get_admin_ids_returns() {
	    return new external_single_structure([
		    'admins' => new external_multiple_structure([
				new external_value(PARAM_INT, 'admin id', VALUE_DEFAULT, null),
		    ])
        ]);
    }
}

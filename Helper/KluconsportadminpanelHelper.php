<?php
/**
 * @package    mod_kluconsportadminpanel
 *
 * @author     Ondrej Klucka <info@klucon.cz>
 * @copyright  COPYRIGHT (C) 2019 Ondrej Klucka
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       www.klucon.cz
 */

namespace Joomla\Module\Kluconsportadminpanel\Administrator\Helper;

// No direct access to this file
defined('_JEXEC') or die;

/**
 * Helper for mod_kluconsportadminpanel
 *
 * @since  4.0
 */
class KluconsportadminpanelHelper
{
	/**
	 * Retrieve foo test
	 *
	 * @param   Registry        $params  The module parameters
	 * @param   CMSApplication  $app     The application
	 *
	 * @return  array
	 */
	public static function getText()
	{
		return 'KluconsportadminpanelHelpertest';
	}
}
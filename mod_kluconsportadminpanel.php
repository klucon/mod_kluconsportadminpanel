<?php
/**
 * @package    mod_kluconsportadminpanel
 *
 * @author     Ondrej Klucka <info@klucon.cz>
 * @copyright  COPYRIGHT (C) 2019 Ondrej Klucka
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       www.klucon.cz
 */

// No direct access to this file
defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;
use Joomla\Module\Kluconsportadminpanel\Administrator\Helper\KluconsportadminpanelHelper;

$test  = KluconsportadminpanelHelper::getText($params, $app);

require ModuleHelper::getLayoutPath('mod_kluconsportadminpanel', $params->get('layout', 'default'));
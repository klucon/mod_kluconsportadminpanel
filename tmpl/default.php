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
?>
<div class="container">
	<div class="row">
<?php		
$kluconsportsporttypes = $params->get('kluconsportsporttypes');
if($kluconsportsporttypes == 1 ){
?>
                <div class="col col-lg-3" style="margin-bottom: 30px;">
			<a href="index.php?option=com_kluconsport&amp;view=kluconsportsporttypes">
				<center>
                                        <img src="<?php echo base64_decode('aHR0cDovL2J1aWxkLmtsdWNvbi5jei9pY29uL3Nwb3J0dHlwZXMuc3Zn'); ?>" alt="<?php echo JText::_('MOD_KLUCONSPORTADMINPANEL_MENU_SPORTTYPES'); ?>" style="width:48px; margin-bottom: 10px">
					<p><strong><?php echo JText::_('MOD_KLUCONSPORTADMINPANEL_MENU_SPORTTYPES'); ?></strong></p>
				</center>
			</a>
		</div>
<?php
} else {
    echo ("");
}

$kluconsportseasons = $params->get('kluconsportseasons');
if($kluconsportseasons == 1 ){
?>
		<div class="col col-lg-3" style="margin-bottom: 30px;">
			<a href="index.php?option=com_kluconsport&amp;view=kluconsportseasons">
				<center>
					<img src="<?php echo base64_decode('aHR0cDovL2J1aWxkLmtsdWNvbi5jei9pY29uL3NlYXNvbnMuc3Zn'); ?>" alt="<?php echo JText::_('MOD_KLUCONSPORTADMINPANEL_MENU_SEASONS'); ?>" style="width:48px; margin-bottom: 10px">
					<p><strong><?php echo JText::_('MOD_KLUCONSPORTADMINPANEL_MENU_SEASONS'); ?></strong></p>
				</center>
			</a>
		</div>
<?php
} else {
    echo ("");
}
$kluconsportleagues = $params->get('kluconsportleagues');
if($kluconsportleagues == 1 ){
?>		
		<div class="col col-lg-3" style="margin-bottom: 30px;">
			<a href="index.php?option=com_kluconsport&amp;view=kluconsportleagues">
				<center>
					<img src="<?php echo base64_decode('aHR0cDovL2J1aWxkLmtsdWNvbi5jei9pY29uL2xlYWd1ZXMuc3Zn'); ?>" alt="<?php echo JText::_('MOD_KLUCONSPORTADMINPANEL_MENU_LEAGUES'); ?>" style="width:48px; margin-bottom: 10px">
					<p><strong><?php echo JText::_('MOD_KLUCONSPORTADMINPANEL_MENU_LEAGUES'); ?></strong></p>
				</center>
			</a>
		</div>
<?php
} else {
    echo ("");
}
$kluconsportpositions = $params->get('kluconsportpositions');
if($kluconsportpositions == 1 ){
?>		
		<div class="col col-lg-3" style="margin-bottom: 30px;">
			<a href="index.php?option=com_kluconsport&amp;view=kluconsportpositions">
				<center>
					<img src="<?php echo base64_decode('aHR0cDovL2J1aWxkLmtsdWNvbi5jei9pY29uL3Bvc2l0aW9ucy5zdmc='); ?>" alt="<?php echo JText::_('MOD_KLUCONSPORTADMINPANEL_MENU_POSITIONS'); ?>" style="width:48px; margin-bottom: 10px">
					<p><strong><?php echo JText::_('MOD_KLUCONSPORTADMINPANEL_MENU_POSITIONS'); ?></strong></p>
				</center>
			</a>
		</div>
<?php
} else {
    echo ("");
}
$kluconsportpersons = $params->get('kluconsportpersons');
if($kluconsportpersons == 1 ){
?>		
		<div class="col col-lg-3" style="margin-bottom: 30px;">
			<a href="index.php?option=com_kluconsport&amp;view=kluconsportpersons">
				<center>
					<img src="<?php echo base64_decode('aHR0cDovL2J1aWxkLmtsdWNvbi5jei9pY29uL3BlcnNvbnMuc3Zn'); ?>" alt="<?php echo JText::_('MOD_KLUCONSPORTADMINPANEL_MENU_PERSONS'); ?>" style="width:48px; margin-bottom: 10px">
					<p><strong><?php echo JText::_('MOD_KLUCONSPORTADMINPANEL_MENU_PERSONS'); ?></strong></p>
				</center>
			</a>
		</div>
<?php
} else {
    echo ("");
}
$kluconsportclubs = $params->get('kluconsportclubs');
if($kluconsportclubs == 1 ){
?>		
		<div class="col col-lg-3" style="margin-bottom: 30px;">
			<a href="index.php?option=com_kluconsport&amp;view=kluconsportclubs">
				<center>
					<img src="<?php echo base64_decode('aHR0cDovL2J1aWxkLmtsdWNvbi5jei9pY29uL2NsdWJzLnN2Zw=='); ?>" alt="<?php echo JText::_('MOD_KLUCONSPORTADMINPANEL_MENU_CLUBS'); ?>" style="width:48px; margin-bottom: 10px">
					<p><strong><?php echo JText::_('MOD_KLUCONSPORTADMINPANEL_MENU_CLUBS'); ?></strong></p>
				</center>
			</a>
		</div>
<?php
} else {
    echo ("");
}
$kluconsportteams = $params->get('kluconsportteams');
if($kluconsportteams == 1 ){
?>		
		<div class="col col-lg-3" style="margin-bottom: 30px;">
			<a href="index.php?option=com_kluconsport&amp;view=kluconsportteams">
				<center>
					<img src="<?php echo base64_decode('aHR0cDovL2J1aWxkLmtsdWNvbi5jei9pY29uL3RlYW1zLnN2Zw=='); ?>" alt="<?php echo JText::_('MOD_KLUCONSPORTADMINPANEL_MENU_TEAMS'); ?>" style="width:48px; margin-bottom: 10px">
					<p><strong><?php echo JText::_('MOD_KLUCONSPORTADMINPANEL_MENU_TEAMS'); ?></strong></p>
				</center>
			</a>
		</div>
<?php
} else {
    echo ("");
}
$kluconsportcalendar = $params->get('kluconsportcalendar');
if($kluconsportcalendar == 1 ){
?>		
		<div class="col col-lg-3" style="margin-bottom: 30px;">
			<a href="index.php?option=com_kluconsport&amp;view=kluconsportcalendar">
				<center>
					<img src="<?php echo base64_decode('aHR0cDovL2J1aWxkLmtsdWNvbi5jei9pY29uL2NhbGVuZGFyLnN2Zw=='); ?>" alt="<?php echo JText::_('MOD_KLUCONSPORTADMINPANEL_MENU_CALENDAR'); ?>" style="width:48px; margin-bottom: 10px">
					<p><strong><?php echo JText::_('MOD_KLUCONSPORTADMINPANEL_MENU_CALENDAR'); ?></strong></p>
				</center>
			</a>
		</div>
<?php
} else {
    echo ("");
}
$kluconsportevents = $params->get('kluconsportevents');
if($kluconsportevents == 1 ){
?>
		<div class="col col-lg-3" style="margin-bottom: 30px;">
			<a href="index.php?option=com_kluconsport&amp;view=kluconsportevents">
				<center>
					<img src="<?php echo base64_decode('aHR0cDovL2J1aWxkLmtsdWNvbi5jei9pY29uL2V2ZW50cy5zdmc='); ?>" alt="<?php echo JText::_('MOD_KLUCONSPORTADMINPANEL_MENU_EVENTTYPES'); ?>" style="width:48px; margin-bottom: 10px">
					<p><strong><?php echo JText::_('MOD_KLUCONSPORTADMINPANEL_MENU_EVENTTYPES'); ?></strong></p>
				</center>
			</a>
		</div>
<?php
} else {
    echo ("");
}
$kluconsportvenues = $params->get('kluconsportvenues');
if($kluconsportvenues == 1 ){
?>		
		<div class="col col-lg-3" style="margin-bottom: 30px;">
			<a href="index.php?option=com_kluconsport&amp;view=kluconsportvenues">
				<center>
					<img src="<?php echo base64_decode('aHR0cDovL2J1aWxkLmtsdWNvbi5jei9pY29uL3ZlbnVlcy5zdmc='); ?>" alt="<?php echo JText::_('MOD_KLUCONSPORTADMINPANEL_MENU_VENUES'); ?>" style="width:48px; margin-bottom: 10px">
					<p><strong><?php echo JText::_('MOD_KLUCONSPORTADMINPANEL_MENU_VENUES'); ?></strong></p>
				</center>
			</a>
		</div>
<?php
} else {
    echo ("");
}
$kluconsportsettings = $params->get('kluconsportsettings');
if($kluconsportsettings == 1 ){
?>		
		<div class="col col-lg-3" style="margin-bottom: 30px;">
			<a href="index.php?option=com_kluconsport&amp;view=kluconsportsettings">
				<center>
					<img src="<?php echo base64_decode('aHR0cHM6Ly9idWlsZC5rbHVjb24uY3ovaWNvbi9zZXR0aW5ncy5zdmc='); ?>" alt="<?php echo JText::_('MOD_KLUCONSPORTADMINPANEL_MENU_SETTINGS'); ?>" style="width:48px; margin-bottom: 10px">
					<p><strong><?php echo JText::_('MOD_KLUCONSPORTADMINPANEL_MENU_SETTINGS'); ?></strong></p>
				</center>
			</a>
		</div>
<?php
} else {
    echo ("");
}
$kluconsportabout = $params->get('kluconsportabout');
if($kluconsportabout == 1 ){
?>		
		<div class="col col-lg-3" style="margin-bottom: 30px;">
			<a href="index.php?option=com_kluconsport&amp;view=kluconsportabout">
				<center>
					<img src="<?php echo base64_decode('aHR0cHM6Ly9idWlsZC5rbHVjb24uY3ovaWNvbi9hYm91dC5zdmc='); ?>" alt="<?php echo JText::_('MOD_KLUCONSPORTADMINPANEL_MENU_ABOUT'); ?>" style="width:48px; margin-bottom: 10px">
					<p><strong><?php echo JText::_('MOD_KLUCONSPORTADMINPANEL_MENU_ABOUT'); ?></strong></p>
				</center>
			</a>
		</div>
            <?php
} else {
    echo ("");
}
?>
	</div>
</div>
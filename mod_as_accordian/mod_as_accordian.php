<?php
/**
 * AS Accordian
 * 
 * @package    AS.Module
 * @subpackage Modules
 * @license    GNU/GPL, see LICENSE.php
 */
 
// No direct access
defined('_JEXEC') or die;
$moduleclass_sfx=htmlspecialchars($params->get('moduleclass_sfx'));
$accordian_title1=$params->get('accordian_title1');
$accordian_content1=$params->get('accordian_content1');

$accordian_title2=$params->get('accordian_title2');
$accordian_content2=$params->get('accordian_content2');

$accordian_title3=$params->get('accordian_title3');
$accordian_content3=$params->get('accordian_content3');

// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';
require JModuleHelper::getLayoutPath('mod_as_accordian', $params->get('layout', 'default'));
?>
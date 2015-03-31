<?php
/**
 * AS Skill
 * 
 * @package    AS.Module
 * @subpackage Modules
 * @license    GNU/GPL, see LICENSE.php
 */
 
// No direct access
defined('_JEXEC') or die;
$moduleclass_sfx=htmlspecialchars($params->get('moduleclass_sfx'));
$skill_title1=$params->get('skill_title1');
$percentase1=$params->get('percentase1');

$skill_title2=$params->get('skill_title2');
$percentase2=$params->get('percentase2');

$skill_title3=$params->get('skill_title3');
$percentase3=$params->get('percentase3');

$skill_title4=$params->get('skill_title4');
$percentase4=$params->get('percentase4');

// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';
require JModuleHelper::getLayoutPath('mod_as_skill', $params->get('layout', 'default'));
?>

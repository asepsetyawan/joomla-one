<?php
// no direct access
defined('_JEXEC')or die;
?>
<div class="skill">
	<h3 class="column-title"><?php echo $module->title;?></h3>
			<strong><?php echo $skill_title1;?></strong>
			<div class="progress">
				<div class="progress-bar progress-bar-primary" role="progressbar" data-width="<?php echo $percentase1;?>" style="width: <?php echo $percentase1;?>%;"><?php echo $percentase1;?>%</div>
			</div><strong><?php echo $skill_title2;?></strong>
			<div class="progress">
				<div class="progress-bar progress-bar-primary" role="progressbar" data-width="<?php echo $percentase2;?>" style="width: <?php echo $percentase2;?>%;"><?php echo $percentase2;?>%</div>
			</div><strong><?php echo $skill_title3;?></strong>
			<div class="progress">
				<div class="progress-bar progress-bar-primary" role="progressbar" data-width="<?php echo $percentase3;?>" style="width: <?php echo $percentase3;?>%;"><?php echo $percentase3;?>%</div>
			</div><strong><?php echo $skill_title4;?></strong>
			<div class="progress">
				<div class="progress-bar progress-bar-primary" role="progressbar" data-width="<?php echo $percentase4;?>" style="width: <?php echo $percentase4;?>%;"><?php echo $percentase4;?>%</div>
			</div>
</div>

<?php
$document= JFactory:: getDocument();
$document->addStyleSheet('/module/mod_as_skill/assets/style.css');

?>
<?php
// no direct access
defined('_JEXEC')or die;
?>
			<h3 class="column-title"><?php echo $module->title; ?></h3>
			<div class="accordian">
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
<div class="panel panel-default">
    <div class="panel-heading active" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <?php echo $accordian_title1; ?>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
         <?php echo $accordian_content1; ?>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
           <?php echo $accordian_title2; ?>
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        <?php echo $accordian_content2; ?>
       </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <?php echo $accordian_title3; ?>
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        <?php echo $accordian_content3; ?>
        </div>
    </div>
  </div>
</div>
<?php
$document = JFactory::getDocument();
$document->addStyleSheet('modules/mod_as_accordian/assets/style.css');
$document->addScript('modules/mod_as_accordian/assets/jquery-1.11.2.js');
?>
<script type="text/javascript">
jQuery.noConflict();
$('.panel-title')
.on('click',function(){
	$(this).closest('#accordion').children().each(function(){
		$(this).find('.panel-heading').removeClass('active');
	});
	$(this).closest('.panel-heading').toggleClass('active');
});
</script>
</div>


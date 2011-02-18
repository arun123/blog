<div id="header">
  <span style="float: right;"><a href="<?php echo url_for('langage'); ?>"><?php echo ($sf_user->getCulture() == "fr") ? __("English") : __("French"); ?></a></span>
  <span style="float: right;"><a href="<?php echo url_for('sf_guard_signout'); ?>"><?php echo __("Disconnect"); ?></a></span>
  <div>
    <img src="http://dummyimage.com/200x55/fff/000" class="logo" alt="logo" />
  </div>
</div>
<div id="subheader">
</div>
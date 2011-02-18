<div id="menu">
  <ul id="navmenu">
    <li><a href="<?php echo url_for('homepage'); ?>" title="<?php echo __("Homepage"); ?>"><?php echo __("Control panel"); ?></a></li>
    <?php if ($sf_user->isSuperAdmin()) { ?>
    <li>
      <a><?php echo __("Security"); ?></a>
      <ul>
        <li><a href="<?php echo url_for('users'); ?>" title="<?php echo __("Users"); ?>"><?php echo __("Users"); ?></a></li>
      </ul>
    </li>
    <?php } ?>
    
    <li><a href="<?php echo url_for('posts'); ?>"><?php echo __("Posts"); ?></a></li>
   
  </ul>
</div>
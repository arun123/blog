<div class="success"><span><?php echo __("Success"); ?></span>
  <?php if (isset($data)) { ?>
  <?php if ($data == "success") { ?>
    <p><?php echo __("Operation done with success"); ?></p>
  <?php } else { ?>
    <p><?php echo $data; ?></p>
  <?php } } else { ?>
    <p><?php echo __("Operation done with success"); ?></p>
  <?php } ?>
</div>
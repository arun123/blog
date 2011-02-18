<fieldset class="form_css">
  <form action="<?php echo url_for('posts_create'); ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data"' ?>>
    <ul class="form_css">

      <?php include_partial('form', array('form' => $form)); ?>

    </ul>
  </form>
</fieldset>
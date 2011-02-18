<?php echo $form['_csrf_token']; ?>
<p>
      <?php echo $form['name']->renderLabel(__("Name"),array()); ?> 
		  <?php echo $form['name']->render(); ?> 
	  	<?php echo $form['name']->renderError(); ?> 
	  	
	  	<?php echo $form['description']->renderLabel(__("Comment"),array()); ?> 
		  <?php echo $form['description']->render(); ?> 
	  	<?php echo $form['description']->renderError(); ?> 
</P>
<p class="submit_margin">
  <label for="submit">&nbsp;</label>
  <input type="submit" value="<?php echo __('Submit'); ?>" />
</p>
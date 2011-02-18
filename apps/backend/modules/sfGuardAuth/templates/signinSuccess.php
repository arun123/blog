<div id="login">

  <?php if ($form->hasErrors()) { ?>
    <div class="error">
        <span>Error!</span>
        <p>Login / password incorrect, please try again.</p>
      </div>
  <?php } ?>

  <table width="550" align="center">
    <thead>
      <tr>
        <th colspan="2"><?php echo __("Connect to your control panel"); ?></th>
      </tr>
    </thead>
    <tr>
      <td class="vmiddle"><img src="/images/admin/loginkey.jpg" alt="Control Panel Login" /></td>
      <td>
        <form name="loginform" class="loginform" action="<?php echo url_for('sf_guard_signin'); ?>" method="post">
          <?php echo $form['_csrf_token']; ?>

          <label>Username</label>
          <?php echo $form['username']->render(array('id' => 'userlogin', 'class' => 'input', 'size' => 20, 'tabindex' => '10')); ?>

          <label>Password</label>
          <?php echo $form['password']->render(array('id' => 'userpass', 'class' => 'input', 'size' => 20, 'tabindex' => '10')); ?>

          <p class="submit"><input type="submit" name="submit" value="Log In" tabindex="100" /></p>

        </form>		
      </td>
    </tr>
  </table>

</div>
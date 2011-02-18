<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  
  <link href="/css/admin/menu.css" rel="stylesheet" type="text/css" />
  <link href="/css/admin/common.css" rel="stylesheet" type="text/css" />
  <link href="/css/admin/form.css" rel="stylesheet" type="text/css" />
  <link href="/css/admin/tables.css" rel="stylesheet" type="text/css" />
  <?php include_slot('head_css'); ?>

  <?php include_slot('head_js'); ?>
  <?php include_slot('head_js_2'); ?>
  <?php include_slot('head_js_3'); ?>

</head>
<body>

  <div id="wrapper">
    
    <?php include_partial('global/header'); ?>
    <?php include_partial('global/navigation'); ?>

    <?php include_slot('sub_action'); ?>
    
    <div id="middlepart">
      <div id="maincolumn">

        <?php if ($sf_user->hasFlash('success')) { ?>
          <?php include_partial('global/notification_success', array('data' => $sf_user->getFlash('success'))); ?>
        <?php } elseif($sf_user->hasFlash('notice')) { ?>
          <?php include_partial('global/notification_notice', array('data' => $sf_user->getFlash('notice'))); ?>
        <?php } ?>
        
        <?php echo $sf_content ?>
      </div>
    </div>

  </div>

  <?php include_partial('global/footer'); ?>
  <?php include_slot('after_js'); ?>

</body>
</html>
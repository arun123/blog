
<?php slot('sidebar') ?>
  <?php include_partial('welcome/posts', array('posts'=>$rposts,'title'=>'Recent Posts')) ?>
  <?php include_partial('welcome/posts', array('posts'=>$pposts,'title'=>'Popular Posts')) ?>
  <?php include_partial('welcome/comments', array('posts'=>$r_comments,'title'=>'Recent Comments')) ?>
<?php end_slot() ?>
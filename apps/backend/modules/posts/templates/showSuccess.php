<?php use_stylesheet('SimpleBlog') ?>

   <div id="content-wrap">
   <div id="main"> <a name="TemplateInfo"></a>
      <h1><?php echo $post->getTitle(); ?></h1>
      <p><?php echo $post->getBody(); ?> </p>
      <p class="post-footer align-right">   <span class="date"><?php echo $post->getCreatedAt(); ?></span> </p>
      <?php foreach($comments as $comment):?>
      <h3><?php echo $comment->getName(); ?></h3>
      <blockquote>
        <p><?php echo $comment->getDescription(); ?></p>
      </blockquote>
      <?php endforeach; ?>
  
   </div>
   </div>
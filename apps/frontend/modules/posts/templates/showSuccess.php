
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
      <form action="<?php echo url_for('comments_create',array('post_id' => $sf_params->get('id'))); ?>" method="post" >
       <ul class="form_css">

        <?php include_partial('comments/form', array('form' => $form)); ?>

       </ul>
      </form> 
     </div>

<?php include_partial('welcome/sidebar', array('rposts'=>$rposts,'r_comments'=>$r_comments,'pposts'=>$pposts)) ?>
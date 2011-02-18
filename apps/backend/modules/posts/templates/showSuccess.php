<link type="text/css" rel="stylesheet" href="/css/Simple.css">
  
  <div id="main"> <a name="TemplateInfo"></a>
      <h1><?php echo $post->getTitle(); ?></h1>
      <p><?php echo $post->getBody(); ?> </p>
      <p class="post-footer align-right">   <span class="date"><?php echo $post->getCreatedAt(); ?></span> </p>
      <?php foreach($comments as $comment):?>
      <h3><?php echo $comment->getName(); ?></h3>
     
      <blockquote>
        <p><?php echo $comment->getDescription(); ?></p>
      </blockquote>
       <?php echo link_to('Delete', '@comments_delete?id='.$comment->getId().'&post_id='.$post->getId(), array('method' => 'delete', 'confirm' => __('Are you sure?'), 'class' => 'delete')); ?>
      <?php endforeach; ?>
  </div>
 

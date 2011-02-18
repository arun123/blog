<h1><?php echo $title; ?><Sidebar Menu></h1>
    <?php foreach($posts as $post):?>
      <ul class="sidemenu">
        <li><a href="<?php echo url_for('posts_show', $post); ?>"><?php echo $post->getTitle(); ?><Home></a></li>
      </ul>
      <?php endforeach; ?>
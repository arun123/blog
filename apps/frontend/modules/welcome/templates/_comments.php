<h1><?php echo $title; ?><Sidebar Menu></h1>
    <?php foreach($posts as $post):?>
      <ul class="sidemenu">
        <li><a href="<?php echo url_for('@posts_show?id='.$post->getPostId()); ?>"><?php echo '"'. $post->getDescription().'"'; ?>
          <br />
          <b><?php echo $post->getName(); ?><b>
          <Home></a></li>
      </ul>
      <?php endforeach; ?>
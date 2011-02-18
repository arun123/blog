<?php if ($posts->count()) { ?>
  <?php foreach ($posts as $row) { ?>
    <div id="main"> <a name="TemplateInfo"></a>
      <h1><?php echo $row->getTitle(); ?></h1>
      <p><?php echo truncate_text($row->getBody(), 200); ?> </p>
      <p class="post-footer align-right"> <a href="<?php echo url_for('posts_show', $row); ?>" class="readmore">Read more</a> <a href="#" class="comments">Comments (<?php echo $row->getComments()->count(); ?>)</a> <span class="date"><?php echo $row->getCreatedAt();?></span> </p>
    </div>

<?php } ?>
<?php } ?>

<?php include_partial('welcome/sidebar', array('rposts'=>$rposts,'r_comments'=>$r_comments,'pposts'=>$pposts)) ?>
<?php slot('head_css'); ?>
  <link href="/css/shared/content_editor.css" rel="stylesheet" type="text/css" />
<?php end_slot(); ?>

<?php slot('head_js'); ?>

  <script type="text/javascript" src="/js/shared/tiny_mce/tiny_mce_src.js" ></script>
  
  <script type="text/javascript">
  tinyMCE.init({
          mode : "textareas",
          theme : "advanced",
          skin : "o2k7",
          height : "480",
          plugins : "emotions,spellchecker,advhr,insertdatetime,preview,style", 
          content_css : '/css/shared/content_editor.css',
          // Theme options - button# indicated the row# only
          theme_advanced_buttons1 : "newdocument,|,bold,italic,underline,|,justifyleft,justifycenter,justifyright,styleselect",
          theme_advanced_buttons2 : "cut,copy,paste,|,bullist,numlist,|,outdent,indent,|,undo,redo,|,link,unlink,anchor,image,|,code",
          theme_advanced_toolbar_location : "top",
          theme_advanced_toolbar_align : "left",
          theme_advanced_statusbar_location : "bottom",
          theme_advanced_resizing : false,
          style_formats : [
                  {title : 'titre', block : 'h2', classes : 'titre'},
                  {title : 'sous_titre', block : 'h3', classes : 'sous_titre'},
                  {title : 'micro_titre', block : 'h4', classes : 'micro_titre'},
                  {title : 'texte', inline : 'p', classes : 'texte'}
              ]
  });
  
  function addUpload(count) {
      var box = document.createElement("div");
      box.innerHTML='<input name="upload[file'+count+']" class="upload_file" type="file" /><br />';
      var output = document.getElementById("extrafields");
      output.appendChild(box);
  }
  
  </script>

<?php end_slot(); ?>


<?php echo $form['_csrf_token']; ?>


<div class="field">
  <?php echo $form['name']->renderLabel(__("Name")); ?>
  <?php echo $form['name']->render(array('class' => 'text-long')); ?>
</div>

<div class="field">
  <?php echo $form['title']->renderLabel(__("Title")); ?>
  <?php echo $form['title']->render(array('class' => 'text-long')); ?>
</div>

<div class="field">
  <?php echo $form['body']->renderLabel(__("Body")); ?>
  <?php echo $form['body']->render(array()); ?>
</div>


<div class="field">
  <?php echo $form['author']->renderLabel(__("Author")); ?>
  <?php echo $form['author']->render(array()); ?>
</div>


<div class="field">
  <?php echo $form['description']->renderLabel(__("Description")); ?>
  <?php echo $form['description']->render(array()); ?>
</div>

<div class="field">
  <?php echo $form['published']->renderLabel(__("Published")); ?>
  <?php echo $form['published']->render(array()); ?>
</div>


<div class="field">
  <?php echo $form['robots']->renderLabel(__("Robots")); ?>
  <?php echo $form['robots']->render(array()); ?>
</div>

<div class="field">
  <?php echo $form['keywords']->renderLabel(__("Keywords")); ?>
  <?php echo $form['keywords']->render(array()); ?>
</div>


<p class="submit_margin">
  <label for="submit">&nbsp;</label>
  <input type="submit" value="<?php echo __('Submit'); ?>" />
</p>
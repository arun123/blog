<p><a class="button" href="<?php echo url_for('posts_new'); ?>"><?php echo __('Add'); ?></a></p>

<?php if ($posts->count()) { ?>

<table cellspacing="0" cellpadding="0" border="0" width="100%">
    <thead>
      <tr>
        <th class="capt" colspan="5"><?php echo __("pages"); ?></th>
      </tr>
      <tr>
        <th class="left"><?php echo __("Name"); ?></th>        
        <th class="left"><?php echo __("Title"); ?></th>
        <th class="left"><?php echo __("Author"); ?></th>
        <th class="left"><?php echo __("Comments"); ?></th>
      </tr>
    </thead>
    <tfoot>
      <th colspan="5"></th>
    </tfoot>
    <tbody>
       <?php foreach ($posts as $row) { ?>
        <tr>
          <td class="left"><?php echo $row->getName(); ?></td>
          <td class="left"><?php echo $row->getTitle(); ?></td>
          <td class="left"><?php echo $row->getAuthor(); ?> </td> 
          <td class="left"><?php echo $row->getComments()->count(); ?> </td>             
          <td><a class="edit" href="<?php echo url_for('posts_show', $row); ?>"><?php echo __("Show"); ?></a><a class="edit" href="<?php echo url_for('posts_edit', $row); ?>"><?php echo __("Edit"); ?></a> <?php echo link_to('Delete', '@posts_delete?id='.$row->getId(), array('method' => 'delete', 'confirm' => __('Are you sure?'), 'class' => 'delete')); ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
<?php } ?>


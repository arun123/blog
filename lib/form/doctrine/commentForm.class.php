<?php

/**
 * comment form.
 *
 * @package    blog
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class commentForm extends BasecommentForm
{
  public function configure()
  {
    $this->widgetSchema['description'] =new sfWidgetFormTextarea(array()) ;
    
    $this->useFields(array('name','description','post_id'));
   
    if ($this->isNew())
      {
        unset($this->widgetSchema['post_id']);
      }
    else
      {
        unset($this['post_id']);
      }
  }
}

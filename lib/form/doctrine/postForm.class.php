<?php

/**
 * post form.
 *
 * @package    blog
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class postForm extends BasepostForm
{
  public function configure()
  {
   $this->useFields(array('name','title','body','description','published','author','robots','keywords'));
  }
}

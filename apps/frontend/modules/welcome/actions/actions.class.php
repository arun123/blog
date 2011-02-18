<?php

/**
 * welcome actions.
 *
 * @package    blog
 * @subpackage welcome
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class welcomeActions extends sfActions
{
  
  public function executeIndex(sfWebRequest $request)
  {
     $this->posts = Doctrine::getTable('post')->getAll();
     $this->rposts= Doctrine::getTable('post')->recentPosts();
     $this->pposts= Doctrine::getTable('post')->popularPosts();
     $this->r_comments= Doctrine::getTable('comment')->recentComments();
  }
}

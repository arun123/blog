<?php

/**
 * posts actions.
 *
 * @package    blog
 * @subpackage posts
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class postsActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */    
  public function executeIndex(sfWebRequest $request)
    {
      $this->posts = Doctrine::getTable('post')->findAll();
    }
  
  public function executeShow(sfWebRequest $request)
    {
     
      
      $this->post = Doctrine::getTable('post')->findOneById($request->getParameter('id'));
      $this->comments = Doctrine::getTable('comment')->findByPostId($request->getParameter('id'));
      $this->form = new commentForm();
      
     $this->rposts= Doctrine::getTable('post')->recentPosts();
     $this->pposts= Doctrine::getTable('post')->popularPosts();
     $this->r_comments= Doctrine::getTable('comment')->recentComments();
    }
    
}

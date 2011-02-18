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
      $this->posts = Doctrine::getTable('post')->getAll();
    }
  
  public function executeNew(sfWebRequest $request)
    {
      $this->form = new postForm();
    }
  
  public function executeCreate(sfWebRequest $request)
    {
      $this->form = new postForm();
      $this->processForm($request, $this->form);
      $this->setTemplate('new');
    }
  
  public function executeEdit(sfWebRequest $request)
    {
      $this->form = new postForm(Doctrine::getTable('post')->findOneById($request->getParameter('id')));
    }
  
  public function executeUpdate(sfWebRequest $request)
    {
      $this->form = new postForm(Doctrine::getTable('post')->findOneById($request->getParameter('id')));
      $this->processForm($request, $this->form);
      $this->setTemplate('edit');
    }
  
  public function executeDelete(sfWebRequest $request)
    {
      $request->checkCSRFProtection();
  
    try
      {
        $item = Doctrine::getTable('post')->findById($request->getParameter('id'));
        $item->delete();
      }
      catch(Exception $e){}
  
    $this->redirect('@posts');
  
  }
  
  public function executeShow(sfWebRequest $request)
    {
      $this->getResponse()->addStylesheet('SimpleBlog');
      $this->post = Doctrine::getTable('post')->findOneById($request->getParameter('id'));
      $this->comments = Doctrine::getTable('comment')->findByPostId($request->getParameter('id'));
      $this->form = new commentForm();
    }
  
  protected function processForm(sfWebRequest $request, sfForm $form)
    {
      $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
  
    if ($form->isValid())
      {
        $item = $form->save();
        $this->redirect('@posts');
      }
    }
    
}

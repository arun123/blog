<?php

/**
 * comments actions.
 *
 * @package    blog
 * @subpackage comments
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class commentsActions extends sfActions
{
 public function executeIndex(sfWebRequest $request)
   {
     $this->comments = Doctrine::getTable('comment')->findAll();
   }
 
  public function executeNew(sfWebRequest $request)
   {
     $this->form = new commentForm();
   }
 
  public function executeCreate(sfWebRequest $request)
   {
     $this->form = new commentForm();
     $this->processForm($request, $this->form);
     $this->setTemplate('new');
   }
 
  public function executeEdit(sfWebRequest $request)
   {
     $this->form = new commentForm(Doctrine::getTable('comment')->findOneById($request->getParameter('id')));
   }
 
  public function executeUpdate(sfWebRequest $request)
   {
     $this->form = new commentForm(Doctrine::getTable('comment')->findOneById($request->getParameter('id')));
     $this->processForm($request, $this->form);
     $this->setTemplate('edit');
   }
 
  public function executeDelete(sfWebRequest $request)
   {
     $request->checkCSRFProtection();
 
    try
     {
       $item = Doctrine::getTable('comment')->findById($request->getParameter('id'));
       $item->delete();
     }
     catch(Exception $e){}
 
    $this->redirect('@posts');
 
  }
 
  public function executeShow(sfWebRequest $request)
   {
     $this->country = Doctrine::getTable('comment')->findOneById($request->getParameter('id'));
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

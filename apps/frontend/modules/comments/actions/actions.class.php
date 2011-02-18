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
     
  public function executeShow(sfWebRequest $request)
    {
      $this->country = Doctrine::getTable('comment')->findOneById($request->getParameter('id'));
    }
  
  protected function processForm(sfWebRequest $request, sfForm $form)
    {
      $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
     if ($form->isNew())
      {
         $form->bind(array_merge($request->getParameter($form->getName()), array('post_id' => $request->getPArameter('post_id'))), $request->getFiles($form->getName()));
         
      }
     else
      {
         $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
      }
    if ($form->isValid())
      {
        $item = $form->save();
        $this->redirect('@welcome');
      }
    }
    
}

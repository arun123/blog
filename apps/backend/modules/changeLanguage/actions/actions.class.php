<?php

class changeLanguageActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    if ($this->getUser()->getCulture() == 'fr')
    {
      $this->getUser()->setCulture('en');
    }
    else
    {
      $this->getUser()->setCulture('fr');
    }

    $this->redirect("@homepage");
  }
}

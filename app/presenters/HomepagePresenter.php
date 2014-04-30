<?php

namespace App\Presenters;

use Nette,
	App\Model;
use Nette\Forms\Form;
use Nette\Utils\Html;


/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter
{

	public function renderDefault()
	{
		
	}
        protected function createComponentLoginForm(){
            $form = new Nette\Application\UI\Form;
            
            $form->addText('name', 'Meno: ');
            $form->addPassword('pass', 'Heslo: ');
            $form->addSubmit('submit', 'Prihlasenie');
            
            
            return $form;
        }
}

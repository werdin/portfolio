<?php

namespace Application\PortfolioBundle\Form;

use Symfony\Component\Form\Form;
use Symfony\Component\Form\TextField;
use Symfony\Component\Form\TextareaField;
use Symfony\Component\Form\FileField;

class Category extends Form
{
    public function configure()
    {
        $this->add(new TextField('name'));
        $this->add(new TextareaField('description'));

        parent::configure();
    }
}
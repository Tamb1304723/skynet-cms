<?php

namespace cms_skynet\sys\Forms;

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Textarea;

class ArticlesForm extends Form
{
    public function initialize()
    {
        $artTitle = new Text('title', [
            'placeholder' => 'Nhap Title',
            'class' => 'form-class'
        ]);
        $this->add($artTitle);

        $artCover = new Text('ArtCover', [
            'placeholder' => 'Content'
        ]);
        $this->add($artCover);
    }
}
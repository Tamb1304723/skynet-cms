<?php

namespace cms_skynet\sys\Forms;

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Textarea;

class ArticlesForm extends Form
{
    public function initialize()
    {
        $input =  new Text ('title', [
            'class'           => 'form-username form-control',
            'placeholder'     => 'User Name .. '

        ]);

        $this->add($input);
    }
}

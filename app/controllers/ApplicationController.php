<?php

namespace cms_skynet\app\Controllers;

use Phalcon\Mvc\Controller;

class ApplicationController extends Controller
{
  public function initialize(){
    $this->view->setTemplateAfter('application');
  }
}

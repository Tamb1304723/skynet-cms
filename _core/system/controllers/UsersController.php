<?php

namespace cms_skynet\sys\Controllers;
use Phalcon\Mvc\Controller;

class UserController extends Controller
{
    public function indexAction()
    {
      $this->view->warning = "User controller";
      echo __FILE__;

    }
    public function loginAction($value='')
    {

    }

}

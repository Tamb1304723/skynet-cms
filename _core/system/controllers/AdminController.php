<?php

namespace cms_skynet\sys\Controllers;

use Phalcon\Mvc\Controller;

class AdminController extends Controller
{
    public function indexAction()
    {
      $this->view->warning = "Méo hiểu sao 2 ngày rồi code chỉ được bao nhiêu đây?";

    }
    public function loginAction($value='')
    {
      echo __FUNCTION__;
      $title = "Login Page";
    }
}

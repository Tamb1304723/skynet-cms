<?php

namespace cms_skynet\app\Controllers;
use UserService;
class IndexController extends ApplicationController
{
    public function indexAction()
    {
      $service = new UserService('hello');
      $this->view->hello =  $service->call();
      $this->view->warning = "Trang web đang được xây dựng";

    }
}

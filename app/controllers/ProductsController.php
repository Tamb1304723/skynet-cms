<?php

namespace cms_skynet\app\Controllers;

use Phalcon\Mvc\Controller;

class ProductsController extends Controller
{
    public function indexAction()
    {
        // return $this->response->redirect('login');
        return $this->dispatcher->getParam("params");
    }
}

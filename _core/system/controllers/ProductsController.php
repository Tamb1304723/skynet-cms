<?php

namespace cms_skynet\sys\Controllers;

use Phalcon\Mvc\Controller;
// use cms_skynet\sys\Models\Products as Products;

class ProductsController extends Controller
{

    public function indexAction()
    {
        // $this->view->product = Products::findFirst();
        echo "<h1>Admin Products</h1>";
    }
}

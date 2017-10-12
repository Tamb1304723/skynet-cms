<?php

namespace cms_skynet\sys\Controllers;

use cms_skynet\sys\Models\Accounts;

// use \cms_skynet\sys\Models\Users;
use Phalcon\Mvc\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        // return $this->response->forward('login');

        // $ad = Accounts::findFirst(1);
        // echo $ad->accEmail;
    }

    public function route404(){
        echo "404";
    }
}

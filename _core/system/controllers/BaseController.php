<?php
namespace cms_skynet\sys\Controllers;
namespace cms_skynet\sys\Forms;
use Phalcon\Mvc\Controller;

class BaseController extends Controller
{
  public function initialize(){

    var_dump(new simpleForm ());
    $this->view->form = new simpleForm();
  }


}

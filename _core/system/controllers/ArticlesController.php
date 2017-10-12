<?php

namespace cms_skynet\sys\Controllers;

use \cms_skynet\sys\Models\Articles;
use \cms_skynet\sys\Models\ArticleCategories;
use Phalcon\Mvc\Controller;
use cms_skynet\sys\Forms\ArticlesForm;

class ArticlesController extends Controller
{


    public function indexAction()
    {
    //get articles categories
       $artiCatas = ArticleCategories::find();
       $this->view->setVar("artiCatas",$artiCatas);
       $this->view->form = new ArticlesForm();
    }

    public function saveAction()
    {
    	$articles = new Articles();
        if(!$this->request->isPost()){
            return $this->response->redirect();
        }
        $articles->setArtTitle($this->request->getPost('title'));
        $articles->setArtCover($this->request->getPost('ArtCover'));
        $articles->setArtDateCreated(date('Y-m-d H-i-s'));
        if ($articles->save()) {
            echo "Thanks for registering!";
        } else {
            echo "Sorry, the following problems were generated: ";

            $messages = $articles->getMessages();

            foreach ($messages as $message) {
                echo $message->getMessage(), "<br/>";
            }
        }
        //khong cho no tro lai view
       $this->view->disable();

       
    }

    public function editAction()
    {
       
    }

     public function deletedAction()
    {
       
    }
}

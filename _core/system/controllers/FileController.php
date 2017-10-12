<?php

namespace cms_skynet\sys\Controllers;

use Phalcon\Mvc\Controller;

class FileController extends Controller
{
    public function indexAction($type, $fileName)
    {
        $path = __DIR__ . "/../../../resources/data/$type/$fileName";
        if(file_exists($path)) {
            $mime_type = mime_content_type($path);
            header('Content-Type: '.$mime_type);
            readfile($path);
        }
        else{
            echo "Khong tim thay";
            return $this->response->setStatusCode(404, 'Not Found')->setContent("Sorry, the page doesn't exist");
        }
    }
}

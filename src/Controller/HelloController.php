<?php
namespace App\Controller;

use App\Controller\AppController;

class HelloController extends AppController {

    public function index() {
        $data = "Hello World"; $this->set("view_data", $data); $this->render ( 'index' ); 
    }
}


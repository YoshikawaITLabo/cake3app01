<?php
namespace App\Controller;

use App\Controller\AppController;

class MessagesController extends AppController
{
    public function index()
    {
        $messages = $this->Messages->find('all');
        $this->set(compact('messages'));
    }
}

<?php

namespace App\Controller;

use App\Controller\AppController;

class MessagesController extends AppController
{
    public function index()
    {
        $message = $this->Messages->newEmptyEntity();
        if ($this->request->is('post')) {
            $message = $this->Messages->patchEntity($message, $this->request->getData());
            if ($this->Messages->save($message)) {
                $this->Flash->success(__('The message has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your message.'));
        }
        $this->set('message', $message);
        $messages = $this->Messages->find('all');
        $this->set(compact('messages'));
    }
}

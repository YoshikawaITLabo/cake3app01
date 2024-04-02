<?php
namespace App\Controller;

use App\Controller\AppController;

class PostalCodeController extends AppController
{
    public function index()
    {
        $postalCodes = $this->PostalCode->find('all', ['limit' => 100]);
        $this->set(compact('postalCodes'));
    }
}

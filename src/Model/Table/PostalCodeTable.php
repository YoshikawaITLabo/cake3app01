<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class PostalCodeTable extends Table
{
    public function initialize(array $config): void
    {
        $this->setTable('postalcode'); // テーブル名を明示的に指定
        $this->addBehavior('Timestamp');
    }
}

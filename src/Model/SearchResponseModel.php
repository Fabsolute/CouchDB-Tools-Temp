<?php

namespace BNG\Component\CouchDBTools\Model;

use BNG\Component\CouchDBTools\EntityBase;
use Fabs\Serialize\SerializableObject;

class SearchResponseModel extends SerializableObject
{
    /** @var EntityBase[] */
    public $entity_list = [];
    /** @var int */
    public $total_count = 0;
}

<?php

namespace Source\Core;

use Source\Core\Connect;

class Model
{
    protected $entity;

    public function selectAll (): ?array
    {
        $conn = Connect::getInstance();
        $query = "SELECT * 
                  FROM {$this->entity}";
        $result = $conn->query($query);
        return $result->fetchAll();
    }

}
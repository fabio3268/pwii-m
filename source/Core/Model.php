<?php

namespace Source\Core;

abstract class Model
{

    protected $entity;

    public function selectAll (): ?array
    {
        $conn = Connect::getInstance();
        $query = "SELECT * FROM {$this->entity}";
        return $conn->query($query)->fetchAll();
    }

    public function selectById (int $id)
    {
        $conn = Connect::getInstance();
        $query = "SELECT * 
                  FROM {$this->entity}
                  WHERE id = {$id}";
        return $conn->query($query)->fetchAll();
    }
/*    public function insert()
    {
        $values = get_object_vars($this);// pegar os valores dos atributos e inserir em um arra
        array_shift($values);

        foreach ($values as $value => $key){
            $values[$key] = "'$value'";
        }
        $values["id"] = "NULL";
        $valuesString = implode(",", $values);

        $query = "INSERT INTO {$this->entity} VALUES ({$valuesString})";
        var_dump($query);
    }*/

}
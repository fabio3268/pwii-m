<?php

namespace Source\Clients;

use Source\Database\Connect;

class Address
{
    private $street;
    private $number;
    private $complement;
    private $idClient;

    public function __construct(
        ?string $street = NULL,
        ?string $number = NULL,
        ?string $complement = NULL,
        ?string $idClient = NULL
    )
    {
        $this->street = $street;
        $this->number = $number;
        $this->complement = $complement;
        $this->idClient = $idClient;
    }

    /**
     * @return mixed
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param mixed $street
     */
    public function setStreet($street): void
    {
        $this->street = $street;
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     */
    public function setNumber($number): void
    {
        $this->number = $number;
    }

    /**
     * @return string
     */
    public function show() : string
    {
        return "{$this->street}, {$this->getNumber()}";
    }

    public function insert(int $idClient = NULL)
    {

        // INSERT INTO addresses VALUES (NULL, 'Rua A', '1212', 'Ap 12', 9, NULL, NULL)
        $query = "INSERT INTO addresses VALUES (NULL, :street, :number, :complement, :idClient, NULL, NULL)";
        $stmt = Connect::getInstance()->prepare($query);

        if(empty($idClient)){
            $idClient = $this->idClient;
        }

        $stmt->bindParam(":street",$this->street);
        $stmt->bindParam(":number",$this->number);
        $stmt->bindParam(":complement",$this->complement);
        $stmt->bindParam(":idClient",$idClient);

        $stmt->execute();

    }

    public function findByIdClient(int $idClient)
    {
        //SELECT * FROM addresses WHERE client_id = 9
        $query = "SELECT * FROM addresses WHERE client_id = :idClient";
        $stmt = Connect::getInstance()->prepare($query);
        $stmt->bindParam(":idClient",$idClient);
        $stmt->execute();
        if($stmt->rowCount() == 0){
            echo "Esse cliente não tem endereço!";
        } else {
            //while($address = $stmt->fetch()) {
             //   var_dump($address);
            //}
            $address = $stmt->fetchAll();
            var_dump($address);
        }
    }

}
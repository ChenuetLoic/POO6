<?php
require_once 'Vehicle.php';

class Camion extends Vehicle
{
    private $storage;
    private $load = 0;
    private $energy;

    public function __construct($storage, $color, $nbSeats, $energy){
        $this->storage=$storage;
        parent::__construct($color,$nbSeats);               //permet de reutilisé la valeur mise dans la Class parent véhicule
        $this->energy=$energy;
    }

    public function isFull()                                //permet de creer la fonction qui nous dira si le camion est plein ou pas
    {                                                       //grace a au if il faut mettre le this->load pour aller cherche la valeur que l'on souhaite definir
        if($this->load<= 0){
            $status = 'in filling';
        }else{
            $status = 'full';
        }
        return $status;
    }

    public function getEnergy(): int
    {
        return $this->energy;
    }

    public function setEnergy(int $energy): void
    {
        $this->energy = $energy;
    }

    public function getLoad()
    {
        return $this->load;
    }

    public function setLoad($load)
    {
        $this->load=$load;
    }

    public function getStorage()
    {
        return $this->storage;
    }

    public function setstorage($storage)
    {
        $this->storage=$storage;
    }
}
<?php
require_once 'Vehicle.php';
require_once 'LightableInterface.php';


class Cars extends Vehicle implements LightableInterface
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private $energy;
    private $energyLevel;
    private $hasParkBrake;

    public function start()
    {
        if ($this->hasParkBrake === true)
        {
            throw new Exception(' the park brake is on ');
        }else{$message = 'Car is on';}
        return $message;


    }

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy)
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function getHasParkBrake():int
    {
        return $this->hasParkBrake;
    }

    public function setHasParkBrake(bool $hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function switchOn()
    {
        return true;
    }

    public function switchOff()
    {
        return true;
    }
}
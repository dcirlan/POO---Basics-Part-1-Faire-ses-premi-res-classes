<?php

class Car {
    private $nbWheels;

    private $currentSpeed;

    private $color;

    private $nbSeats;

    private $energy;

    private $energyLevel;


    public function __construct(string $color,int $nbSeats,string $energy) {

        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function startEngine() {
        $this->energyLevel = $energyLevel;
    }

    public function forward() {
        if($this->currentSpeed > 0) {
            return 'GO !';
        }
        else {
            return 'The car is stopped';
        }
    }

    public function brake() {
        $sentence = '';
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function getNbWheels(): int {
        return $this->nbWheels;
    }

    public function getCurrentSpeed(int $currentSpeed) {
        if($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }

    public function getColor(): string {
        return $this->color;
    }

    public function getNbSeats(): int {
        return $this->nbSeats;
    }

    public function getEnergy(): string {
        return $this->energy;
    }

    public function getEnergyLevel() {
        return $this->energyLevel;
    }



}
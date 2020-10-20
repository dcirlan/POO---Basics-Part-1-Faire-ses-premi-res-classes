<?php

class Bicycle 
{
    private $color;

    private $currentSpeed;

    private $nbSeats;

    private $nbWheels;

    public function __construct(string $color) {
        $this->color = $color;
    }

    public function setCurrentSpeed(int $currentSpeed): void {
        $this->currentSpeed = $currentSpeed;
    }

    public function forward() {
        if($this->currentSpeed > 0) {
            return "Go !";
        }
    }

    public function brake(): string {
        $sentence = "";
        while ($this->currentSpeed > 0) {
        $this->currentSpeed--;
        $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }
}
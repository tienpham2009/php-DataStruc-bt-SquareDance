<?php

use JetBrains\PhpStorm\Pure;

include_once "interfaceGender.php";

class SquareDancer implements Gender
{
    protected SplQueue $female;
    protected SplQueue $male;

    #[Pure] public function __construct()
    {
        $this->male = new SplQueue();
        $this->female = new SplQueue();
    }

    public function addDancer(Dancer $dancer)
    {
        if ($dancer->getGender() == self::MALE) {
            $this->male->enqueue($dancer);
        } else {
            $this->female->enqueue($dancer);
        }
    }

    public function pairDancer():string
    {
        while (!$this->female->isEmpty() || !$this->male->isEmpty()) {
            if ($this->male->isEmpty()) {
                return count($this->female) . " nu damg doi " . "<br>";
            }

            if ($this->female->isEmpty()) {
                return count($this->male) . " nam dang doi" . "<br>";
            }

            echo 'cặp: ' . $this->male->dequeue()->getName() . '-' . $this->female->dequeue()->getName() . '<br>';
        }
    }
}
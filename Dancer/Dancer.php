<?php


class Dancer
{
    private string $name;
    private string $gender;

    public function __construct($name, $gender)
    {
        $this->name = $name;
        $this->gender = $gender;
    }

    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

}
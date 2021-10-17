<?php

class Student
{
    public $studentCode;
    public $name;
    public $math;
    public $physical;
    public $chemistry;

    public function __construct($studentCode, $name, $math, $physical, $chemistry)
    {
        $this->studentCode = $studentCode;
        $this->name = $name;
        $this->math = $math;
        $this->physical = $physical;
        $this->chemistry = $chemistry;
    }
    public function getStudentCode()
    {
        return $this->studentCode;
    }
    public function setStudentCode($studentCode)
    {
        $this->studentCode = $studentCode;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getMath()
    {
        return $this->math;
    }
    public function setMath($math)
    {
        $this->math = $math;
    }
    public function getPhysical()
    {
        return $this->physical;
    }
    public function setPhysical($physical)
    {
        $this->physical = $physical;
    }
    public function getChemistry()
    {
        return $this->chemistry;
    }
    public function setChemistry($chemistry)
    {
        $this->chemistry = $chemistry;
    }
    public function getAverage()
    {
        return (($this->math + $this->physical + $this->chemistry)/3);
    }
}



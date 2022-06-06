<?php

class Dog
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    protected function howManyStepsCanDoAtHome()
    {
        return 10;
    }

    public function getNameAndSteps()
    {
       return $this->name . ' and steps ' . $this->howManyStepsCanDoAtHome();
    }

    public function getName()
    {
        return $this->name;
    }
}

$dog1 = new Dog('murlio');
//$dog1->name = 'test2';
$dog1->getName(); // murlio

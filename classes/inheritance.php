<?php

require_once './includes/Animal.php';
require_once './includes/Dog.php';
require_once './includes/Bird.php';

$fakeDog = new Animal('Sharo');
$bird = new Bird('Coco');
$dog = new Dog('Sharo');
$dog->bark();
$dog->talk();

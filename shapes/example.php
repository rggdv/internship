<?php

require_once './includes/Shape.php';
require_once './includes/Rectangle.php';

$rect = new Rectangle('rect', 3, 4);
echo $rect->calculateArea(); // 12
echo Rectangle::getDescription();

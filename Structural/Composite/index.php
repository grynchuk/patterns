<?php

use Patterns\Structural\Composite\Ruler;
use Patterns\Structural\Composite\Drill;
use Patterns\Structural\Composite\Glue;
use Patterns\Structural\Composite\TapeMeasure;
use Patterns\Structural\Composite\Hammer;
use Patterns\Structural\Composite\Bunch;

$totalBill = new Bunch('Total', 0);

$builders = new Bunch('builders', 0);
$builders->add(new Hammer('Hummer', 1));
$builders->add(new Drill('Drill', 2));


$measurement = new Bunch('measurments', 0);
$measurement->add(new Ruler('Ruller', 0.1));
$measurement->add(new TapeMeasure('tape', 0.3));

$totalBill->addItem($builders);
$totalBill->addItem($measurement);
$totalBill->addItem(new Glue('glue', 0.1));


echo $totalBill->getName(), ":", $this->getPrice();
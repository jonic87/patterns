<?php


use Generative\AbstractFactory\FoxClasses\FoxFamily;
use Generative\AbstractFactory\Hole;
use Generative\AbstractFactory\RabbitClasses\RabbitFamily;

$FoxHole = new Hole(new FoxFamily());
$RabbitHole = new Hole(new RabbitFamily());
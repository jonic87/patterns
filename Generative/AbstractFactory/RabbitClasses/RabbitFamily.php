<?php

namespace Generative\AbstractFactory\RabbitClasses;

use Generative\AbstractFactory\AbstractClasses\AbstractChild;
use Generative\AbstractFactory\AbstractClasses\AbstractFamily;
use Generative\AbstractFactory\AbstractClasses\AbstractFather;
use Generative\AbstractFactory\AbstractClasses\AbstractMother;

class RabbitFamily extends AbstractFamily
{

    public function getFather(): AbstractFather
    {
        return  new RabbitFather();
    }

    public function getMother(): AbstractMother
    {
       return new RabbitMother();
    }

    public function getChild(): AbstractChild
    {
        return new RabbitChild();
    }
}
<?php

namespace Generative\AbstractFactory\FoxClasses;

use Generative\AbstractFactory\AbstractClasses\AbstractChild;
use Generative\AbstractFactory\AbstractClasses\AbstractFamily;
use Generative\AbstractFactory\AbstractClasses\AbstractFather;
use Generative\AbstractFactory\AbstractClasses\AbstractMother;

class FoxFamily extends AbstractFamily
{

    public function getFather(): AbstractFather
    {
        return  new FoxFather();
    }

    public function getMother(): AbstractMother
    {
       return new FoxMother();
    }

    public function getChild(): AbstractChild
    {
        return new FoxChild();
    }
}
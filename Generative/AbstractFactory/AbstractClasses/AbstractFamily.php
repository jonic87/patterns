<?php

namespace Generative\AbstractFactory\AbstractClasses;

abstract class AbstractFamily
{
    public abstract function getFather():AbstractFather;
    public abstract function getMother():AbstractMother;
    public abstract function getChild():AbstractChild;

}
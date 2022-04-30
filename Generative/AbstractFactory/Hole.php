<?php

namespace Generative\AbstractFactory;

use Generative\AbstractFactory\AbstractClasses\AbstractChild;
use Generative\AbstractFactory\AbstractClasses\AbstractFamily;
use Generative\AbstractFactory\AbstractClasses\AbstractFather;
use Generative\AbstractFactory\AbstractClasses\AbstractMother;

class Hole
{
    private AbstractFather $father;
    private AbstractMother $mother;
    private AbstractChild  $child;

    public function __construct(AbstractFamily $family)
    {
        $this->father = $family->getFather();
        $this->mother = $family->getMother();
        $this->child = $family->getChild();
    }

}
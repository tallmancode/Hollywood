<?php

namespace TallmanCode\HollywoodBundle\Common;

class ArrayCollection
{
    private $elements;

    public function __construct(array $elements = [])
    {
        $this->elements = $elements;
    }

    public function getValues()
    {
        return $this->elements;
    }
}
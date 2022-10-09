<?php

namespace TallmanCode\HollywoodBundle\Common;

use ArrayAccess;
use Closure;
use Countable;
use IteratorAggregate;

interface CollectionInterface extends Countable, IteratorAggregate, ArrayAccess
{
    public function add($element);

    public function clear();

    public function contains($element);

    public function isEmpty();

    public function remove($key);

    public function removeElement($element);

}
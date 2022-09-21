<?php
namespace TallmanCode\HollywoodBundle;

use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use TallmanCode\HollywoodBundle\DependencyInjection\TallmanCodeHollywoodExtension;

class TallmanCodeHollywoodBundle extends Bundle
{
    /**
    * Overridden to allow for the custom extension alias.
    */
    public function getContainerExtension(): ?ExtensionInterface
    {
        if (null === $this->extension) {
            $this->extension = new TallmanCodeHollywoodExtension();
        }
        return $this->extension;
    }

}

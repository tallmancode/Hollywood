<?php

namespace TallmanCode\HollywoodBundle\Model;

class Images
{
    /**
     * @var Image[]
     */
    private array $backdrops;

    /**
     * @var Image[]
     */
    private array $logos;

    /**
     * @var Image[]
     */
    private array $posters;

    /**
     * @return Image[]
     */
    public function getBackdrops(): array
    {
        return $this->backdrops;
    }

    /**
     * @param Image[] $backdrops
     */
    public function setBackdrops(array $backdrops): void
    {
        $this->backdrops = $backdrops;
    }

    /**
     * @return Image[]
     */
    public function getLogos(): array
    {
        return $this->logos;
    }

    /**
     * @param Image[] $logos
     */
    public function setLogos(array $logos): void
    {
        $this->logos = $logos;
    }

    /**
     * @return Image[]
     */
    public function getPosters(): array
    {
        return $this->posters;
    }

    /**
     * @param Image[] $posters
     */
    public function setPosters(array $posters): void
    {
        $this->posters = $posters;
    }
}

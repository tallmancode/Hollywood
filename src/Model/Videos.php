<?php

namespace TallmanCode\HollywoodBundle\Model;

class Videos
{
    /**
     * @var Video[]
     */
    private array $results;

    /**
     * @return Video[]
     */
    public function getResults(): array
    {
        return $this->results;
    }

    /**
     * @param Video[] $results
     */
    public function setResults(array $results): void
    {
        $this->results = $results;
    }
}

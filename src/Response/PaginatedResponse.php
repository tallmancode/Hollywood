<?php

namespace TallmanCode\HollywoodBundle\Response;

class PaginatedResponse
{
    private $page;

    private $results;

    private $totalPages;

    private $totalResults;

    /**
     * @return mixed
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param mixed $page
     */
    public function setPage($page): void
    {
        $this->page = $page;
    }

    /**
     * @return mixed
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * @param mixed $results
     */
    public function setResults($results): void
    {
        $this->results = $results;
    }

    /**
     * @return mixed
     */
    public function getTotalPages()
    {
        return $this->totalPages;
    }

    /**
     * @param mixed $totalPages
     */
    public function setTotalPages($totalPages): void
    {
        $this->totalPages = $totalPages;
    }

    /**
     * @return mixed
     */
    public function getTotalResults()
    {
        return $this->totalResults;
    }

    /**
     * @param mixed $totalResults
     */
    public function setTotalResults($totalResults): void
    {
        $this->totalResults = $totalResults;
    }

}
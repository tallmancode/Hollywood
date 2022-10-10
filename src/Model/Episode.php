<?php

namespace TallmanCode\HollywoodBundle\Model;

class Episode
{
    /**
     * @var int
     */
    private int $id;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $airDate;

    /**
     * @var int
     */
    private int $episodeNumber;

    /**
     * @var string
     */
    private string $name;

    /**
     * @var string
     */
    private string $overview;

    /**
     * @var string
     */
    private string $productionCode;

    /**
     * @var int
     */
    private int $seasonNumber;

    /**
     * @var string|null
     */
    private ?string $stillPath;

    /**
     * @var float
     */
    private float $voteAverage;

    /**
     * @var int
     */
    private int $voteCount;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getAirDate(): \DateTimeInterface
    {
        return $this->airDate;
    }

    /**
     * @param \DateTimeInterface $airDate
     */
    public function setAirDate(\DateTimeInterface $airDate): void
    {
        $this->airDate = $airDate;
    }

    /**
     * @return int
     */
    public function getEpisodeNumber(): int
    {
        return $this->episodeNumber;
    }

    /**
     * @param int $episodeNumber
     */
    public function setEpisodeNumber(int $episodeNumber): void
    {
        $this->episodeNumber = $episodeNumber;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getOverview(): string
    {
        return $this->overview;
    }

    /**
     * @param string $overview
     */
    public function setOverview(string $overview): void
    {
        $this->overview = $overview;
    }

    /**
     * @return string
     */
    public function getProductionCode(): string
    {
        return $this->productionCode;
    }

    /**
     * @param string $productionCode
     */
    public function setProductionCode(string $productionCode): void
    {
        $this->productionCode = $productionCode;
    }

    /**
     * @return int
     */
    public function getSeasonNumber(): int
    {
        return $this->seasonNumber;
    }

    /**
     * @param int $seasonNumber
     */
    public function setSeasonNumber(int $seasonNumber): void
    {
        $this->seasonNumber = $seasonNumber;
    }

    /**
     * @return string|null
     */
    public function getStillPath(): ?string
    {
        return $this->stillPath;
    }

    /**
     * @param string|null $stillPath
     */
    public function setStillPath(?string $stillPath): void
    {
        $this->stillPath = $stillPath;
    }

    /**
     * @return float
     */
    public function getVoteAverage(): float
    {
        return $this->voteAverage;
    }

    /**
     * @param float $voteAverage
     */
    public function setVoteAverage(float $voteAverage): void
    {
        $this->voteAverage = $voteAverage;
    }

    /**
     * @return int
     */
    public function getVoteCount(): int
    {
        return $this->voteCount;
    }

    /**
     * @param int $voteCount
     */
    public function setVoteCount(int $voteCount): void
    {
        $this->voteCount = $voteCount;
    }


}
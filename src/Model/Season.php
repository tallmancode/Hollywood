<?php

namespace TallmanCode\HollywoodBundle\Model;

class Season
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
    private int $episodeCount;

    /**
     * @var string
     */
    private string $name;

    /**
     * @var string
     */
    private string $overview;

    /**
     * @var string|null
     */
    private ?string $posterPath;

    /**
     * @var int
     */
    private int $seasonNumber;

    /**
     * @var Episode[]
     */
    private array $episodes;

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
    public function getEpisodeCount(): int
    {
        return $this->episodeCount;
    }

    /**
     * @param int $episodeCount
     */
    public function setEpisodeCount(int $episodeCount): void
    {
        $this->episodeCount = $episodeCount;
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
     * @return string|null
     */
    public function getPosterPath(): ?string
    {
        return $this->posterPath;
    }

    /**
     * @param string|null $posterPath
     */
    public function setPosterPath(?string $posterPath): void
    {
        $this->posterPath = $posterPath;
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
     * @return Episode[]
     */
    public function getEpisodes(): array
    {
        return $this->episodes;
    }

    /**
     * @param Episode[] $episodes
     */
    public function setEpisodes(array $episodes): void
    {
        $this->episodes = $episodes;
    }


}
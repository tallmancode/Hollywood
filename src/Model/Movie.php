<?php

namespace TallmanCode\HollywoodBundle\Model;

class Movie
{
    /**
     * @var bool
     */
    private bool $adult;

    /**
     * @var string
     */
    private string $backdropPath;

    /**
     * @var int
     */
    private int $id;

    /**
     * @var string
     */
    private string $title;

    /**
     * @var string
     */
    private string $originalLanguage;

    /**
     * @var string
     */
    private string $originalTitle;

    /**
     * @var string
     */
    private string $overview;

    /**
     * @var string
     */
    private string $posterPath;

    /**
     * @var string
     */
    private string $mediaType;

    /**
     * @var array
     */
    private array $genreIds;

    /**
     * @var float
     */
    private float $popularity;

    /**
     * @var string
     */
    private string $releaseDate;

    /**
     * @var bool
     */
    private bool $video;

    /**
     * @var float
     */
    private float $voteAverage;

    /**
     * @var int
     */
    private int $voteCount;

    /**
     * @return bool
     */
    public function isAdult(): bool
    {
        return $this->adult;
    }

    /**
     * @param bool $adult
     */
    public function setAdult(bool $adult): void
    {
        $this->adult = $adult;
    }

    /**
     * @return string
     */
    public function getBackdropPath(): string
    {
        return $this->backdropPath;
    }

    /**
     * @param string $backdropPath
     */
    public function setBackdropPath(string $backdropPath): void
    {
        $this->backdropPath = $backdropPath;
    }

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
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getOriginalLanguage(): string
    {
        return $this->originalLanguage;
    }

    /**
     * @param string $originalLanguage
     */
    public function setOriginalLanguage(string $originalLanguage): void
    {
        $this->originalLanguage = $originalLanguage;
    }

    /**
     * @return string
     */
    public function getOriginalTitle(): string
    {
        return $this->originalTitle;
    }

    /**
     * @param string $originalTitle
     */
    public function setOriginalTitle(string $originalTitle): void
    {
        $this->originalTitle = $originalTitle;
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
    public function getPosterPath(): string
    {
        return $this->posterPath;
    }

    /**
     * @param string $posterPath
     */
    public function setPosterPath(string $posterPath): void
    {
        $this->posterPath = $posterPath;
    }

    /**
     * @return string
     */
    public function getMediaType(): string
    {
        return $this->mediaType;
    }

    /**
     * @param string $mediaType
     */
    public function setMediaType(string $mediaType): void
    {
        $this->mediaType = $mediaType;
    }

    /**
     * @return array
     */
    public function getGenreIds(): array
    {
        return $this->genreIds;
    }

    /**
     * @param array $genreIds
     */
    public function setGenreIds(array $genreIds): void
    {
        $this->genreIds = $genreIds;
    }

    /**
     * @return float
     */
    public function getPopularity(): float
    {
        return $this->popularity;
    }

    /**
     * @param float $popularity
     */
    public function setPopularity(float $popularity): void
    {
        $this->popularity = $popularity;
    }

    /**
     * @return string
     */
    public function getReleaseDate(): string
    {
        return $this->releaseDate;
    }

    /**
     * @param string $releaseDate
     */
    public function setReleaseDate(string $releaseDate): void
    {
        $this->releaseDate = $releaseDate;
    }

    /**
     * @return bool
     */
    public function isVideo(): bool
    {
        return $this->video;
    }

    /**
     * @param bool $video
     */
    public function setVideo(bool $video): void
    {
        $this->video = $video;
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

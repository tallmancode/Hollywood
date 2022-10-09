<?php

namespace TallmanCode\HollywoodBundle\Model;

use TallmanCode\HollywoodBundle\Annotation\ModelClass;
use TallmanCode\HollywoodBundle\Common\ArrayCollection;

class Movie implements HollywoodModelInterface
{
    /**
     * @var int
     */
    private int $id;

    /**
     * @var string|null
     */
    private ?string $imdbId;


    /**
     * @var bool
     */
    private bool $adult;

    /**
     * @var string|null
     */
    private ?string $backdropPath;

    /**
     * @var int
     */
    private int $budget;

    /**
     * @var Genre[]
     */
    private array $genres;

    /**
     * @var string|null
     */
    private ?string $homepage;

    /**
     * @var string|null
     */
    private ?string $originalLanguage;

    /**
     * @var string|null
     */
    private ?string $originalTitle;

    /**
     * @var string|null
     */
    private ?string $overview;

    /**
     * @var float
     */
    private float $popularity;

    /**
     * @var string|null
     */
    private ?string $posterPath;

    /**
     * @var ProductionCompany[]
     */
    private array $productionCompanies;

    /**
     * @var ProductionCountry[]
     */
    private array $productionCountries;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $releaseDate;

    /**
     * @var int
     */
    private int $revenue;

    /**
     * @var int
     */
    private int $runtTime;

    /**
     * @var SpokenLanguage[]
     */
    private array $spokenLanguages;

    /**
     * @var string|null
     */
    private ?string $status;

    /**
     * @var string|null
     */
    private ?string $tagline;

    /**
     * @var string|null
     */
    private ?string $title;

    /**
     * @var float
     */
    private float $voteAverage;

    /**
     * @var int
     */
    private int $voteCount;

    /**
     * @var Images
     */
    private Images $images;

    /**
     * @var Videos
     */
    private Videos $videos;

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
     * @return string|null
     */
    public function getImdbId(): ?string
    {
        return $this->imdbId;
    }

    /**
     * @param string|null $imdbId
     */
    public function setImdbId(?string $imdbId): void
    {
        $this->imdbId = $imdbId;
    }

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
     * @return string|null
     */
    public function getBackdropPath(): ?string
    {
        return $this->backdropPath;
    }

    /**
     * @param string|null $backdropPath
     */
    public function setBackdropPath(?string $backdropPath): void
    {
        $this->backdropPath = $backdropPath;
    }

    /**
     * @return int
     */
    public function getBudget(): int
    {
        return $this->budget;
    }

    /**
     * @param int $budget
     */
    public function setBudget(int $budget): void
    {
        $this->budget = $budget;
    }

    /**
     * @return Genre[]
     */
    public function getGenres(): array
    {
        return $this->genres;
    }

    /**
     * @param Genre[] $genres
     */
    public function setGenres(array $genres): void
    {
        $this->genres = $genres;
    }

    /**
     * @return string|null
     */
    public function getHomepage(): ?string
    {
        return $this->homepage;
    }

    /**
     * @param string|null $homepage
     */
    public function setHomepage(?string $homepage): void
    {
        $this->homepage = $homepage;
    }

    /**
     * @return string|null
     */
    public function getOriginalLanguage(): ?string
    {
        return $this->originalLanguage;
    }

    /**
     * @param string|null $originalLanguage
     */
    public function setOriginalLanguage(?string $originalLanguage): void
    {
        $this->originalLanguage = $originalLanguage;
    }

    /**
     * @return string|null
     */
    public function getOriginalTitle(): ?string
    {
        return $this->originalTitle;
    }

    /**
     * @param string|null $originalTitle
     */
    public function setOriginalTitle(?string $originalTitle): void
    {
        $this->originalTitle = $originalTitle;
    }

    /**
     * @return string|null
     */
    public function getOverview(): ?string
    {
        return $this->overview;
    }

    /**
     * @param string|null $overview
     */
    public function setOverview(?string $overview): void
    {
        $this->overview = $overview;
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
     * @return ProductionCompany[]
     */
    public function getProductionCompanies(): array
    {
        return $this->productionCompanies;
    }

    /**
     * @param ProductionCompany[] $productionCompanies
     */
    public function setProductionCompanies(array $productionCompanies): void
    {
        $this->productionCompanies = $productionCompanies;
    }

    /**
     * @return ProductionCountry[]
     */
    public function getProductionCountries(): array
    {
        return $this->productionCountries;
    }

    /**
     * @param ProductionCountry[] $productionCountries
     */
    public function setProductionCountries(array $productionCountries): void
    {
        $this->productionCountries = $productionCountries;
    }


    /**
     * @return int
     */
    public function getRevenue(): int
    {
        return $this->revenue;
    }

    /**
     * @param int $revenue
     */
    public function setRevenue(int $revenue): void
    {
        $this->revenue = $revenue;
    }

    /**
     * @return int
     */
    public function getRuntTime(): int
    {
        return $this->runtTime;
    }

    /**
     * @param int $runtTime
     */
    public function setRuntTime(int $runtTime): void
    {
        $this->runtTime = $runtTime;
    }

    /**
     * @return SpokenLanguage[]
     */
    public function getSpokenLanguages(): array
    {
        return $this->spokenLanguages;
    }

    /**
     * @param SpokenLanguage[] $spokenLanguages
     */
    public function setSpokenLanguages(array $spokenLanguages): void
    {
        $this->spokenLanguages = $spokenLanguages;
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string|null $status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * @return string|null
     */
    public function getTagline(): ?string
    {
        return $this->tagline;
    }

    /**
     * @param string|null $tagline
     */
    public function setTagline(?string $tagline): void
    {
        $this->tagline = $tagline;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $title
     */
    public function setTitle(?string $title): void
    {
        $this->title = $title;
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

    /**
     * @return Images
     */
    public function getImages(): Images
    {
        return $this->images;
    }

    /**
     * @param Images $images
     */
    public function setImages(Images $images): void
    {
        $this->images = $images;
    }

    /**
     * @return Videos
     */
    public function getVideos(): Videos
    {
        return $this->videos;
    }

    /**
     * @param Videos $videos
     */
    public function setVideos(Videos $videos): void
    {
        $this->videos = $videos;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getReleaseDate(): \DateTimeInterface
    {
        return $this->releaseDate;
    }

    /**
     * @param \DateTimeInterface $releaseDate
     */
    public function setReleaseDate(\DateTimeInterface $releaseDate): void
    {
        $this->releaseDate = $releaseDate;
    }
}

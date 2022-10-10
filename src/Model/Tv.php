<?php

namespace TallmanCode\HollywoodBundle\Model;

use DateTimeInterface;

class Tv
{
    /**
     * @var int
     */
    private int $id;

    /**
     * @var string|null
     */
    private ?string $backdropPath;

    /**
     * @var
     */
    private $createdBy;

    /**
     * @var array
     */
    private array $episodeRunTime;

    /**
     * @var DateTimeInterface
     */
    private DateTimeInterface $firstAirDate;

    /**
     * @var Genre[]
     */
    private array $genres;

    /**
     * @var string
     */
    private string $homepage;

    /**
     * @var bool
     */
    private bool $inProduction;

    /**
     * @var array
     */
    private array $languages;

    /**
     * @var DateTimeInterface
     */
    private DateTimeInterface $lastAirDate;

    /**
     * @var Episode
     */
    private Episode $lastEpisodeToAir;

    /**
     * @var string
     */
    private string $name;

    /**
     * @var string|null
     */
    private ?string $nextEpisodeToAir;

    /**
     * @var Network[]
     */
    private array $networks;

    /**
     * @var int
     */
    private int $numberOfEpisodes;

    /**
     * @var int
     */
    private int $numberOfSeasons;

    /**
     * @var array
     */
    private array $originCountry;

    /**
     * @var string
     */
    private string $originalLanguage;

    /**
     * @var string
     */
    private string $originalName;

    /**
     * @var string
     */
    private string $overview;

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
     * @var Season[]
     */
    private array $seasons;

    /**
     * @var SpokenLanguage[]
     */
    private array $spokenLanguages;

    /**
     * @var string
     */
    private string $status;

    /**
     * @var string
     */
    private string $tagline;

    /**
     * @var string
     */
    private string $type;

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
     * @return mixed
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * @param mixed $createdBy
     */
    public function setCreatedBy($createdBy): void
    {
        $this->createdBy = $createdBy;
    }

    /**
     * @return array
     */
    public function getEpisodeRunTime(): array
    {
        return $this->episodeRunTime;
    }

    /**
     * @param array $episodeRunTime
     */
    public function setEpisodeRunTime(array $episodeRunTime): void
    {
        $this->episodeRunTime = $episodeRunTime;
    }

    /**
     * @return DateTimeInterface
     */
    public function getFirstAirDate(): DateTimeInterface
    {
        return $this->firstAirDate;
    }

    /**
     * @param DateTimeInterface $firstAirDate
     */
    public function setFirstAirDate(DateTimeInterface $firstAirDate): void
    {
        $this->firstAirDate = $firstAirDate;
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
     * @return string
     */
    public function getHomepage(): string
    {
        return $this->homepage;
    }

    /**
     * @param string $homepage
     */
    public function setHomepage(string $homepage): void
    {
        $this->homepage = $homepage;
    }

    /**
     * @return bool
     */
    public function isInProduction(): bool
    {
        return $this->inProduction;
    }

    /**
     * @param bool $inProduction
     */
    public function setInProduction(bool $inProduction): void
    {
        $this->inProduction = $inProduction;
    }

    /**
     * @return array
     */
    public function getLanguages(): array
    {
        return $this->languages;
    }

    /**
     * @param array $languages
     */
    public function setLanguages(array $languages): void
    {
        $this->languages = $languages;
    }

    /**
     * @return DateTimeInterface
     */
    public function getLastAirDate(): DateTimeInterface
    {
        return $this->lastAirDate;
    }

    /**
     * @param DateTimeInterface $lastAirDate
     */
    public function setLastAirDate(DateTimeInterface $lastAirDate): void
    {
        $this->lastAirDate = $lastAirDate;
    }

    /**
     * @return Episode
     */
    public function getLastEpisodeToAir(): Episode
    {
        return $this->lastEpisodeToAir;
    }

    /**
     * @param Episode $lastEpisodeToAir
     */
    public function setLastEpisodeToAir(Episode $lastEpisodeToAir): void
    {
        $this->lastEpisodeToAir = $lastEpisodeToAir;
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
     * @return string|null
     */
    public function getNextEpisodeToAir(): ?string
    {
        return $this->nextEpisodeToAir;
    }

    /**
     * @param string|null $nextEpisodeToAir
     */
    public function setNextEpisodeToAir(?string $nextEpisodeToAir): void
    {
        $this->nextEpisodeToAir = $nextEpisodeToAir;
    }

    /**
     * @return Network[]
     */
    public function getNetworks(): array
    {
        return $this->networks;
    }

    /**
     * @param Network[] $networks
     */
    public function setNetworks(array $networks): void
    {
        $this->networks = $networks;
    }

    /**
     * @return int
     */
    public function getNumberOfEpisodes(): int
    {
        return $this->numberOfEpisodes;
    }

    /**
     * @param int $numberOfEpisodes
     */
    public function setNumberOfEpisodes(int $numberOfEpisodes): void
    {
        $this->numberOfEpisodes = $numberOfEpisodes;
    }

    /**
     * @return int
     */
    public function getNumberOfSeasons(): int
    {
        return $this->numberOfSeasons;
    }

    /**
     * @param int $numberOfSeasons
     */
    public function setNumberOfSeasons(int $numberOfSeasons): void
    {
        $this->numberOfSeasons = $numberOfSeasons;
    }

    /**
     * @return array
     */
    public function getOriginCountry(): array
    {
        return $this->originCountry;
    }

    /**
     * @param array $originCountry
     */
    public function setOriginCountry(array $originCountry): void
    {
        $this->originCountry = $originCountry;
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
    public function getOriginalName(): string
    {
        return $this->originalName;
    }

    /**
     * @param string $originalName
     */
    public function setOriginalName(string $originalName): void
    {
        $this->originalName = $originalName;
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
     * @return Season[]
     */
    public function getSeasons(): array
    {
        return $this->seasons;
    }

    /**
     * @param Season[] $seasons
     */
    public function setSeasons(array $seasons): void
    {
        $this->seasons = $seasons;
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
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getTagline(): string
    {
        return $this->tagline;
    }

    /**
     * @param string $tagline
     */
    public function setTagline(string $tagline): void
    {
        $this->tagline = $tagline;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
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


}
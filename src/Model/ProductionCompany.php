<?php

namespace TallmanCode\HollywoodBundle\Model;

class ProductionCompany
{
    /**
     * @var int
     */
    private int $id;

    /**
     * @var string|null
     */
    private ?string $logoPath;

    /**
     * @var string
     */
    private string $name;

    /**
     * @var string
     */
    private string $originCountry;

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
    public function getLogoPath(): ?string
    {
        return $this->logoPath;
    }

    /**
     * @param string|null $logoPath
     */
    public function setLogoPath(?string $logoPath): void
    {
        $this->logoPath = $logoPath;
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
    public function getOriginCountry(): string
    {
        return $this->originCountry;
    }

    /**
     * @param string $originCountry
     */
    public function setOriginCountry(string $originCountry): void
    {
        $this->originCountry = $originCountry;
    }


}

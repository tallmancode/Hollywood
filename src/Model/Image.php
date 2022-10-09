<?php

namespace TallmanCode\HollywoodBundle\Model;

class Image
{
    /**
     * @var float
     */
    private float $aspectRatio;

    /**
     * @var int
     */
    private int $height;

    /**
     * @var ?string
     */
    private ?string $iso6391;

    /**
     * @var string
     */
    private string $filePath;

    /**
     * @var float
     */
    private float $voteAverage;

    /**
     * @var int
     */
    private int $voteCount;

    /**
     * @var int
     */
    private int $width;

    /**
     * @return float
     */
    public function getAspectRatio(): float
    {
        return $this->aspectRatio;
    }

    /**
     * @param float $aspectRatio
     */
    public function setAspectRatio(float $aspectRatio): void
    {
        $this->aspectRatio = $aspectRatio;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @param int $height
     */
    public function setHeight(int $height): void
    {
        $this->height = $height;
    }

    /**
     * @return string|null
     */
    public function getIso6391(): ?string
    {
        return $this->iso6391;
    }

    /**
     * @param string|null $iso6391
     */
    public function setIso6391(?string $iso6391): void
    {
        $this->iso6391 = $iso6391;
    }

    /**
     * @return string
     */
    public function getFilePath(): string
    {
        return $this->filePath;
    }

    /**
     * @param string $filePath
     */
    public function setFilePath(string $filePath): void
    {
        $this->filePath = $filePath;
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
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @param int $width
     */
    public function setWidth(int $width): void
    {
        $this->width = $width;
    }

}

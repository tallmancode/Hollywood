<?php

namespace TallmanCode\HollywoodBundle\Model;

use DateTimeInterface;

class Video
{
    /**
     * @var string
     */
    private string $iso6391;

    /**
     * @var string
     */
    private string $iso31661;

    /**
     * @var string
     */
    private string $name;

    /**
     * @var string
     */
    private string $key;

    /**
     * @var string
     */
    private string $site;

    /**
     * @var int
     */
    private int $size;

    /**
     * @var string
     */
    private string $type;

    /**
     * @var bool
     */
    private bool $official;

    /**
     * @var DateTimeInterface
     */
    private DateTimeInterface $publishedAt;

    /**
     * @var string
     */
    private string $id;

    /**
     * @return string
     */
    public function getIso6391(): string
    {
        return $this->iso6391;
    }

    /**
     * @param string $iso6391
     */
    public function setIso6391(string $iso6391): void
    {
        $this->iso6391 = $iso6391;
    }

    /**
     * @return string
     */
    public function getIso31661(): string
    {
        return $this->iso31661;
    }

    /**
     * @param string $iso31661
     */
    public function setIso31661(string $iso31661): void
    {
        $this->iso31661 = $iso31661;
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
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * @param string $key
     */
    public function setKey(string $key): void
    {
        $this->key = $key;
    }

    /**
     * @return string
     */
    public function getSite(): string
    {
        return $this->site;
    }

    /**
     * @param string $site
     */
    public function setSite(string $site): void
    {
        $this->site = $site;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @param int $size
     */
    public function setSize(int $size): void
    {
        $this->size = $size;
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
     * @return bool
     */
    public function isOfficial(): bool
    {
        return $this->official;
    }

    /**
     * @param bool $official
     */
    public function setOfficial(bool $official): void
    {
        $this->official = $official;
    }

    /**
     * @return DateTimeInterface
     */
    public function getPublishedAt(): DateTimeInterface
    {
        return $this->publishedAt;
    }

    /**
     * @param DateTimeInterface $publishedAt
     */
    public function setPublishedAt(DateTimeInterface $publishedAt): void
    {
        $this->publishedAt = $publishedAt;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }
}

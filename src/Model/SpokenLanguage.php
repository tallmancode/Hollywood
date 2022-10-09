<?php

namespace TallmanCode\HollywoodBundle\Model;

class SpokenLanguage
{
    /**
     * @var string
     */
    private string $englishName;

    /**
     * @var string
     */
    private string $iso6391;

    /**
     * @var string
     */
    private string $name;

    /**
     * @return string
     */
    public function getEnglishName(): string
    {
        return $this->englishName;
    }

    /**
     * @param string $englishName
     */
    public function setEnglishName(string $englishName): void
    {
        $this->englishName = $englishName;
    }

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
}

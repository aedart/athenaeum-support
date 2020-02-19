<?php

namespace Aedart\Support\Properties\Strings;

/**
 * Information Trait
 *
 * @see \Aedart\Contracts\Support\Properties\Strings\InformationAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Support\Properties\Strings
 */
trait InformationTrait
{
    /**
     * Information about someone or something
     *
     * @var string|null
     */
    protected ?string $information = null;

    /**
     * Set information
     *
     * @param string|null $text Information about someone or something
     *
     * @return self
     */
    public function setInformation(?string $text)
    {
        $this->information = $text;

        return $this;
    }

    /**
     * Get information
     *
     * If no "information" value set, method
     * sets and returns a default "information".
     *
     * @see getDefaultInformation()
     *
     * @return string|null information or null if no information has been set
     */
    public function getInformation(): ?string
    {
        if (!$this->hasInformation()) {
            $this->setInformation($this->getDefaultInformation());
        }
        return $this->information;
    }

    /**
     * Check if "information" has been set
     *
     * @return bool True if "information" has been set, false if not
     */
    public function hasInformation(): bool
    {
        return isset($this->information);
    }

    /**
     * Get a default "information" value, if any is available
     *
     * @return string|null Default "information" value or null if no default value is available
     */
    public function getDefaultInformation(): ?string
    {
        return null;
    }
}

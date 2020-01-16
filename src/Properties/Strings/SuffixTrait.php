<?php

namespace Aedart\Support\Properties\Strings;

/**
 * Suffix Trait
 *
 * @see \Aedart\Contracts\Support\Properties\Strings\SuffixAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Support\Properties\Strings
 */
trait SuffixTrait
{
    /**
     * Suffix
     *
     * @var string|null
     */
    protected ?string $suffix = null;

    /**
     * Set suffix
     *
     * @param string|null $suffix Suffix
     *
     * @return self
     */
    public function setSuffix(?string $suffix)
    {
        $this->suffix = $suffix;

        return $this;
    }

    /**
     * Get suffix
     *
     * If no "suffix" value set, method
     * sets and returns a default "suffix".
     *
     * @see getDefaultSuffix()
     *
     * @return string|null suffix or null if no suffix has been set
     */
    public function getSuffix() : ?string
    {
        if ( ! $this->hasSuffix()) {
            $this->setSuffix($this->getDefaultSuffix());
        }
        return $this->suffix;
    }

    /**
     * Check if "suffix" has been set
     *
     * @return bool True if "suffix" has been set, false if not
     */
    public function hasSuffix() : bool
    {
        return isset($this->suffix);
    }

    /**
     * Get a default "suffix" value, if any is available
     *
     * @return string|null Default "suffix" value or null if no default value is available
     */
    public function getDefaultSuffix() : ?string
    {
        return null;
    }
}

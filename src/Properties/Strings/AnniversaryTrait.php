<?php

namespace Aedart\Support\Properties\Strings;

/**
 * Anniversary Trait
 *
 * @see \Aedart\Contracts\Support\Properties\Strings\AnniversaryAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Support\Properties\Strings
 */
trait AnniversaryTrait
{
    /**
     * Date of anniversary
     *
     * @var string|null
     */
    protected ?string $anniversary = null;

    /**
     * Set anniversary
     *
     * @param string|null $anniversary Date of anniversary
     *
     * @return self
     */
    public function setAnniversary(?string $anniversary)
    {
        $this->anniversary = $anniversary;

        return $this;
    }

    /**
     * Get anniversary
     *
     * If no "anniversary" value set, method
     * sets and returns a default "anniversary".
     *
     * @see getDefaultAnniversary()
     *
     * @return string|null anniversary or null if no anniversary has been set
     */
    public function getAnniversary() : ?string
    {
        if ( ! $this->hasAnniversary()) {
            $this->setAnniversary($this->getDefaultAnniversary());
        }
        return $this->anniversary;
    }

    /**
     * Check if "anniversary" has been set
     *
     * @return bool True if "anniversary" has been set, false if not
     */
    public function hasAnniversary() : bool
    {
        return isset($this->anniversary);
    }

    /**
     * Get a default "anniversary" value, if any is available
     *
     * @return string|null Default "anniversary" value or null if no default value is available
     */
    public function getDefaultAnniversary() : ?string
    {
        return null;
    }
}

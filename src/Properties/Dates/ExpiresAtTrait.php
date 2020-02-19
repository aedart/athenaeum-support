<?php

namespace Aedart\Support\Properties\Dates;

/**
 * Expires at Trait
 *
 * @see \Aedart\Contracts\Support\Properties\Dates\ExpiresAtAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Support\Properties\Dates
 */
trait ExpiresAtTrait
{
    /**
     * Date of when this component, entity or resource is going to expire
     *
     * @var \DateTime|null
     */
    protected ?\DateTime $expiresAt = null;

    /**
     * Set expires at
     *
     * @param \DateTime|null $date Date of when this component, entity or resource is going to expire
     *
     * @return self
     */
    public function setExpiresAt(?\DateTime $date)
    {
        $this->expiresAt = $date;

        return $this;
    }

    /**
     * Get expires at
     *
     * If no "expires at" value set, method
     * sets and returns a default "expires at".
     *
     * @see getDefaultExpiresAt()
     *
     * @return \DateTime|null expires at or null if no expires at has been set
     */
    public function getExpiresAt(): ?\DateTime
    {
        if (!$this->hasExpiresAt()) {
            $this->setExpiresAt($this->getDefaultExpiresAt());
        }
        return $this->expiresAt;
    }

    /**
     * Check if "expires at" has been set
     *
     * @return bool True if "expires at" has been set, false if not
     */
    public function hasExpiresAt(): bool
    {
        return isset($this->expiresAt);
    }

    /**
     * Get a default "expires at" value, if any is available
     *
     * @return \DateTime|null Default "expires at" value or null if no default value is available
     */
    public function getDefaultExpiresAt(): ?\DateTime
    {
        return null;
    }
}

<?php

namespace Aedart\Support\Properties\Dates;

/**
 * @deprecated Since version 9.x. Component will be removed in next major version.
 *
 * Released at Trait
 *
 * @see \Aedart\Contracts\Support\Properties\Dates\ReleasedAtAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Support\Properties\Dates
 */
trait ReleasedAtTrait
{
    /**
     * Date of when this component, entity or something was released
     *
     * @var \DateTimeInterface|null
     */
    protected \DateTimeInterface|null $releasedAt = null;

    /**
     * Set released at
     *
     * @param \DateTimeInterface|null $date Date of when this component, entity or something was released
     *
     * @return self
     */
    public function setReleasedAt(\DateTimeInterface|null $date): static
    {
        $this->releasedAt = $date;

        return $this;
    }

    /**
     * Get released at
     *
     * If no released at value set, method
     * sets and returns a default released at.
     *
     * @see getDefaultReleasedAt()
     *
     * @return \DateTimeInterface|null released at or null if no released at has been set
     */
    public function getReleasedAt(): \DateTimeInterface|null
    {
        if (!$this->hasReleasedAt()) {
            $this->setReleasedAt($this->getDefaultReleasedAt());
        }
        return $this->releasedAt;
    }

    /**
     * Check if released at has been set
     *
     * @return bool True if released at has been set, false if not
     */
    public function hasReleasedAt(): bool
    {
        return isset($this->releasedAt);
    }

    /**
     * Get a default released at value, if any is available
     *
     * @return \DateTimeInterface|null Default released at value or null if no default value is available
     */
    public function getDefaultReleasedAt(): \DateTimeInterface|null
    {
        return null;
    }
}

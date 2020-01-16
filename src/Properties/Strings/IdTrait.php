<?php

namespace Aedart\Support\Properties\Strings;

/**
 * Id Trait
 *
 * @see \Aedart\Contracts\Support\Properties\Strings\IdAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Support\Properties\Strings
 */
trait IdTrait
{
    /**
     * Unique identifier
     *
     * @var string|null
     */
    protected ?string $id = null;

    /**
     * Set id
     *
     * @param string|null $identifier Unique identifier
     *
     * @return self
     */
    public function setId(?string $identifier)
    {
        $this->id = $identifier;

        return $this;
    }

    /**
     * Get id
     *
     * If no "id" value set, method
     * sets and returns a default "id".
     *
     * @see getDefaultId()
     *
     * @return string|null id or null if no id has been set
     */
    public function getId() : ?string
    {
        if ( ! $this->hasId()) {
            $this->setId($this->getDefaultId());
        }
        return $this->id;
    }

    /**
     * Check if "id" has been set
     *
     * @return bool True if "id" has been set, false if not
     */
    public function hasId() : bool
    {
        return isset($this->id);
    }

    /**
     * Get a default "id" value, if any is available
     *
     * @return string|null Default "id" value or null if no default value is available
     */
    public function getDefaultId() : ?string
    {
        return null;
    }
}

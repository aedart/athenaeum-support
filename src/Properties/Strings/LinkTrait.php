<?php

namespace Aedart\Support\Properties\Strings;

/**
 * Link Trait
 *
 * @see \Aedart\Contracts\Support\Properties\Strings\LinkAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Support\Properties\Strings
 */
trait LinkTrait
{
    /**
     * Hyperlink to related resource or action
     *
     * @var string|null
     */
    protected ?string $link = null;

    /**
     * Set link
     *
     * @param string|null $link Hyperlink to related resource or action
     *
     * @return self
     */
    public function setLink(?string $link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * If no "link" value set, method
     * sets and returns a default "link".
     *
     * @see getDefaultLink()
     *
     * @return string|null link or null if no link has been set
     */
    public function getLink() : ?string
    {
        if ( ! $this->hasLink()) {
            $this->setLink($this->getDefaultLink());
        }
        return $this->link;
    }

    /**
     * Check if "link" has been set
     *
     * @return bool True if "link" has been set, false if not
     */
    public function hasLink() : bool
    {
        return isset($this->link);
    }

    /**
     * Get a default "link" value, if any is available
     *
     * @return string|null Default "link" value or null if no default value is available
     */
    public function getDefaultLink() : ?string
    {
        return null;
    }
}

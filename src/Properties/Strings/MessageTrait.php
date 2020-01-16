<?php

namespace Aedart\Support\Properties\Strings;

/**
 * Message Trait
 *
 * @see \Aedart\Contracts\Support\Properties\Strings\MessageAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Support\Properties\Strings
 */
trait MessageTrait
{
    /**
     * A message
     *
     * @var string|null
     */
    protected ?string $message = null;

    /**
     * Set message
     *
     * @param string|null $message A message
     *
     * @return self
     */
    public function setMessage(?string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * If no "message" value set, method
     * sets and returns a default "message".
     *
     * @see getDefaultMessage()
     *
     * @return string|null message or null if no message has been set
     */
    public function getMessage() : ?string
    {
        if ( ! $this->hasMessage()) {
            $this->setMessage($this->getDefaultMessage());
        }
        return $this->message;
    }

    /**
     * Check if "message" has been set
     *
     * @return bool True if "message" has been set, false if not
     */
    public function hasMessage() : bool
    {
        return isset($this->message);
    }

    /**
     * Get a default "message" value, if any is available
     *
     * @return string|null Default "message" value or null if no default value is available
     */
    public function getDefaultMessage() : ?string
    {
        return null;
    }
}

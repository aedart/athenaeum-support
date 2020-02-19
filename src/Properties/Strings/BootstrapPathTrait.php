<?php

namespace Aedart\Support\Properties\Strings;

/**
 * Bootstrap path Trait
 *
 * @see \Aedart\Contracts\Support\Properties\Strings\BootstrapPathAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Support\Properties\Strings
 */
trait BootstrapPathTrait
{
    /**
     * Directory path where bootstrapping resources are located
     *
     * @var string|null
     */
    protected ?string $bootstrapPath = null;

    /**
     * Set bootstrap path
     *
     * @param string|null $path Directory path where bootstrapping resources are located
     *
     * @return self
     */
    public function setBootstrapPath(?string $path)
    {
        $this->bootstrapPath = $path;

        return $this;
    }

    /**
     * Get bootstrap path
     *
     * If no "bootstrap path" value set, method
     * sets and returns a default "bootstrap path".
     *
     * @see getDefaultBootstrapPath()
     *
     * @return string|null bootstrap path or null if no bootstrap path has been set
     */
    public function getBootstrapPath(): ?string
    {
        if (!$this->hasBootstrapPath()) {
            $this->setBootstrapPath($this->getDefaultBootstrapPath());
        }
        return $this->bootstrapPath;
    }

    /**
     * Check if "bootstrap path" has been set
     *
     * @return bool True if "bootstrap path" has been set, false if not
     */
    public function hasBootstrapPath(): bool
    {
        return isset($this->bootstrapPath);
    }

    /**
     * Get a default "bootstrap path" value, if any is available
     *
     * @return string|null Default "bootstrap path" value or null if no default value is available
     */
    public function getDefaultBootstrapPath(): ?string
    {
        return null;
    }
}

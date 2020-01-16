<?php

namespace Aedart\Support\Helpers\Validation;

use Illuminate\Contracts\Validation\Factory;
use Illuminate\Support\Facades\Validator;

/**
 * Validator Factory Trait
 *
 * @see \Aedart\Contracts\Support\Helpers\Validation\ValidatorFactoryAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Support\Helpers\Validation
 */
trait ValidatorFactoryTrait
{
    /**
     * Validator Factory instance
     *
     * @var Factory|null
     */
    protected ?Factory $validatorFactory = null;

    /**
     * Set validator factory
     *
     * @param Factory|null $factory Validator Factory instance
     *
     * @return self
     */
    public function setValidatorFactory(?Factory $factory)
    {
        $this->validatorFactory = $factory;

        return $this;
    }

    /**
     * Get validator factory
     *
     * If no validator factory has been set, this method will
     * set and return a default validator factory, if any such
     * value is available
     *
     * @see getDefaultValidatorFactory()
     *
     * @return Factory|null validator factory or null if none validator factory has been set
     */
    public function getValidatorFactory(): ?Factory
    {
        if (!$this->hasValidatorFactory()) {
            $this->setValidatorFactory($this->getDefaultValidatorFactory());
        }
        return $this->validatorFactory;
    }

    /**
     * Check if validator factory has been set
     *
     * @return bool True if validator factory has been set, false if not
     */
    public function hasValidatorFactory(): bool
    {
        return isset($this->validatorFactory);
    }

    /**
     * Get a default validator factory value, if any is available
     *
     * @return Factory|null A default validator factory value or Null if no default value is available
     */
    public function getDefaultValidatorFactory(): ?Factory
    {
        return Validator::getFacadeRoot();
    }
}

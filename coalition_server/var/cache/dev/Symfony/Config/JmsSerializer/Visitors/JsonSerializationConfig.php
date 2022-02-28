<?php

namespace Symfony\Config\JmsSerializer\Visitors;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class JsonSerializationConfig 
{
    private $depth;
    private $options;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function depth($value): self
    {
        $this->depth = $value;
    
        return $this;
    }
    
    /**
     * @default 1024
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function options($value): self
    {
        $this->options = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['depth'])) {
            $this->depth = $value['depth'];
            unset($value['depth']);
        }
    
        if (isset($value['options'])) {
            $this->options = $value['options'];
            unset($value['options']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->depth) {
            $output['depth'] = $this->depth;
        }
        if (null !== $this->options) {
            $output['options'] = $this->options;
        }
    
        return $output;
    }

}

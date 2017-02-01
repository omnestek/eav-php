<?php

namespace Omnestek\Phpeav\Dto;

/**
 * User: @fabianjuarezmx
 * Date: 31/01/2017
 * Time: 12:17 AM
 */
class AttributeDecimalDto extends AttributeValueAbstract
{
    /**
     * @var float
     */
    protected $value;

    /**
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param float $value
     * @return AttributeDecimalDto
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }
}

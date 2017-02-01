<?php

namespace Omnestek\Phpeav\Dto;

/**
 * User: @fabianjuarezmx
 * Date: 31/01/2017
 * Time: 12:19 AM
 */
class AttributeIntDto extends AttributeValueAbstract
{
    /**
     * @var int
     */
    protected $value;

    /**
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param $value
     * @return AttributeIntDto
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;

    }
}

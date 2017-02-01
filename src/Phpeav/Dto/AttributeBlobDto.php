<?php

namespace Omnestek\Phpeav\Dto;

/**
 * User: @fabianjuarezmx
 * Date: 31/01/2017
 * Time: 10:56 PM
 */
class AttributeBlobDto extends AttributeValueAbstract
{
    /**
     * @var mixed - blob
     */
    protected $value;

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     * @return AttributeBlobDto
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }
}
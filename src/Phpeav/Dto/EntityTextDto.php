<?php

namespace Omnestek\Phpeav\Dto;

/**
 * User: @fabianjuarezmx
 * Date: 31/01/2017
 * Time: 10:55 PM
 */
class EntityTextDto
{
    /**
     * @var text
     */
    protected $value;

    /**
     * @return text
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param text $value
     * @return EntityTextDto
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }
}

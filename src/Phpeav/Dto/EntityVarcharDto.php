<?php

namespace Omnestek\Phpeav\Dto;

/**
 * User: @fabianjuarezmx
 * Date: 31/01/2017
 * Time: 10:53 PM
 */
class EntityVarcharDto extends EntityDataAbstract
{
    /**
     * @var string
     */
    protected $value;

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return EntityVarcharDto
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }
}

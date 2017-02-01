<?php

namespace Omnestek\Phpeav\Dto;

/**
 * User: @fabianjuarezmx
 * Date: 31/01/2017
 * Time: 10:55 PM
 */
class EntityTextDto extends EntityDataAbstract
{
    /**
     * @var mixed - text
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
     * @return EntityTextDto
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }
}

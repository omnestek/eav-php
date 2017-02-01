<?php

namespace Omnestek\Phpeav\Dto;

/**
 * User: @fabianjuarezmx
 * Date: 30/01/2017
 * Time: 11:56 PM
 */
class AttributeDateTimeDto extends AttributeValueAbstract
{
    /**
     * @var datetime string
     */
    protected $value;

    /**
     * @return datetime
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param datetime $value
     * @return AttributeDateTimeDto
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }
}

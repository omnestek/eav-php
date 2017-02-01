<?php

namespace Omnestek\Phpeav\Dto;

/**
 * User: @fabianjuarezmx
 * Date: 30/01/2017
 * Time: 10:58 PM
 */
class AttributeOptionDto
{
    /**
     * @var int
     */
    protected $attribute_option_id;

    /**
     * @var int
     */
    protected $attribute_option_attribute_id;

    /**
     * @var string
     */
    protected $attribute_value;

    /**
     * @var int
     */
    protected $attribute_option_sort;

    /**
     * @var tinyint
     */
    protected $attribute_active;

    /**
     * @return int
     */
    public function getAttributeOptionId()
    {
        return $this->attribute_option_id;
    }

    /**
     * @param int $attribute_option_id
     * @return AttributeOptionDto
     */
    public function setAttributeOptionId($attribute_option_id)
    {
        $this->attribute_option_id = $attribute_option_id;
        return $this;
    }

    /**
     * @return int
     */
    public function getAttributeOptionAttributeId()
    {
        return $this->attribute_option_attribute_id;
    }

    /**
     * @param int $attribute_option_attribute_id
     * @return AttributeOptionDto
     */
    public function setAttributeOptionAttributeId($attribute_option_attribute_id)
    {
        $this->attribute_option_attribute_id = $attribute_option_attribute_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getAttributeValue()
    {
        return $this->attribute_value;
    }

    /**
     * @param string $attribute_value
     * @return AttributeOptionDto
     */
    public function setAttributeValue($attribute_value)
    {
        $this->attribute_value = $attribute_value;
        return $this;
    }

    /**
     * @return int
     */
    public function getAttributeOptionSort()
    {
        return $this->attribute_option_sort;
    }

    /**
     * @param int $attribute_option_sort
     * @return AttributeOptionDto
     */
    public function setAttributeOptionSort($attribute_option_sort)
    {
        $this->attribute_option_sort = $attribute_option_sort;
        return $this;
    }

    /**
     * @return tinyint
     */
    public function getAttributeActive()
    {
        return $this->attribute_active;
    }

    /**
     * @param tinyint $attribute_active
     * @return AttributeOptionDto
     */
    public function setAttributeActive($attribute_active)
    {
        $this->attribute_active = $attribute_active;
        return $this;
    }
}

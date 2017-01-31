<?php

namespace Omnestek\Phpeav\Dto;

/**
 * User: @fabianjuarezmx
 * Date: 30/01/2017
 * Time: 11:47 PM
 */
abstract class EntityDataAbstract
{
    /**
     * @var int
     */
    protected $value_id;

    /**
     * @var int
     */
    protected $entity_id;

    /**
     * @var int
     */
    protected $entity_type_id;

    /**
     * @var int
     */
    protected $attribute_id;

    /**
     * @var int
     */
    protected $attributes_set_id;

    /**
     * @var int
     */
    protected $order;

    /**
     * @var int
     */
    protected $active;

    /**
     * @return int
     */
    public function getValueId()
    {
        return $this->value_id;
    }

    /**
     * @param int $value_id
     * @return EntityDataAbstract
     */
    public function setValueId($value_id)
    {
        $this->value_id = $value_id;
        return $this;
    }

    /**
     * @return int
     */
    public function getEntityId()
    {
        return $this->entity_id;
    }

    /**
     * @param int $entity_id
     * @return EntityDataAbstract
     */
    public function setEntityId($entity_id)
    {
        $this->entity_id = $entity_id;
        return $this;
    }

    /**
     * @return int
     */
    public function getEntityTypeId()
    {
        return $this->entity_type_id;
    }

    /**
     * @param int $entity_type_id
     * @return EntityDataAbstract
     */
    public function setEntityTypeId($entity_type_id)
    {
        $this->entity_type_id = $entity_type_id;
        return $this;
    }

    /**
     * @return int
     */
    public function getAttributeId()
    {
        return $this->attribute_id;
    }

    /**
     * @param int $attribute_id
     * @return EntityDataAbstract
     */
    public function setAttributeId($attribute_id)
    {
        $this->attribute_id = $attribute_id;
        return $this;
    }

    /**
     * @return int
     */
    public function getAttributesSetId()
    {
        return $this->attributes_set_id;
    }

    /**
     * @param int $attributes_set_id
     * @return EntityDataAbstract
     */
    public function setAttributesSetId($attributes_set_id)
    {
        $this->attributes_set_id = $attributes_set_id;
        return $this;
    }

    /**
     * @return int
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param int $order
     * @return EntityDataAbstract
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * @return int
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param int $active
     * @return EntityDataAbstract
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }
}

<?php
namespace Omnestek\Phpeav\Dto;
/**
 * Created by PhpStorm.
 * User: oalvarado
 * Date: 22/01/17
 * Time: 21:19
 */
class AttributeValueDto
{
    /**
     * @var
     */
    protected $entityId;

    /**
     * @var
     */
    protected $entityTypeId;

    /**
     * @var
     */
    protected $attributeId;

    /**
     * @var
     */
    protected $attributesSetId;

    /**
     * @var
     */
    protected $value;

    /**
     * @var
     */
    protected $order;

    /**
     * @return mixed
     */
    public function getEntityId()
    {
        return $this->entityId;
    }

    /**
     * @param mixed $entityId
     * @return AttributeValueDto
     */
    public function setEntityId($entityId)
    {
        $this->entityId = $entityId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEntityTypeId()
    {
        return $this->entityTypeId;
    }

    /**
     * @param mixed $entityTypeId
     * @return AttributeValueDto
     */
    public function setEntityTypeId($entityTypeId)
    {
        $this->entityTypeId = $entityTypeId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAttributeId()
    {
        return $this->attributeId;
    }

    /**
     * @param mixed $attributeId
     * @return AttributeValueDto
     */
    public function setAttributeId($attributeId)
    {
        $this->attributeId = $attributeId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAttributesSetId()
    {
        return $this->attributesSetId;
    }

    /**
     * @param mixed $attributesSetId
     * @return AttributeValueDto
     */
    public function setAttributesSetId($attributesSetId)
    {
        $this->attributesSetId = $attributesSetId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     * @return AttributeValueDto
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param mixed $order
     * @return AttributeValueDto
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }
}
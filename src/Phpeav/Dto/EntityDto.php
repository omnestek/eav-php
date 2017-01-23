<?php
namespace Omnestek\Phpeav\Dto;

/**
 * Created by PhpStorm.
 * User: oalvarado
 * Date: 22/01/17
 * Time: 21:19
 */
class EntityDto
{
    /**
     * @var
     */
    protected $entityType;

    /**
     * @var
     */
    protected $entityId;

    /**
     * @var array
     */
    protected $attributes = [];

    /**
     * @var
     */
    protected $entityParent;

    /**
     * @var
     */
    protected $entityAttributesSet;

    /**
     * @var
     */
    protected $entityUniqueStringKey;

    /**
     * @var
     */
    protected $createdAt;

    /**
     * @var
     */
    protected $updatedAt;

    /**
     * @return mixed
     */
    public function getEntityType()
    {
        return $this->entityType;
    }

    /**
     * @param mixed $entityType
     * @return EntityDto
     */
    public function setEntityType($entityType)
    {
        $this->entityType = $entityType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEntityId()
    {
        return $this->entityId;
    }

    /**
     * @param mixed $entityId
     * @return EntityDto
     */
    public function setEntityId($entityId)
    {
        $this->entityId = $entityId;
        return $this;
    }

    /**
     * @return array
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param array $attributes
     * @return EntityDto
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEntityParent()
    {
        return $this->entityParent;
    }

    /**
     * @param mixed $entityParent
     * @return EntityDto
     */
    public function setEntityParent($entityParent)
    {
        $this->entityParent = $entityParent;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEntityAttributesSet()
    {
        return $this->entityAttributesSet;
    }

    /**
     * @param mixed $entityAttributesSet
     * @return EntityDto
     */
    public function setEntityAttributesSet($entityAttributesSet)
    {
        $this->entityAttributesSet = $entityAttributesSet;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEntityUniqueStringKey()
    {
        return $this->entityUniqueStringKey;
    }

    /**
     * @param mixed $entityUniqueStringKey
     * @return EntityDto
     */
    public function setEntityUniqueStringKey($entityUniqueStringKey)
    {
        $this->entityUniqueStringKey = $entityUniqueStringKey;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     * @return EntityDto
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param mixed $updatedAt
     * @return EntityDto
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

}
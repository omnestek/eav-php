<?php

namespace Omnestek\Phpeav\Dto\Meta;

/**
 * User: @fabianjuarezmx
 * Date: 30/01/2017
 * Time: 11:29 PM
 */
class EntityAttributeGroupMetaDto
{
    /**
     * @var int
     */
    protected $entity_attribute_group_id;

    /**
     * @var int
     */
    protected $entity_attribute_id;

    /**
     * @var int
     */
    protected $entity_group_id;

    /**
     * @var int
     */
    protected $entity_group_order;

    /**
     * @var string
     */
    protected $entity_group_status;

    /**
     * @var int
     */
    protected $entity_group_entity_type_id;

    /**
     * @return int
     */
    public function getEntityAttributeGroupId()
    {
        return $this->entity_attribute_group_id;
    }

    /**
     * @param int $entity_attribute_group_id
     * @return EntityAttributeGroupMetaDto
     */
    public function setEntityAttributeGroupId($entity_attribute_group_id)
    {
        $this->entity_attribute_group_id = $entity_attribute_group_id;
        return $this;
    }

    /**
     * @return int
     */
    public function getEntityAttributeId()
    {
        return $this->entity_attribute_id;
    }

    /**
     * @param int $entity_attribute_id
     * @return EntityAttributeGroupMetaDto
     */
    public function setEntityAttributeId($entity_attribute_id)
    {
        $this->entity_attribute_id = $entity_attribute_id;
        return $this;
    }

    /**
     * @return int
     */
    public function getEntityGroupId()
    {
        return $this->entity_group_id;
    }

    /**
     * @param int $entity_group_id
     * @return EntityAttributeGroupMetaDto
     */
    public function setEntityGroupId($entity_group_id)
    {
        $this->entity_group_id = $entity_group_id;
        return $this;
    }

    /**
     * @return int
     */
    public function getEntityGroupOrder()
    {
        return $this->entity_group_order;
    }

    /**
     * @param int $entity_group_order
     * @return EntityAttributeGroupMetaDto
     */
    public function setEntityGroupOrder($entity_group_order)
    {
        $this->entity_group_order = $entity_group_order;
        return $this;
    }

    /**
     * @return string
     */
    public function getEntityGroupStatus()
    {
        return $this->entity_group_status;
    }

    /**
     * @param string $entity_group_status
     * @return EntityAttributeGroupMetaDto
     */
    public function setEntityGroupStatus($entity_group_status)
    {
        $this->entity_group_status = $entity_group_status;
        return $this;
    }

    /**
     * @return int
     */
    public function getEntityGroupEntityTypeId()
    {
        return $this->entity_group_entity_type_id;
    }

    /**
     * @param int $entity_group_entity_type_id
     * @return EntityAttributeGroupMetaDto
     */
    public function setEntityGroupEntityTypeId($entity_group_entity_type_id)
    {
        $this->entity_group_entity_type_id = $entity_group_entity_type_id;
        return $this;
    }
}

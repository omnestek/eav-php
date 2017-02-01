<?php

namespace Omnestek\Phpeav\Dto\Meta;

/**
 * User: @fabianjuarezmx
 * Date: 30/01/2017
 * Time: 11:16 PM
 */
class EntityAttributeGroupsMetaDto
{
    /**
     * @var int
     */
    protected $entity_attribute_group_id;

    /**
     * @var int
     */
    protected $entity_attribute_group_entity_type_id;

    /**
     * @var string
     */
    protected $entity_attribute_group_description;

    /**
     * @var tinyint
     */
    protected $entity_attribute_group_status;

    /**
     * @var string
     */
    protected $entity_attribute_group_ddl_description;

    /**
     * @return int
     */
    public function getEntityAttributeGroupId()
    {
        return $this->entity_attribute_group_id;
    }

    /**
     * @param int $entity_attribute_group_id
     * @return EntityAttributeGroupsMetaDto
     */
    public function setEntityAttributeGroupId($entity_attribute_group_id)
    {
        $this->entity_attribute_group_id = $entity_attribute_group_id;
        return $this;
    }

    /**
     * @return int
     */
    public function getEntityAttributeGroupEntityTypeId()
    {
        return $this->entity_attribute_group_entity_type_id;
    }

    /**
     * @param int $entity_attribute_group_entity_type_id
     * @return EntityAttributeGroupsMetaDto
     */
    public function setEntityAttributeGroupEntityTypeId($entity_attribute_group_entity_type_id)
    {
        $this->entity_attribute_group_entity_type_id = $entity_attribute_group_entity_type_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getEntityAttributeGroupDescription()
    {
        return $this->entity_attribute_group_description;
    }

    /**
     * @param string $entity_attribute_group_description
     * @return EntityAttributeGroupsMetaDto
     */
    public function setEntityAttributeGroupDescription($entity_attribute_group_description)
    {
        $this->entity_attribute_group_description = $entity_attribute_group_description;
        return $this;
    }

    /**
     * @return tinyint
     */
    public function getEntityAttributeGroupStatus()
    {
        return $this->entity_attribute_group_status;
    }

    /**
     * @param tinyint $entity_attribute_group_status
     * @return EntityAttributeGroupsMetaDto
     */
    public function setEntityAttributeGroupStatus($entity_attribute_group_status)
    {
        $this->entity_attribute_group_status = $entity_attribute_group_status;
        return $this;
    }

    /**
     * @return string
     */
    public function getEntityAttributeGroupDdlDescription()
    {
        return $this->entity_attribute_group_ddl_description;
    }

    /**
     * @param string $entity_attribute_group_ddl_description
     * @return EntityAttributeGroupsMetaDto
     */
    public function setEntityAttributeGroupDdlDescription($entity_attribute_group_ddl_description)
    {
        $this->entity_attribute_group_ddl_description = $entity_attribute_group_ddl_description;
        return $this;
    }
}

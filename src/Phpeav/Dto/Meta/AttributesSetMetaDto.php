<?php
namespace Omnestek\Phpeav\Dto\Meta;

/**
 * Class AttributesSetMetaDto
 * @package Omnestek\Phpeav\Dto\Meta
 */
class AttributesSetMetaDto
{
    /**
     * @var
     */
    protected $attributes_set_id;
    /**
     * @var
     */
    protected $attributes_entity_type_id;
    /**
     * @var
     */
    protected $attributes_set_name;
    /**
     * @var
     */
    protected $attributes_set_description;
    /**
     * @var
     */
    protected $attributes_set_ddl_description;
    /**
     * @return mixed
     */
    public function getAttributesSetId()
    {
        return $this->attributes_set_id;
    }
    /**
     * @param mixed $attributes_set_id
     * @return AttributesSetMetaDto
     */
    public function setAttributesSetId($attributes_set_id)
    {
        $this->attributes_set_id = $attributes_set_id;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getAttributesEntityTypeId()
    {
        return $this->attributes_entity_type_id;
    }
    /**
     * @param mixed $attributes_entity_type_id
     * @return AttributesSetMetaDto
     */
    public function setAttributesEntityTypeId($attributes_entity_type_id)
    {
        $this->attributes_entity_type_id = $attributes_entity_type_id;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getAttributesSetName()
    {
        return $this->attributes_set_name;
    }
    /**
     * @param mixed $attributes_set_name
     * @return AttributesSetMetaDto
     */
    public function setAttributesSetName($attributes_set_name)
    {
        $this->attributes_set_name = $attributes_set_name;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getAttributesSetDescription()
    {
        return $this->attributes_set_description;
    }
    /**
     * @param mixed $attributes_set_description
     * @return AttributesSetMetaDto
     */
    public function setAttributesSetDescription($attributes_set_description)
    {
        $this->attributes_set_description = $attributes_set_description;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getAttributesSetDdlDescription()
    {
        return $this->attributes_set_ddl_description;
    }
    /**
     * @param mixed $attributes_set_ddl_description
     * @return AttributesSetMetaDto
     */
    public function setAttributesSetDdlDescription($attributes_set_ddl_description)
    {
        $this->attributes_set_ddl_description = $attributes_set_ddl_description;
        return $this;
    }


}
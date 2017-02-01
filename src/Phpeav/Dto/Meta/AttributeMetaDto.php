<?php
namespace Omnestek\Phpeav\Dto\Meta;

/**
 * Class AttributeMetaDto
 * @package Omnestek\Phpeav\Dto\Meta
 */
class AttributeMetaDto
{
    /**
     * @var
     */
    protected $attribute_id;
    /**
     * @var
     */
    protected $attribute_entity_type_id;
    /**
     * @var
     */
    protected $attribute_attribute_set_id;
    /**
     * @var
     */
    protected $attribute_name;
    /**
     * @var
     */
    protected $attribute_description;
    /**
     * @var
     */
    protected $attribute_type;
    /**
     * @var
     */
    protected $attribute_table;
    /**
     * @var
     */
    protected $attribute_status;
    /**
     * @var
     */
    protected $attribute_set;
    /**
     * @var
     */
    protected $attribute_html_class;
    /**
     * @var
     */
    protected $attribute_html_input;
    /**
     * @var
     */
    protected $attribute_html_label;
    /**
     * @var
     */
    protected $attribute_visible;
    /**
     * @var
     */
    protected $attribute_required;
    /**
     * @var
     */
    protected $attribute_searchable;
    /**
     * @var
     */
    protected $attribute_is_unique;
    /**
     * @var
     */
    protected $attribute_is_encrypted;
    /**
     * @var
     */
    protected $attribute_sort;
    /**
     * @var
     */
    protected $attribute_ddl_description;
    /**
     * @var
     */
    protected $attribute_is_array;
    /**
     * @return mixed
     */
    public function getAttributeId()
    {
        return $this->attribute_id;
    }
    /**
     * @param mixed $attribute_id
     * @return AttributeMetaDto
     */
    public function setAttributeId($attribute_id)
    {
        $this->attribute_id = $attribute_id;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getAttributeEntityTypeId()
    {
        return $this->attribute_entity_type_id;
    }
    /**
     * @param mixed $attribute_entity_type_id
     * @return AttributeMetaDto
     */
    public function setAttributeEntityTypeId($attribute_entity_type_id)
    {
        $this->attribute_entity_type_id = $attribute_entity_type_id;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getAttributeAttributeSetId()
    {
        return $this->attribute_attribute_set_id;
    }
    /**
     * @param mixed $attribute_attribute_set_id
     * @return AttributeMetaDto
     */
    public function setAttributeAttributeSetId($attribute_attribute_set_id)
    {
        $this->attribute_attribute_set_id = $attribute_attribute_set_id;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getAttributeName()
    {
        return $this->attribute_name;
    }
    /**
     * @param mixed $attribute_name
     * @return AttributeMetaDto
     */
    public function setAttributeName($attribute_name)
    {
        $this->attribute_name = $attribute_name;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getAttributeDescription()
    {
        return $this->attribute_description;
    }
    /**
     * @param mixed $attribute_description
     * @return AttributeMetaDto
     */
    public function setAttributeDescription($attribute_description)
    {
        $this->attribute_description = $attribute_description;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getAttributeType()
    {
        return $this->attribute_type;
    }
    /**
     * @param mixed $attribute_type
     * @return AttributeMetaDto
     */
    public function setAttributeType($attribute_type)
    {
        $this->attribute_type = $attribute_type;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getAttributeTable()
    {
        return $this->attribute_table;
    }
    /**
     * @param mixed $attribute_table
     * @return AttributeMetaDto
     */
    public function setAttributeTable($attribute_table)
    {
        $this->attribute_table = $attribute_table;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getAttributeStatus()
    {
        return $this->attribute_status;
    }
    /**
     * @param mixed $attribute_status
     * @return AttributeMetaDto
     */
    public function setAttributeStatus($attribute_status)
    {
        $this->attribute_status = $attribute_status;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getAttributeSet()
    {
        return $this->attribute_set;
    }
    /**
     * @param mixed $attribute_set
     * @return AttributeMetaDto
     */
    public function setAttributeSet($attribute_set)
    {
        $this->attribute_set = $attribute_set;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getAttributeHtmlClass()
    {
        return $this->attribute_html_class;
    }
    /**
     * @param mixed $attribute_html_class
     * @return AttributeMetaDto
     */
    public function setAttributeHtmlClass($attribute_html_class)
    {
        $this->attribute_html_class = $attribute_html_class;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getAttributeHtmlInput()
    {
        return $this->attribute_html_input;
    }
    /**
     * @param mixed $attribute_html_input
     * @return AttributeMetaDto
     */
    public function setAttributeHtmlInput($attribute_html_input)
    {
        $this->attribute_html_input = $attribute_html_input;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getAttributeHtmlLabel()
    {
        return $this->attribute_html_label;
    }
    /**
     * @param mixed $attribute_html_label
     * @return AttributeMetaDto
     */
    public function setAttributeHtmlLabel($attribute_html_label)
    {
        $this->attribute_html_label = $attribute_html_label;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getAttributeVisible()
    {
        return $this->attribute_visible;
    }
    /**
     * @param mixed $attribute_visible
     * @return AttributeMetaDto
     */
    public function setAttributeVisible($attribute_visible)
    {
        $this->attribute_visible = $attribute_visible;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getAttributeRequired()
    {
        return $this->attribute_required;
    }
    /**
     * @param mixed $attribute_required
     * @return AttributeMetaDto
     */
    public function setAttributeRequired($attribute_required)
    {
        $this->attribute_required = $attribute_required;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getAttributeSearchable()
    {
        return $this->attribute_searchable;
    }
    /**
     * @param mixed $attribute_searchable
     * @return AttributeMetaDto
     */
    public function setAttributeSearchable($attribute_searchable)
    {
        $this->attribute_searchable = $attribute_searchable;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getAttributeIsUnique()
    {
        return $this->attribute_is_unique;
    }
    /**
     * @param mixed $attribute_is_unique
     * @return AttributeMetaDto
     */
    public function setAttributeIsUnique($attribute_is_unique)
    {
        $this->attribute_is_unique = $attribute_is_unique;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getAttributeIsEncrypted()
    {
        return $this->attribute_is_encrypted;
    }
    /**
     * @param mixed $attribute_is_encrypted
     * @return AttributeMetaDto
     */
    public function setAttributeIsEncrypted($attribute_is_encrypted)
    {
        $this->attribute_is_encrypted = $attribute_is_encrypted;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getAttributeSort()
    {
        return $this->attribute_sort;
    }
    /**
     * @param mixed $attribute_sort
     * @return AttributeMetaDto
     */
    public function setAttributeSort($attribute_sort)
    {
        $this->attribute_sort = $attribute_sort;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getAttributeDdlDescription()
    {
        return $this->attribute_ddl_description;
    }
    /**
     * @param mixed $attribute_ddl_description
     * @return AttributeMetaDto
     */
    public function setAttributeDdlDescription($attribute_ddl_description)
    {
        $this->attribute_ddl_description = $attribute_ddl_description;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getAttributeIsArray()
    {
        return $this->attribute_is_array;
    }
    /**
     * @param mixed $attribute_is_array
     * @return AttributeMetaDto
     */
    public function setAttributeIsArray($attribute_is_array)
    {
        $this->attribute_is_array = $attribute_is_array;
        return $this;
    }
}
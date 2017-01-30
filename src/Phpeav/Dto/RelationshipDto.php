<?php
namespace Omnestek\Phpeav\Dto;
/**
 * Created by PhpStorm.
 * User: oalvarado
 * Date: 22/01/17
 * Time: 21:19
 */
class RelationshipDto
{
    /**
     * @var
     */
    protected $entity_type_a;

    /**
     * @var
     */
    protected $entity_type_b;

    /**
     * @var
     */
    protected $relation_type_id;

    /**
     * @var
     */
    protected $relation_type;

    /**
     * @return mixed
     */
    public function getEntityTypeA()
    {
        return $this->entity_type_a;
    }

    /**
     * @param mixed $entity_type_a
     * @return RelationshipDto
     */
    public function setEntityTypeA($entity_type_a)
    {
        $this->entity_type_a = $entity_type_a;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEntityTypeB()
    {
        return $this->entity_type_b;
    }

    /**
     * @param mixed $entity_type_b
     * @return RelationshipDto
     */
    public function setEntityTypeB($entity_type_b)
    {
        $this->entity_type_b = $entity_type_b;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRelationTypeId()
    {
        return $this->relation_type_id;
    }

    /**
     * @param mixed $relation_type_id
     * @return RelationshipDto
     */
    public function setRelationTypeId($relation_type_id)
    {
        $this->relation_type_id = $relation_type_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRelationType()
    {
        return $this->relation_type;
    }

    /**
     * @param mixed $relation_type
     * @return RelationshipDto
     */
    public function setRelationType($relation_type)
    {
        $this->relation_type = $relation_type;
        return $this;
    }
}
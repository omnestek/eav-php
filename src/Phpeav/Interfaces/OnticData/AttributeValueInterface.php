<?php
namespace Omnestek\Phpeav\Interfaces\OnticData;
use Omnestek\Phpeav\Dto\AttributeValueAbstract;

/**
 * Class AttributeValueInterface
 * @package Omnestek\Phpeav\Interfaces\OnticData
 */
interface AttributeValueInterface
{
    /**
     * @param $entityType
     * @param $entityId
     * @param $attributeId
     * @return mixed
     */
    public function getAttributeValueById($entityType, $entityId, $attributeId);

    /**
     * @param $entityType
     * @param $entityId
     * @param $attributeName
     * @return mixed
     */
    public function getAttributeValueByName($entityType, $entityId, $attributeName);

    /**
     * @param $entityType
     * @param $entityId
     * @param AttributeValueAbstract $attribute
     * @return mixed
     */
    public function saveAttribute($entityType, $entityId, AttributeValueAbstract $attribute);
}
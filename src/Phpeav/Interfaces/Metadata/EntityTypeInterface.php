<?php
/**
 * Created by PhpStorm.
 * User: oalvarado
 * Date: 18/01/17
 * Time: 16:10
 */

namespace Omnestek\Phpeav\Interfaces\MetaData;

interface EntityTypeInterface
{
    /**
     * @param $entityTypeId
     * @return mixed
     */
    public function getMeta($entityTypeId);

    /**
     * @param $entityTypeId
     * @return mixed
     */
    public function getAttributes($entityTypeId);

    /**
     * @param $entityTypeId
     * @param $attributeName
     * @return mixed
     */
    public function hasAttribute($entityTypeId, $attributeName);

    /**
     * @param array $filters
     * @return mixed
     */
    public function getList($filters = array());
}
<?php
namespace Omnestek\Phpeav\Services;
use Omnestek\Phpeav\Dto\EntityDto;
use Omnestek\Phpeav\Interfaces\OnticData\AttributeValueInterface;
use Omnestek\Phpeav\Interfaces\OnticData\EntityInterface;

/**
 * Created by PhpStorm.
 * User: oalvarado
 * Date: 12/02/17
 * Time: 21:18
 */
class OnticService
{
    /**
     * @var EntityInterface
     */
    protected $entityRepository;

    public function __construct(EntityInterface $entityRepository)
    {
        $this->entityRepository = $entityRepository;
    }

    /**
     * @param EntityDto $entityDto
     */
    public function save(EntityDto $entityDto)
    {
        $this->entityRepository->saveEntity($entityDto);
    }

    /**
     * @param EntityDto $entityDto
     */
    public function validate(EntityDto $entityDto)
    {

    }

    public function get($entityTypeId, $entityId)
    {
        return $this->entityRepository->getEntity($entityTypeId, $entityId);
    }
}
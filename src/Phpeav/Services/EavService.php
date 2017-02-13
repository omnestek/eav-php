<?php
namespace Omnestek\Phpeav\Services;
/**
 * Created by PhpStorm.
 * User: oalvarado
 * Date: 12/02/17
 * Time: 21:15
 */
class EavService
{
    /**
     * @var MetaService
     */
    protected $metaService;

    /**
     * @var OnticService
     */
    protected $onticService;

    /**
     * @return MetaService
     */
    public function getMetaService()
    {
        return $this->metaService;
    }

    /**
     * @param mixed $metaService
     * @return EavService
     */
    public function setMetaService($metaService)
    {
        $this->metaService = $metaService;
        return $this;
    }

    /**
     * @return OnticService
     */
    public function getOnticService()
    {
        return $this->onticService;
    }

    /**
     * @param mixed $onticService
     * @return EavService
     */
    public function setOnticService($onticService)
    {
        $this->onticService = $onticService;
        return $this;
    }


}
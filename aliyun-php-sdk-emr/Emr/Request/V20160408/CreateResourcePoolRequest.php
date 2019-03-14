<?php

namespace Emr\Request\V20160408;

/**
 * Request of CreateResourcePool
 *
 * @method string getNote()
 * @method string getResourceOwnerId()
 * @method string getName()
 * @method string getActive()
 * @method string getClusterId()
 * @method string getYarnSiteConfig()
 * @method array getConfigs()
 * @method string getPoolType()
 */
class CreateResourcePoolRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Emr',
            '2016-04-08',
            'CreateResourcePool',
            'emr'
        );
    }

    /**
     * @param string $note
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->requestParameters['Note'] = $note;
        $this->queryParameters['Note'] = $note;

        return $this;
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->requestParameters['Name'] = $name;
        $this->queryParameters['Name'] = $name;

        return $this;
    }

    /**
     * @param string $active
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->requestParameters['Active'] = $active;
        $this->queryParameters['Active'] = $active;

        return $this;
    }

    /**
     * @param string $clusterId
     *
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        $this->requestParameters['ClusterId'] = $clusterId;
        $this->queryParameters['ClusterId'] = $clusterId;

        return $this;
    }

    /**
     * @param string $yarnSiteConfig
     *
     * @return $this
     */
    public function setYarnSiteConfig($yarnSiteConfig)
    {
        $this->requestParameters['YarnSiteConfig'] = $yarnSiteConfig;
        $this->queryParameters['YarnSiteConfig'] = $yarnSiteConfig;

        return $this;
    }

    /**
     * @param array $configs
     *
     * @return $this
     */
    public function setConfigs(array $configs)
    {
        $this->requestParameters['Configs'] = $configs;
        foreach ($configs as $i => $iValue) {
            $this->queryParameters['Config.' . ($i + 1) . '.ConfigKey'] = $configs[$i]['ConfigKey'];
            $this->queryParameters['Config.' . ($i + 1) . '.Note'] = $configs[$i]['Note'];
            $this->queryParameters['Config.' . ($i + 1) . '.configType'] = $configs[$i]['configType'];
            $this->queryParameters['Config.' . ($i + 1) . '.TargetId'] = $configs[$i]['TargetId'];
            $this->queryParameters['Config.' . ($i + 1) . '.ConfigValue'] = $configs[$i]['ConfigValue'];
            $this->queryParameters['Config.' . ($i + 1) . '.Category'] = $configs[$i]['Category'];
        }

        return $this;
    }

    /**
     * @param string $poolType
     *
     * @return $this
     */
    public function setPoolType($poolType)
    {
        $this->requestParameters['PoolType'] = $poolType;
        $this->queryParameters['PoolType'] = $poolType;

        return $this;
    }
}

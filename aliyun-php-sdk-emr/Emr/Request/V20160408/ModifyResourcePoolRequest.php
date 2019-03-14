<?php

namespace Emr\Request\V20160408;

/**
 * Request of ModifyResourcePool
 *
 * @method string getResourceOwnerId()
 * @method string getName()
 * @method string getActive()
 * @method string getId()
 * @method string getClusterId()
 * @method string getYarnsiteconfig()
 * @method array getConfigs()
 */
class ModifyResourcePoolRequest extends \RpcAcsRequest
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
            'ModifyResourcePool',
            'emr'
        );
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
     * @param string $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->requestParameters['Id'] = $id;
        $this->queryParameters['Id'] = $id;

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
     * @param string $yarnsiteconfig
     *
     * @return $this
     */
    public function setYarnsiteconfig($yarnsiteconfig)
    {
        $this->requestParameters['Yarnsiteconfig'] = $yarnsiteconfig;
        $this->queryParameters['Yarnsiteconfig'] = $yarnsiteconfig;

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
            $this->queryParameters['Config.' . ($i + 1) . '.ConfigValue'] = $configs[$i]['ConfigValue'];
            $this->queryParameters['Config.' . ($i + 1) . '.Id'] = $configs[$i]['Id'];
            $this->queryParameters['Config.' . ($i + 1) . '.Category'] = $configs[$i]['Category'];
        }

        return $this;
    }
}

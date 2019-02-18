<?php

namespace Edas\Request\V20170801;

/**
 * Request of UpdateK8sApplicationConfig
 *
 * @method string getAppId()
 * @method string getMemoryLimit()
 * @method string getClusterId()
 * @method string getCpuLimit()
 */
class UpdateK8sApplicationConfigRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/k8s/acs/k8s_app_configuration';

    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Edas',
            '2017-08-01',
            'UpdateK8sApplicationConfig'
        );
    }

    /**
     * @param string $appId
     *
     * @return $this
     */
    public function setAppId($appId)
    {
        $this->requestParameters['AppId'] = $appId;
        $this->queryParameters['AppId'] = $appId;

        return $this;
    }

    /**
     * @param string $memoryLimit
     *
     * @return $this
     */
    public function setMemoryLimit($memoryLimit)
    {
        $this->requestParameters['MemoryLimit'] = $memoryLimit;
        $this->queryParameters['MemoryLimit'] = $memoryLimit;

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
     * @param string $cpuLimit
     *
     * @return $this
     */
    public function setCpuLimit($cpuLimit)
    {
        $this->requestParameters['CpuLimit'] = $cpuLimit;
        $this->queryParameters['CpuLimit'] = $cpuLimit;

        return $this;
    }
}

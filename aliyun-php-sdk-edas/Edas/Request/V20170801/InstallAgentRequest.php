<?php

namespace Edas\Request\V20170801;

/**
 * Request of InstallAgent
 *
 * @method string getInstanceIds()
 * @method string getDoAsync()
 * @method string getClusterId()
 */
class InstallAgentRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/ecss/install_agent';

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
            'Edas',
            '2017-08-01',
            'InstallAgent'
        );
    }

    /**
     * @param string $instanceIds
     *
     * @return $this
     */
    public function setInstanceIds($instanceIds)
    {
        $this->requestParameters['InstanceIds'] = $instanceIds;
        $this->queryParameters['InstanceIds'] = $instanceIds;

        return $this;
    }

    /**
     * @param string $doAsync
     *
     * @return $this
     */
    public function setDoAsync($doAsync)
    {
        $this->requestParameters['DoAsync'] = $doAsync;
        $this->queryParameters['DoAsync'] = $doAsync;

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
}

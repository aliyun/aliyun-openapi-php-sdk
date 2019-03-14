<?php

namespace Emr\Request\V20160408;

/**
 * Request of AttachPubIp
 *
 * @method string getResourceOwnerId()
 * @method array getInstanceIdss()
 * @method string getClusterId()
 */
class AttachPubIpRequest extends \RpcAcsRequest
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
            'AttachPubIp',
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
     * @param array $instanceIdss
     *
     * @return $this
     */
    public function setInstanceIdss(array $instanceIdss)
    {
        $this->requestParameters['InstanceIdss'] = $instanceIdss;
        foreach ($instanceIdss as $i => $iValue) {
            $this->queryParameters['InstanceIds.' . ($i + 1)] = $iValue;
        }

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

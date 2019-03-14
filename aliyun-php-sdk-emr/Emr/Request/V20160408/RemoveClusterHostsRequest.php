<?php

namespace Emr\Request\V20160408;

/**
 * Request of RemoveClusterHosts
 *
 * @method string getResourceOwnerId()
 * @method string getClusterId()
 * @method array getHostIdLists()
 */
class RemoveClusterHostsRequest extends \RpcAcsRequest
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
            'RemoveClusterHosts',
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
     * @param array $hostIdLists
     *
     * @return $this
     */
    public function setHostIdLists(array $hostIdLists)
    {
        $this->requestParameters['HostIdLists'] = $hostIdLists;
        foreach ($hostIdLists as $i => $iValue) {
            $this->queryParameters['HostIdList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

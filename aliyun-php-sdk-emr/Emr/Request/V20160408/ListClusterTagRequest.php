<?php

namespace Emr\Request\V20160408;

/**
 * Request of ListClusterTag
 *
 * @method string getResourceOwnerId()
 * @method array getClusterIdLists()
 */
class ListClusterTagRequest extends \RpcAcsRequest
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
            'ListClusterTag',
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
     * @param array $clusterIdLists
     *
     * @return $this
     */
    public function setClusterIdLists(array $clusterIdLists)
    {
        $this->requestParameters['ClusterIdLists'] = $clusterIdLists;
        foreach ($clusterIdLists as $i => $iValue) {
            $this->queryParameters['ClusterIdList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

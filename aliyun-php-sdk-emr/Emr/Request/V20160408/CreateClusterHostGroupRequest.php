<?php

namespace Emr\Request\V20160408;

/**
 * Request of CreateClusterHostGroup
 *
 * @method string getResourceOwnerId()
 * @method string getComment()
 * @method string getClusterId()
 * @method string getHostGroupName()
 * @method string getHostGroupType()
 */
class CreateClusterHostGroupRequest extends \RpcAcsRequest
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
            'CreateClusterHostGroup',
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
     * @param string $comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->requestParameters['Comment'] = $comment;
        $this->queryParameters['Comment'] = $comment;

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
     * @param string $hostGroupName
     *
     * @return $this
     */
    public function setHostGroupName($hostGroupName)
    {
        $this->requestParameters['HostGroupName'] = $hostGroupName;
        $this->queryParameters['HostGroupName'] = $hostGroupName;

        return $this;
    }

    /**
     * @param string $hostGroupType
     *
     * @return $this
     */
    public function setHostGroupType($hostGroupType)
    {
        $this->requestParameters['HostGroupType'] = $hostGroupType;
        $this->queryParameters['HostGroupType'] = $hostGroupType;

        return $this;
    }
}

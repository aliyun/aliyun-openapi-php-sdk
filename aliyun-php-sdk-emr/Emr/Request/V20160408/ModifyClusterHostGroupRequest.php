<?php

namespace Emr\Request\V20160408;

/**
 * Request of ModifyClusterHostGroup
 *
 * @method string getVswitchId()
 * @method string getResourceOwnerId()
 * @method string getHostGroupId()
 * @method string getSecurityGroupId()
 * @method string getComment()
 * @method string getClusterId()
 * @method string getHostGroupName()
 */
class ModifyClusterHostGroupRequest extends \RpcAcsRequest
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
            'ModifyClusterHostGroup',
            'emr'
        );
    }

    /**
     * @param string $vswitchId
     *
     * @return $this
     */
    public function setVswitchId($vswitchId)
    {
        $this->requestParameters['VswitchId'] = $vswitchId;
        $this->queryParameters['VswitchId'] = $vswitchId;

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
     * @param string $hostGroupId
     *
     * @return $this
     */
    public function setHostGroupId($hostGroupId)
    {
        $this->requestParameters['HostGroupId'] = $hostGroupId;
        $this->queryParameters['HostGroupId'] = $hostGroupId;

        return $this;
    }

    /**
     * @param string $securityGroupId
     *
     * @return $this
     */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->requestParameters['SecurityGroupId'] = $securityGroupId;
        $this->queryParameters['SecurityGroupId'] = $securityGroupId;

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
}

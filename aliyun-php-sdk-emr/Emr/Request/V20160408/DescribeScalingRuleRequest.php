<?php

namespace Emr\Request\V20160408;

/**
 * Request of DescribeScalingRule
 *
 * @method string getResourceOwnerId()
 * @method string getHostGroupId()
 * @method string getClusterId()
 * @method string getScalingRuleId()
 */
class DescribeScalingRuleRequest extends \RpcAcsRequest
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
            'DescribeScalingRule',
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
     * @param string $scalingRuleId
     *
     * @return $this
     */
    public function setScalingRuleId($scalingRuleId)
    {
        $this->requestParameters['ScalingRuleId'] = $scalingRuleId;
        $this->queryParameters['ScalingRuleId'] = $scalingRuleId;

        return $this;
    }
}

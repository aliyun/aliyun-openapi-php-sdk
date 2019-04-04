<?php

namespace Ess\Request\V20140828;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DetachVServerGroups
 *
 * @method string getResourceOwnerAccount()
 * @method string getScalingGroupId()
 * @method string getForceDetach()
 * @method string getOwnerId()
 * @method array getVServerGroups()
 */
class DetachVServerGroupsRequest extends \RpcAcsRequest
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
            'Ess',
            '2014-08-28',
            'DetachVServerGroups',
            'ess'
        );
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->requestParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->queryParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $scalingGroupId
     *
     * @return $this
     */
    public function setScalingGroupId($scalingGroupId)
    {
        $this->requestParameters['ScalingGroupId'] = $scalingGroupId;
        $this->queryParameters['ScalingGroupId'] = $scalingGroupId;

        return $this;
    }

    /**
     * @param string $forceDetach
     *
     * @return $this
     */
    public function setForceDetach($forceDetach)
    {
        $this->requestParameters['ForceDetach'] = $forceDetach;
        $this->queryParameters['ForceDetach'] = $forceDetach;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param array $vServerGroup
     *
     * @return $this
     */
    public function setVServerGroups(array $vServerGroup)
    {
        $this->requestParameters['VServerGroups'] = $vServerGroup;
        foreach ($vServerGroup as $depth1 => $depth1Value) {
            $this->queryParameters['VServerGroup.' . ($depth1 + 1) . '.LoadBalancerId'] = $depth1Value['LoadBalancerId'];
            foreach ($depth1Value['VServerGroupAttribute'] as $depth2 => $depth2Value) {
                $this->queryParameters['VServerGroup.' . ($depth1 + 1) . '.VServerGroupAttribute.' . ($depth2 + 1) . '.VServerGroupId'] = $depth2Value['VServerGroupId'];
                $this->queryParameters['VServerGroup.' . ($depth1 + 1) . '.VServerGroupAttribute.' . ($depth2 + 1) . '.Port'] = $depth2Value['Port'];
            }
        }

        return $this;
    }
}

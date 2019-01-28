<?php

namespace Ess\Request\V20140828;

/**
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
     * @param array $vServerGroups
     *
     * @return $this
     */
    public function setVServerGroups(array $vServerGroups)
    {
        $this->requestParameters['VServerGroups'] = $vServerGroups;
        foreach ($vServerGroups as $i => $iValue) {
            $this->queryParameters['VServerGroup.' . ($i + 1) . '.LoadBalancerId'] = $vServerGroups[$i]['LoadBalancerId'];
            foreach ($vServerGroups[$i]['VServerGroupAttributes'] as $j => $jValue) {
                $this->queryParameters['VServerGroup.' . ($i + 1) . '.VServerGroupAttribute.' . ($j + 1)] = $jValue;
            }
        }

        return $this;
    }
}

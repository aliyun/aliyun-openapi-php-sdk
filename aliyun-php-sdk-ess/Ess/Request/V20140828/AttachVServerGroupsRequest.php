<?php

namespace Ess\Request\V20140828;

/**
 * Request of AttachVServerGroups
 *
 * @method string getResourceOwnerAccount()
 * @method string getScalingGroupId()
 * @method string getForceAttach()
 * @method string getOwnerId()
 * @method array getVServerGroups()
 */
class AttachVServerGroupsRequest extends \RpcAcsRequest
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
            'AttachVServerGroups',
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
     * @param string $forceAttach
     *
     * @return $this
     */
    public function setForceAttach($forceAttach)
    {
        $this->requestParameters['ForceAttach'] = $forceAttach;
        $this->queryParameters['ForceAttach'] = $forceAttach;

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

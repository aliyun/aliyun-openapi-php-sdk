<?php

namespace Ess\Request\V20140828;

/**
 * Request of AttachLoadBalancers
 *
 * @method array getLoadBalancers()
 * @method string getResourceOwnerAccount()
 * @method string getScalingGroupId()
 * @method string getForceAttach()
 * @method string getOwnerId()
 */
class AttachLoadBalancersRequest extends \RpcAcsRequest
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
            'AttachLoadBalancers',
            'ess'
        );
    }

    /**
     * @param array $loadBalancers
     *
     * @return $this
     */
    public function setLoadBalancers(array $loadBalancers)
    {
        $this->requestParameters['LoadBalancers'] = $loadBalancers;
        foreach ($loadBalancers as $i => $iValue) {
            $this->queryParameters['LoadBalancer.' . ($i + 1)] = $iValue;
        }

        return $this;
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
}

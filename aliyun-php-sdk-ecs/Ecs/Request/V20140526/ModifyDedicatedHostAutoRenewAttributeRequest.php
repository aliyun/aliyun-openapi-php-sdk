<?php

namespace Ecs\Request\V20140526;

/**
 * Request of ModifyDedicatedHostAutoRenewAttribute
 *
 * @method string getDuration()
 * @method string getDedicatedHostIds()
 * @method string getResourceOwnerId()
 * @method string getPeriodUnit()
 * @method string getAutoRenew()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getRenewalStatus()
 * @method string getOwnerId()
 */
class ModifyDedicatedHostAutoRenewAttributeRequest extends \RpcAcsRequest
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
            'Ecs',
            '2014-05-26',
            'ModifyDedicatedHostAutoRenewAttribute',
            'ecs'
        );
    }

    /**
     * @param string $duration
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->requestParameters['Duration'] = $duration;
        $this->queryParameters['Duration'] = $duration;

        return $this;
    }

    /**
     * @param string $dedicatedHostIds
     *
     * @return $this
     */
    public function setDedicatedHostIds($dedicatedHostIds)
    {
        $this->requestParameters['DedicatedHostIds'] = $dedicatedHostIds;
        $this->queryParameters['DedicatedHostIds'] = $dedicatedHostIds;

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
     * @param string $periodUnit
     *
     * @return $this
     */
    public function setPeriodUnit($periodUnit)
    {
        $this->requestParameters['PeriodUnit'] = $periodUnit;
        $this->queryParameters['PeriodUnit'] = $periodUnit;

        return $this;
    }

    /**
     * @param string $autoRenew
     *
     * @return $this
     */
    public function setAutoRenew($autoRenew)
    {
        $this->requestParameters['AutoRenew'] = $autoRenew;
        $this->queryParameters['AutoRenew'] = $autoRenew;

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
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        $this->requestParameters['OwnerAccount'] = $ownerAccount;
        $this->queryParameters['OwnerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * @param string $renewalStatus
     *
     * @return $this
     */
    public function setRenewalStatus($renewalStatus)
    {
        $this->requestParameters['RenewalStatus'] = $renewalStatus;
        $this->queryParameters['RenewalStatus'] = $renewalStatus;

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

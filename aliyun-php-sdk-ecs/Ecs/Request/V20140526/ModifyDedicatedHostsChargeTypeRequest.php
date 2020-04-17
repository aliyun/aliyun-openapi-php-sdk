<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyDedicatedHostsChargeType
 *
 * @method string getDedicatedHostIds()
 * @method string getResourceOwnerId()
 * @method string getClientToken()
 * @method string getDedicatedHostChargeType()
 * @method string getPeriod()
 * @method string getDryRun()
 * @method string getAutoPay()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getDetailFee()
 * @method string getPeriodUnit()
 */
class ModifyDedicatedHostsChargeTypeRequest extends \RpcAcsRequest
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
            'ModifyDedicatedHostsChargeType',
            'ecs'
        );
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
     * @param string $clientToken
     *
     * @return $this
     */
    public function setClientToken($clientToken)
    {
        $this->requestParameters['ClientToken'] = $clientToken;
        $this->queryParameters['ClientToken'] = $clientToken;

        return $this;
    }

    /**
     * @param string $dedicatedHostChargeType
     *
     * @return $this
     */
    public function setDedicatedHostChargeType($dedicatedHostChargeType)
    {
        $this->requestParameters['DedicatedHostChargeType'] = $dedicatedHostChargeType;
        $this->queryParameters['DedicatedHostChargeType'] = $dedicatedHostChargeType;

        return $this;
    }

    /**
     * @param string $period
     *
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->requestParameters['Period'] = $period;
        $this->queryParameters['Period'] = $period;

        return $this;
    }

    /**
     * @param string $dryRun
     *
     * @return $this
     */
    public function setDryRun($dryRun)
    {
        $this->requestParameters['DryRun'] = $dryRun;
        $this->queryParameters['DryRun'] = $dryRun;

        return $this;
    }

    /**
     * @param string $autoPay
     *
     * @return $this
     */
    public function setAutoPay($autoPay)
    {
        $this->requestParameters['AutoPay'] = $autoPay;
        $this->queryParameters['AutoPay'] = $autoPay;

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
     * @param string $detailFee
     *
     * @return $this
     */
    public function setDetailFee($detailFee)
    {
        $this->requestParameters['DetailFee'] = $detailFee;
        $this->queryParameters['DetailFee'] = $detailFee;

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
}

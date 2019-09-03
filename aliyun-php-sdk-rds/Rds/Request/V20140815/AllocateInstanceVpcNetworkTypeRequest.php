<?php

namespace Rds\Request\V20140815;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of AllocateInstanceVpcNetworkType
 *
 * @method string getResourceOwnerId()
 * @method string getTargetVpcId()
 * @method string getTargetZoneId()
 * @method string getDBInstanceId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getTargetVSwitchId()
 * @method string getOwnerId()
 * @method string getTargetRegionId()
 */
class AllocateInstanceVpcNetworkTypeRequest extends \RpcAcsRequest
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
            'Rds',
            '2014-08-15',
            'AllocateInstanceVpcNetworkType',
            'rds'
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
     * @param string $targetVpcId
     *
     * @return $this
     */
    public function setTargetVpcId($targetVpcId)
    {
        $this->requestParameters['TargetVpcId'] = $targetVpcId;
        $this->queryParameters['TargetVpcId'] = $targetVpcId;

        return $this;
    }

    /**
     * @param string $targetZoneId
     *
     * @return $this
     */
    public function setTargetZoneId($targetZoneId)
    {
        $this->requestParameters['TargetZoneId'] = $targetZoneId;
        $this->queryParameters['TargetZoneId'] = $targetZoneId;

        return $this;
    }

    /**
     * @param string $dBInstanceId
     *
     * @return $this
     */
    public function setDBInstanceId($dBInstanceId)
    {
        $this->requestParameters['DBInstanceId'] = $dBInstanceId;
        $this->queryParameters['DBInstanceId'] = $dBInstanceId;

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
     * @param string $targetVSwitchId
     *
     * @return $this
     */
    public function setTargetVSwitchId($targetVSwitchId)
    {
        $this->requestParameters['TargetVSwitchId'] = $targetVSwitchId;
        $this->queryParameters['TargetVSwitchId'] = $targetVSwitchId;

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
     * @param string $targetRegionId
     *
     * @return $this
     */
    public function setTargetRegionId($targetRegionId)
    {
        $this->requestParameters['TargetRegionId'] = $targetRegionId;
        $this->queryParameters['TargetRegionId'] = $targetRegionId;

        return $this;
    }
}

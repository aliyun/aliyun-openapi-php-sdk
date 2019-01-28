<?php

namespace Rds\Request\V20140815;

/**
 * Request of MigrateToOtherRegion
 *
 * @method string getResourceOwnerId()
 * @method string getTargetZoneId()
 * @method string getResourceOwnerAccount()
 * @method string getEffectiveTime()
 * @method string getOwnerAccount()
 * @method string getDBInstanceId()
 * @method string getTargetRegionId()
 * @method string getSwitchTime()
 * @method string getOwnerId()
 */
class MigrateToOtherRegionRequest extends \RpcAcsRequest
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
            'MigrateToOtherRegion',
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
     * @param string $effectiveTime
     *
     * @return $this
     */
    public function setEffectiveTime($effectiveTime)
    {
        $this->requestParameters['EffectiveTime'] = $effectiveTime;
        $this->queryParameters['EffectiveTime'] = $effectiveTime;

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

    /**
     * @param string $switchTime
     *
     * @return $this
     */
    public function setSwitchTime($switchTime)
    {
        $this->requestParameters['SwitchTime'] = $switchTime;
        $this->queryParameters['SwitchTime'] = $switchTime;

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

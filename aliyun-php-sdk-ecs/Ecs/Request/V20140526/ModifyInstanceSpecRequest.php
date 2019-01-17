<?php

namespace Ecs\Request\V20140526;

/**
 * Request of ModifyInstanceSpec
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getClientToken()
 * @method string getAllowMigrateAcrossZone()
 * @method string getOwnerAccount()
 * @method string getInternetMaxBandwidthOut()
 * @method string getOwnerId()
 * @method string getTemporaryInternetMaxBandwidthOut()
 * @method string getSystemDiskCategory()
 * @method string getTemporaryStartTime()
 * @method string getAsync()
 * @method string getInstanceId()
 * @method string getInstanceType()
 * @method string getTemporaryEndTime()
 * @method string getInternetMaxBandwidthIn()
 */
class ModifyInstanceSpecRequest extends \RpcAcsRequest
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
            'ModifyInstanceSpec',
            'ecs'
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
     * @param string $allowMigrateAcrossZone
     *
     * @return $this
     */
    public function setAllowMigrateAcrossZone($allowMigrateAcrossZone)
    {
        $this->requestParameters['AllowMigrateAcrossZone'] = $allowMigrateAcrossZone;
        $this->queryParameters['AllowMigrateAcrossZone'] = $allowMigrateAcrossZone;

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
     * @param string $internetMaxBandwidthOut
     *
     * @return $this
     */
    public function setInternetMaxBandwidthOut($internetMaxBandwidthOut)
    {
        $this->requestParameters['InternetMaxBandwidthOut'] = $internetMaxBandwidthOut;
        $this->queryParameters['InternetMaxBandwidthOut'] = $internetMaxBandwidthOut;

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
     * @param string $temporaryInternetMaxBandwidthOut
     *
     * @return $this
     */
    public function setTemporaryInternetMaxBandwidthOut($temporaryInternetMaxBandwidthOut)
    {
        $this->requestParameters['TemporaryInternetMaxBandwidthOut'] = $temporaryInternetMaxBandwidthOut;
        $this->queryParameters['Temporary.InternetMaxBandwidthOut'] = $temporaryInternetMaxBandwidthOut;

        return $this;
    }

    /**
     * @param string $systemDiskCategory
     *
     * @return $this
     */
    public function setSystemDiskCategory($systemDiskCategory)
    {
        $this->requestParameters['SystemDiskCategory'] = $systemDiskCategory;
        $this->queryParameters['SystemDisk.Category'] = $systemDiskCategory;

        return $this;
    }

    /**
     * @param string $temporaryStartTime
     *
     * @return $this
     */
    public function setTemporaryStartTime($temporaryStartTime)
    {
        $this->requestParameters['TemporaryStartTime'] = $temporaryStartTime;
        $this->queryParameters['Temporary.StartTime'] = $temporaryStartTime;

        return $this;
    }

    /**
     * @param string $async
     *
     * @return $this
     */
    public function setAsync($async)
    {
        $this->requestParameters['Async'] = $async;
        $this->queryParameters['Async'] = $async;

        return $this;
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->requestParameters['InstanceId'] = $instanceId;
        $this->queryParameters['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param string $instanceType
     *
     * @return $this
     */
    public function setInstanceType($instanceType)
    {
        $this->requestParameters['InstanceType'] = $instanceType;
        $this->queryParameters['InstanceType'] = $instanceType;

        return $this;
    }

    /**
     * @param string $temporaryEndTime
     *
     * @return $this
     */
    public function setTemporaryEndTime($temporaryEndTime)
    {
        $this->requestParameters['TemporaryEndTime'] = $temporaryEndTime;
        $this->queryParameters['Temporary.EndTime'] = $temporaryEndTime;

        return $this;
    }

    /**
     * @param string $internetMaxBandwidthIn
     *
     * @return $this
     */
    public function setInternetMaxBandwidthIn($internetMaxBandwidthIn)
    {
        $this->requestParameters['InternetMaxBandwidthIn'] = $internetMaxBandwidthIn;
        $this->queryParameters['InternetMaxBandwidthIn'] = $internetMaxBandwidthIn;

        return $this;
    }
}

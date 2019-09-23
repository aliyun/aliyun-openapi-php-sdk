<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyAutoSnapshotPolicy
 *
 * @method string getDataDiskPolicyEnabled()
 * @method string getResourceOwnerId()
 * @method string getDataDiskPolicyRetentionDays()
 * @method string getSystemDiskPolicyRetentionLastWeek()
 * @method string getSystemDiskPolicyRetentionDays()
 * @method string getDataDiskPolicyTimePeriod()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getSystemDiskPolicyTimePeriod()
 * @method string getOwnerId()
 * @method string getDataDiskPolicyRetentionLastWeek()
 * @method string getSystemDiskPolicyEnabled()
 */
class ModifyAutoSnapshotPolicyRequest extends \RpcAcsRequest
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
            'ModifyAutoSnapshotPolicy',
            'ecs'
        );
    }

    /**
     * @param string $dataDiskPolicyEnabled
     *
     * @return $this
     */
    public function setDataDiskPolicyEnabled($dataDiskPolicyEnabled)
    {
        $this->requestParameters['DataDiskPolicyEnabled'] = $dataDiskPolicyEnabled;
        $this->queryParameters['DataDiskPolicyEnabled'] = $dataDiskPolicyEnabled;

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
     * @param string $dataDiskPolicyRetentionDays
     *
     * @return $this
     */
    public function setDataDiskPolicyRetentionDays($dataDiskPolicyRetentionDays)
    {
        $this->requestParameters['DataDiskPolicyRetentionDays'] = $dataDiskPolicyRetentionDays;
        $this->queryParameters['DataDiskPolicyRetentionDays'] = $dataDiskPolicyRetentionDays;

        return $this;
    }

    /**
     * @param string $systemDiskPolicyRetentionLastWeek
     *
     * @return $this
     */
    public function setSystemDiskPolicyRetentionLastWeek($systemDiskPolicyRetentionLastWeek)
    {
        $this->requestParameters['SystemDiskPolicyRetentionLastWeek'] = $systemDiskPolicyRetentionLastWeek;
        $this->queryParameters['SystemDiskPolicyRetentionLastWeek'] = $systemDiskPolicyRetentionLastWeek;

        return $this;
    }

    /**
     * @param string $systemDiskPolicyRetentionDays
     *
     * @return $this
     */
    public function setSystemDiskPolicyRetentionDays($systemDiskPolicyRetentionDays)
    {
        $this->requestParameters['SystemDiskPolicyRetentionDays'] = $systemDiskPolicyRetentionDays;
        $this->queryParameters['SystemDiskPolicyRetentionDays'] = $systemDiskPolicyRetentionDays;

        return $this;
    }

    /**
     * @param string $dataDiskPolicyTimePeriod
     *
     * @return $this
     */
    public function setDataDiskPolicyTimePeriod($dataDiskPolicyTimePeriod)
    {
        $this->requestParameters['DataDiskPolicyTimePeriod'] = $dataDiskPolicyTimePeriod;
        $this->queryParameters['DataDiskPolicyTimePeriod'] = $dataDiskPolicyTimePeriod;

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
     * @param string $systemDiskPolicyTimePeriod
     *
     * @return $this
     */
    public function setSystemDiskPolicyTimePeriod($systemDiskPolicyTimePeriod)
    {
        $this->requestParameters['SystemDiskPolicyTimePeriod'] = $systemDiskPolicyTimePeriod;
        $this->queryParameters['SystemDiskPolicyTimePeriod'] = $systemDiskPolicyTimePeriod;

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
     * @param string $dataDiskPolicyRetentionLastWeek
     *
     * @return $this
     */
    public function setDataDiskPolicyRetentionLastWeek($dataDiskPolicyRetentionLastWeek)
    {
        $this->requestParameters['DataDiskPolicyRetentionLastWeek'] = $dataDiskPolicyRetentionLastWeek;
        $this->queryParameters['DataDiskPolicyRetentionLastWeek'] = $dataDiskPolicyRetentionLastWeek;

        return $this;
    }

    /**
     * @param string $systemDiskPolicyEnabled
     *
     * @return $this
     */
    public function setSystemDiskPolicyEnabled($systemDiskPolicyEnabled)
    {
        $this->requestParameters['SystemDiskPolicyEnabled'] = $systemDiskPolicyEnabled;
        $this->queryParameters['SystemDiskPolicyEnabled'] = $systemDiskPolicyEnabled;

        return $this;
    }
}

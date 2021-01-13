<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateActivation
 *
 * @method string getResourceOwnerId()
 * @method string getDescription()
 * @method string getInstanceCount()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getInstanceName()
 * @method string getTimeToLiveInHours()
 * @method string getIpAddressRange()
 */
class CreateActivationRequest extends \RpcAcsRequest
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
            'CreateActivation',
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
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->requestParameters['Description'] = $description;
        $this->queryParameters['Description'] = $description;

        return $this;
    }

    /**
     * @param string $instanceCount
     *
     * @return $this
     */
    public function setInstanceCount($instanceCount)
    {
        $this->requestParameters['InstanceCount'] = $instanceCount;
        $this->queryParameters['InstanceCount'] = $instanceCount;

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
     * @param string $instanceName
     *
     * @return $this
     */
    public function setInstanceName($instanceName)
    {
        $this->requestParameters['InstanceName'] = $instanceName;
        $this->queryParameters['InstanceName'] = $instanceName;

        return $this;
    }

    /**
     * @param string $timeToLiveInHours
     *
     * @return $this
     */
    public function setTimeToLiveInHours($timeToLiveInHours)
    {
        $this->requestParameters['TimeToLiveInHours'] = $timeToLiveInHours;
        $this->queryParameters['TimeToLiveInHours'] = $timeToLiveInHours;

        return $this;
    }

    /**
     * @param string $ipAddressRange
     *
     * @return $this
     */
    public function setIpAddressRange($ipAddressRange)
    {
        $this->requestParameters['IpAddressRange'] = $ipAddressRange;
        $this->queryParameters['IpAddressRange'] = $ipAddressRange;

        return $this;
    }
}

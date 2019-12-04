<?php

namespace Rds\Request\V20140815;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of EvaluateDedicatedHostInstanceResource
 *
 * @method string getResourceOwnerId()
 * @method string getEngineVersion()
 * @method string getEngine()
 * @method string getDedicatedHostGroupId()
 * @method string getInstanceClassNames()
 * @method string getDiskSize()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerId()
 * @method string getDiskType()
 */
class EvaluateDedicatedHostInstanceResourceRequest extends \RpcAcsRequest
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
            'EvaluateDedicatedHostInstanceResource',
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
     * @param string $engineVersion
     *
     * @return $this
     */
    public function setEngineVersion($engineVersion)
    {
        $this->requestParameters['EngineVersion'] = $engineVersion;
        $this->queryParameters['EngineVersion'] = $engineVersion;

        return $this;
    }

    /**
     * @param string $engine
     *
     * @return $this
     */
    public function setEngine($engine)
    {
        $this->requestParameters['Engine'] = $engine;
        $this->queryParameters['Engine'] = $engine;

        return $this;
    }

    /**
     * @param string $dedicatedHostGroupId
     *
     * @return $this
     */
    public function setDedicatedHostGroupId($dedicatedHostGroupId)
    {
        $this->requestParameters['DedicatedHostGroupId'] = $dedicatedHostGroupId;
        $this->queryParameters['DedicatedHostGroupId'] = $dedicatedHostGroupId;

        return $this;
    }

    /**
     * @param string $instanceClassNames
     *
     * @return $this
     */
    public function setInstanceClassNames($instanceClassNames)
    {
        $this->requestParameters['InstanceClassNames'] = $instanceClassNames;
        $this->queryParameters['InstanceClassNames'] = $instanceClassNames;

        return $this;
    }

    /**
     * @param string $diskSize
     *
     * @return $this
     */
    public function setDiskSize($diskSize)
    {
        $this->requestParameters['DiskSize'] = $diskSize;
        $this->queryParameters['DiskSize'] = $diskSize;

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
     * @param string $diskType
     *
     * @return $this
     */
    public function setDiskType($diskType)
    {
        $this->requestParameters['DiskType'] = $diskType;
        $this->queryParameters['DiskType'] = $diskType;

        return $this;
    }
}

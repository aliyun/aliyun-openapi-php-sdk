<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateSnapshotGroup
 *
 * @method string getResourceOwnerId()
 * @method array getExcludeDiskIds()
 * @method string getInstantAccess()
 * @method string getDescription()
 * @method string getInstantAccessRetentionDays()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getInstanceId()
 * @method string getName()
 */
class CreateSnapshotGroupRequest extends \RpcAcsRequest
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
            'CreateSnapshotGroup',
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
     * @param array $excludeDiskId
     *
     * @return $this
     */
	public function setExcludeDiskIds(array $excludeDiskId)
	{
	    $this->requestParameters['ExcludeDiskIds'] = $excludeDiskId;
		foreach ($excludeDiskId as $i => $iValue) {
			$this->queryParameters['ExcludeDiskId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $instantAccess
     *
     * @return $this
     */
    public function setInstantAccess($instantAccess)
    {
        $this->requestParameters['InstantAccess'] = $instantAccess;
        $this->queryParameters['InstantAccess'] = $instantAccess;

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
     * @param string $instantAccessRetentionDays
     *
     * @return $this
     */
    public function setInstantAccessRetentionDays($instantAccessRetentionDays)
    {
        $this->requestParameters['InstantAccessRetentionDays'] = $instantAccessRetentionDays;
        $this->queryParameters['InstantAccessRetentionDays'] = $instantAccessRetentionDays;

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
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->requestParameters['Name'] = $name;
        $this->queryParameters['Name'] = $name;

        return $this;
    }
}

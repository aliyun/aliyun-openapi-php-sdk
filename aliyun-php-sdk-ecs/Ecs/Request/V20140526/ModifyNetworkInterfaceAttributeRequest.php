<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyNetworkInterfaceAttribute
 *
 * @method string getResourceOwnerId()
 * @method array getSecurityGroupIds()
 * @method string getDescription()
 * @method string getNetworkInterfaceName()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getNetworkInterfaceId()
 */
class ModifyNetworkInterfaceAttributeRequest extends \RpcAcsRequest
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
            'ModifyNetworkInterfaceAttribute',
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
     * @param array $securityGroupId
     *
     * @return $this
     */
	public function setSecurityGroupIds(array $securityGroupId)
	{
	    $this->requestParameters['SecurityGroupIds'] = $securityGroupId;
		foreach ($securityGroupId as $i => $iValue) {
			$this->queryParameters['SecurityGroupId.' . ($i + 1)] = $iValue;
		}

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
     * @param string $networkInterfaceName
     *
     * @return $this
     */
    public function setNetworkInterfaceName($networkInterfaceName)
    {
        $this->requestParameters['NetworkInterfaceName'] = $networkInterfaceName;
        $this->queryParameters['NetworkInterfaceName'] = $networkInterfaceName;

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
     * @param string $networkInterfaceId
     *
     * @return $this
     */
    public function setNetworkInterfaceId($networkInterfaceId)
    {
        $this->requestParameters['NetworkInterfaceId'] = $networkInterfaceId;
        $this->queryParameters['NetworkInterfaceId'] = $networkInterfaceId;

        return $this;
    }
}

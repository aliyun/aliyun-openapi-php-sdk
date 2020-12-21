<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateNetworkInterface
 *
 * @method string getQueueNumber()
 * @method string getResourceOwnerId()
 * @method string getClientToken()
 * @method string getSecurityGroupId()
 * @method string getDescription()
 * @method string getSecondaryPrivateIpAddressCount()
 * @method string getBusinessType()
 * @method string getResourceGroupId()
 * @method string getInstanceType()
 * @method array getTags()
 * @method string getNetworkInterfaceName()
 * @method string getVisible()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method array getSecurityGroupIdss()
 * @method string getVSwitchId()
 * @method array getPrivateIpAddresss()
 * @method string getPrimaryIpAddress()
 */
class CreateNetworkInterfaceRequest extends \RpcAcsRequest
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
            'CreateNetworkInterface',
            'ecs'
        );
    }

    /**
     * @param string $queueNumber
     *
     * @return $this
     */
    public function setQueueNumber($queueNumber)
    {
        $this->requestParameters['QueueNumber'] = $queueNumber;
        $this->queryParameters['QueueNumber'] = $queueNumber;

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
     * @param string $securityGroupId
     *
     * @return $this
     */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->requestParameters['SecurityGroupId'] = $securityGroupId;
        $this->queryParameters['SecurityGroupId'] = $securityGroupId;

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
     * @param string $secondaryPrivateIpAddressCount
     *
     * @return $this
     */
    public function setSecondaryPrivateIpAddressCount($secondaryPrivateIpAddressCount)
    {
        $this->requestParameters['SecondaryPrivateIpAddressCount'] = $secondaryPrivateIpAddressCount;
        $this->queryParameters['SecondaryPrivateIpAddressCount'] = $secondaryPrivateIpAddressCount;

        return $this;
    }

    /**
     * @param string $businessType
     *
     * @return $this
     */
    public function setBusinessType($businessType)
    {
        $this->requestParameters['BusinessType'] = $businessType;
        $this->queryParameters['BusinessType'] = $businessType;

        return $this;
    }

    /**
     * @param string $resourceGroupId
     *
     * @return $this
     */
    public function setResourceGroupId($resourceGroupId)
    {
        $this->requestParameters['ResourceGroupId'] = $resourceGroupId;
        $this->queryParameters['ResourceGroupId'] = $resourceGroupId;

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
     * @param array $tag
     *
     * @return $this
     */
	public function setTags(array $tag)
	{
	    $this->requestParameters['Tags'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			$this->queryParameters['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			$this->queryParameters['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
		}

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
     * @param string $visible
     *
     * @return $this
     */
    public function setVisible($visible)
    {
        $this->requestParameters['Visible'] = $visible;
        $this->queryParameters['Visible'] = $visible;

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
     * @param array $securityGroupIds
     *
     * @return $this
     */
	public function setSecurityGroupIdss(array $securityGroupIds)
	{
	    $this->requestParameters['SecurityGroupIdss'] = $securityGroupIds;
		foreach ($securityGroupIds as $i => $iValue) {
			$this->queryParameters['SecurityGroupIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $vSwitchId
     *
     * @return $this
     */
    public function setVSwitchId($vSwitchId)
    {
        $this->requestParameters['VSwitchId'] = $vSwitchId;
        $this->queryParameters['VSwitchId'] = $vSwitchId;

        return $this;
    }

    /**
     * @param array $privateIpAddress
     *
     * @return $this
     */
	public function setPrivateIpAddresss(array $privateIpAddress)
	{
	    $this->requestParameters['PrivateIpAddresss'] = $privateIpAddress;
		foreach ($privateIpAddress as $i => $iValue) {
			$this->queryParameters['PrivateIpAddress.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $primaryIpAddress
     *
     * @return $this
     */
    public function setPrimaryIpAddress($primaryIpAddress)
    {
        $this->requestParameters['PrimaryIpAddress'] = $primaryIpAddress;
        $this->queryParameters['PrimaryIpAddress'] = $primaryIpAddress;

        return $this;
    }
}

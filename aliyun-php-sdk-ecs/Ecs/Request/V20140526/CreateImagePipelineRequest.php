<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateImagePipeline
 *
 * @method string getBaseImageType()
 * @method string getResourceOwnerId()
 * @method string getClientToken()
 * @method array getToRegionIds()
 * @method string getInternetMaxBandwidthOut()
 * @method string getDescription()
 * @method string getResourceGroupId()
 * @method string getImageName()
 * @method string getSystemDiskSize()
 * @method string getInstanceType()
 * @method array getTags()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getBaseImage()
 * @method string getVSwitchId()
 * @method array getAddAccounts()
 * @method string getDeleteInstanceOnFailure()
 * @method string getName()
 * @method string getBuildContent()
 */
class CreateImagePipelineRequest extends \RpcAcsRequest
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
            'CreateImagePipeline',
            'ecs'
        );
    }

    /**
     * @param string $baseImageType
     *
     * @return $this
     */
    public function setBaseImageType($baseImageType)
    {
        $this->requestParameters['BaseImageType'] = $baseImageType;
        $this->queryParameters['BaseImageType'] = $baseImageType;

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
     * @param array $toRegionId
     *
     * @return $this
     */
	public function setToRegionIds(array $toRegionId)
	{
	    $this->requestParameters['ToRegionIds'] = $toRegionId;
		foreach ($toRegionId as $i => $iValue) {
			$this->queryParameters['ToRegionId.' . ($i + 1)] = $iValue;
		}

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
     * @param string $imageName
     *
     * @return $this
     */
    public function setImageName($imageName)
    {
        $this->requestParameters['ImageName'] = $imageName;
        $this->queryParameters['ImageName'] = $imageName;

        return $this;
    }

    /**
     * @param string $systemDiskSize
     *
     * @return $this
     */
    public function setSystemDiskSize($systemDiskSize)
    {
        $this->requestParameters['SystemDiskSize'] = $systemDiskSize;
        $this->queryParameters['SystemDiskSize'] = $systemDiskSize;

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
     * @param string $baseImage
     *
     * @return $this
     */
    public function setBaseImage($baseImage)
    {
        $this->requestParameters['BaseImage'] = $baseImage;
        $this->queryParameters['BaseImage'] = $baseImage;

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
     * @param array $addAccount
     *
     * @return $this
     */
	public function setAddAccounts(array $addAccount)
	{
	    $this->requestParameters['AddAccounts'] = $addAccount;
		foreach ($addAccount as $i => $iValue) {
			$this->queryParameters['AddAccount.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $deleteInstanceOnFailure
     *
     * @return $this
     */
    public function setDeleteInstanceOnFailure($deleteInstanceOnFailure)
    {
        $this->requestParameters['DeleteInstanceOnFailure'] = $deleteInstanceOnFailure;
        $this->queryParameters['DeleteInstanceOnFailure'] = $deleteInstanceOnFailure;

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

    /**
     * @param string $buildContent
     *
     * @return $this
     */
    public function setBuildContent($buildContent)
    {
        $this->requestParameters['BuildContent'] = $buildContent;
        $this->queryParameters['BuildContent'] = $buildContent;

        return $this;
    }
}

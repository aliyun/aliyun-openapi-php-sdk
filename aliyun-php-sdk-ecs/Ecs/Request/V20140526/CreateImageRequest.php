<?php

namespace Ecs\Request\V20140526;

/**
 * Request of CreateImage
 *
 * @method array getDiskDeviceMappings()
 * @method string getResourceOwnerId()
 * @method string getSnapshotId()
 * @method string getResourceOwnerAccount()
 * @method string getClientToken()
 * @method string getOwnerAccount()
 * @method string getDescription()
 * @method string getOwnerId()
 * @method string getPlatform()
 * @method string getResourceGroupId()
 * @method string getInstanceId()
 * @method string getImageName()
 * @method string getImageVersion()
 * @method array getTags()
 * @method string getArchitecture()
 */
class CreateImageRequest extends \RpcAcsRequest
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
            'CreateImage',
            'ecs'
        );
    }

    /**
     * @param array $diskDeviceMappings
     *
     * @return $this
     */
    public function setDiskDeviceMappings(array $diskDeviceMappings)
    {
        $this->requestParameters['DiskDeviceMappings'] = $diskDeviceMappings;
        foreach ($diskDeviceMappings as $i => $iValue) {
            $this->queryParameters['DiskDeviceMapping.' . ($i + 1) . '.SnapshotId'] = $diskDeviceMappings[$i]['SnapshotId'];
            $this->queryParameters['DiskDeviceMapping.' . ($i + 1) . '.Size'] = $diskDeviceMappings[$i]['Size'];
            $this->queryParameters['DiskDeviceMapping.' . ($i + 1) . '.DiskType'] = $diskDeviceMappings[$i]['DiskType'];
            $this->queryParameters['DiskDeviceMapping.' . ($i + 1) . '.Device'] = $diskDeviceMappings[$i]['Device'];
        }

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
     * @param string $snapshotId
     *
     * @return $this
     */
    public function setSnapshotId($snapshotId)
    {
        $this->requestParameters['SnapshotId'] = $snapshotId;
        $this->queryParameters['SnapshotId'] = $snapshotId;

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
     * @param string $platform
     *
     * @return $this
     */
    public function setPlatform($platform)
    {
        $this->requestParameters['Platform'] = $platform;
        $this->queryParameters['Platform'] = $platform;

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
     * @param string $imageVersion
     *
     * @return $this
     */
    public function setImageVersion($imageVersion)
    {
        $this->requestParameters['ImageVersion'] = $imageVersion;
        $this->queryParameters['ImageVersion'] = $imageVersion;

        return $this;
    }

    /**
     * @param array $tags
     *
     * @return $this
     */
    public function setTags(array $tags)
    {
        $this->requestParameters['Tags'] = $tags;
        foreach ($tags as $i => $iValue) {
            $this->queryParameters['Tag.' . ($i + 1) . '.Value'] = $tags[$i]['Value'];
            $this->queryParameters['Tag.' . ($i + 1) . '.Key'] = $tags[$i]['Key'];
        }

        return $this;
    }

    /**
     * @param string $architecture
     *
     * @return $this
     */
    public function setArchitecture($architecture)
    {
        $this->requestParameters['Architecture'] = $architecture;
        $this->queryParameters['Architecture'] = $architecture;

        return $this;
    }
}

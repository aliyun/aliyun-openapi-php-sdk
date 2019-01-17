<?php

namespace Ecs\Request\V20140526;

/**
 * Request of ImportImage
 *
 * @method array getDiskDeviceMappings()
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getImageName()
 * @method string getRoleName()
 * @method string getDescription()
 * @method string getOSType()
 * @method string getOwnerId()
 * @method string getPlatform()
 * @method string getArchitecture()
 */
class ImportImageRequest extends \RpcAcsRequest
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
            'ImportImage',
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
            $this->queryParameters['DiskDeviceMapping.' . ($i + 1) . '.OSSBucket'] = $diskDeviceMappings[$i]['OSSBucket'];
            $this->queryParameters['DiskDeviceMapping.' . ($i + 1) . '.DiskImSize'] = $diskDeviceMappings[$i]['DiskImSize'];
            $this->queryParameters['DiskDeviceMapping.' . ($i + 1) . '.Format'] = $diskDeviceMappings[$i]['Format'];
            $this->queryParameters['DiskDeviceMapping.' . ($i + 1) . '.Device'] = $diskDeviceMappings[$i]['Device'];
            $this->queryParameters['DiskDeviceMapping.' . ($i + 1) . '.OSSObject'] = $diskDeviceMappings[$i]['OSSObject'];
            $this->queryParameters['DiskDeviceMapping.' . ($i + 1) . '.DiskImageSize'] = $diskDeviceMappings[$i]['DiskImageSize'];
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
     * @param string $roleName
     *
     * @return $this
     */
    public function setRoleName($roleName)
    {
        $this->requestParameters['RoleName'] = $roleName;
        $this->queryParameters['RoleName'] = $roleName;

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
     * @param string $oSType
     *
     * @return $this
     */
    public function setOSType($oSType)
    {
        $this->requestParameters['OSType'] = $oSType;
        $this->queryParameters['OSType'] = $oSType;

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

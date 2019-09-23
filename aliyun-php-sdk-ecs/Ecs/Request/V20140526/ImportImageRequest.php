<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ImportImage
 *
 * @method array getDiskDeviceMappings()
 * @method string getResourceOwnerId()
 * @method string getDescription()
 * @method string getPlatform()
 * @method string getImageName()
 * @method string getArchitecture()
 * @method string getLicenseType()
 * @method string getResourceOwnerAccount()
 * @method string getRoleName()
 * @method string getOSType()
 * @method string getOwnerId()
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
     * @param array $diskDeviceMapping
     *
     * @return $this
     */
	public function setDiskDeviceMappings(array $diskDeviceMapping)
	{
	    $this->requestParameters['DiskDeviceMappings'] = $diskDeviceMapping;
		foreach ($diskDeviceMapping as $depth1 => $depth1Value) {
			$this->queryParameters['DiskDeviceMapping.' . ($depth1 + 1) . '.OSSBucket'] = $depth1Value['OSSBucket'];
			$this->queryParameters['DiskDeviceMapping.' . ($depth1 + 1) . '.DiskImSize'] = $depth1Value['DiskImSize'];
			$this->queryParameters['DiskDeviceMapping.' . ($depth1 + 1) . '.Format'] = $depth1Value['Format'];
			$this->queryParameters['DiskDeviceMapping.' . ($depth1 + 1) . '.Device'] = $depth1Value['Device'];
			$this->queryParameters['DiskDeviceMapping.' . ($depth1 + 1) . '.OSSObject'] = $depth1Value['OSSObject'];
			$this->queryParameters['DiskDeviceMapping.' . ($depth1 + 1) . '.DiskImageSize'] = $depth1Value['DiskImageSize'];
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

    /**
     * @param string $licenseType
     *
     * @return $this
     */
    public function setLicenseType($licenseType)
    {
        $this->requestParameters['LicenseType'] = $licenseType;
        $this->queryParameters['LicenseType'] = $licenseType;

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
}

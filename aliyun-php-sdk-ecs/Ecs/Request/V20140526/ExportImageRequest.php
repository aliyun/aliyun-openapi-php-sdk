<?php

namespace Ecs\Request\V20140526;

/**
 * Request of ExportImage
 *
 * @method string getResourceOwnerId()
 * @method string getImageId()
 * @method string getOSSBucket()
 * @method string getResourceOwnerAccount()
 * @method string getOSSPrefix()
 * @method string getRoleName()
 * @method string getOwnerId()
 * @method string getImageFormat()
 */
class ExportImageRequest extends \RpcAcsRequest
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
            'ExportImage',
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
     * @param string $imageId
     *
     * @return $this
     */
    public function setImageId($imageId)
    {
        $this->requestParameters['ImageId'] = $imageId;
        $this->queryParameters['ImageId'] = $imageId;

        return $this;
    }

    /**
     * @param string $oSSBucket
     *
     * @return $this
     */
    public function setOSSBucket($oSSBucket)
    {
        $this->requestParameters['OSSBucket'] = $oSSBucket;
        $this->queryParameters['OSSBucket'] = $oSSBucket;

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
     * @param string $oSSPrefix
     *
     * @return $this
     */
    public function setOSSPrefix($oSSPrefix)
    {
        $this->requestParameters['OSSPrefix'] = $oSSPrefix;
        $this->queryParameters['OSSPrefix'] = $oSSPrefix;

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
     * @param string $imageFormat
     *
     * @return $this
     */
    public function setImageFormat($imageFormat)
    {
        $this->requestParameters['ImageFormat'] = $imageFormat;
        $this->queryParameters['ImageFormat'] = $imageFormat;

        return $this;
    }
}

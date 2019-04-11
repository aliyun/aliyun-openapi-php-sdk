<?php

namespace vod\Request\V20170321;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateWatermark
 *
 * @method string getWatermarkId()
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getName()
 * @method string getOwnerId()
 * @method string getWatermarkConfig()
 */
class UpdateWatermarkRequest extends \RpcAcsRequest
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
            'vod',
            '2017-03-21',
            'UpdateWatermark',
            'vod'
        );
    }

    /**
     * @param string $watermarkId
     *
     * @return $this
     */
    public function setWatermarkId($watermarkId)
    {
        $this->requestParameters['WatermarkId'] = $watermarkId;
        $this->queryParameters['WatermarkId'] = $watermarkId;

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
     * @param string $watermarkConfig
     *
     * @return $this
     */
    public function setWatermarkConfig($watermarkConfig)
    {
        $this->requestParameters['WatermarkConfig'] = $watermarkConfig;
        $this->queryParameters['WatermarkConfig'] = $watermarkConfig;

        return $this;
    }
}

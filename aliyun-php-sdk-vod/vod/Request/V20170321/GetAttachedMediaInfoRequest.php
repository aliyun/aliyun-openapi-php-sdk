<?php

namespace vod\Request\V20170321;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetAttachedMediaInfo
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOutputType()
 * @method string getMediaIds()
 * @method string getResourceRealOwnerId()
 * @method string getOwnerId()
 * @method string getAuthTimeout()
 */
class GetAttachedMediaInfoRequest extends \RpcAcsRequest
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
            'GetAttachedMediaInfo',
            'vod'
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
     * @param string $outputType
     *
     * @return $this
     */
    public function setOutputType($outputType)
    {
        $this->requestParameters['OutputType'] = $outputType;
        $this->queryParameters['OutputType'] = $outputType;

        return $this;
    }

    /**
     * @param string $mediaIds
     *
     * @return $this
     */
    public function setMediaIds($mediaIds)
    {
        $this->requestParameters['MediaIds'] = $mediaIds;
        $this->queryParameters['MediaIds'] = $mediaIds;

        return $this;
    }

    /**
     * @param string $resourceRealOwnerId
     *
     * @return $this
     */
    public function setResourceRealOwnerId($resourceRealOwnerId)
    {
        $this->requestParameters['ResourceRealOwnerId'] = $resourceRealOwnerId;
        $this->queryParameters['ResourceRealOwnerId'] = $resourceRealOwnerId;

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
     * @param string $authTimeout
     *
     * @return $this
     */
    public function setAuthTimeout($authTimeout)
    {
        $this->requestParameters['AuthTimeout'] = $authTimeout;
        $this->queryParameters['AuthTimeout'] = $authTimeout;

        return $this;
    }
}

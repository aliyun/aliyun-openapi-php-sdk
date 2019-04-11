<?php

namespace vod\Request\V20170321;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetVideoInfos
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getAdditionType()
 * @method string getOwnerId()
 * @method string getVideoIds()
 */
class GetVideoInfosRequest extends \RpcAcsRequest
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
            'GetVideoInfos',
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
     * @param string $additionType
     *
     * @return $this
     */
    public function setAdditionType($additionType)
    {
        $this->requestParameters['AdditionType'] = $additionType;
        $this->queryParameters['AdditionType'] = $additionType;

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
     * @param string $videoIds
     *
     * @return $this
     */
    public function setVideoIds($videoIds)
    {
        $this->requestParameters['VideoIds'] = $videoIds;
        $this->queryParameters['VideoIds'] = $videoIds;

        return $this;
    }
}

<?php

namespace vod\Request\V20170321;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SubmitDynamicImageJob
 *
 * @method string getResourceOwnerId()
 * @method string getDynamicImageTemplateId()
 * @method string getResourceOwnerAccount()
 * @method string getVideoId()
 * @method string getOverrideParams()
 * @method string getOwnerId()
 */
class SubmitDynamicImageJobRequest extends \RpcAcsRequest
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
            'SubmitDynamicImageJob',
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
     * @param string $dynamicImageTemplateId
     *
     * @return $this
     */
    public function setDynamicImageTemplateId($dynamicImageTemplateId)
    {
        $this->requestParameters['DynamicImageTemplateId'] = $dynamicImageTemplateId;
        $this->queryParameters['DynamicImageTemplateId'] = $dynamicImageTemplateId;

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
     * @param string $videoId
     *
     * @return $this
     */
    public function setVideoId($videoId)
    {
        $this->requestParameters['VideoId'] = $videoId;
        $this->queryParameters['VideoId'] = $videoId;

        return $this;
    }

    /**
     * @param string $overrideParams
     *
     * @return $this
     */
    public function setOverrideParams($overrideParams)
    {
        $this->requestParameters['OverrideParams'] = $overrideParams;
        $this->queryParameters['OverrideParams'] = $overrideParams;

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

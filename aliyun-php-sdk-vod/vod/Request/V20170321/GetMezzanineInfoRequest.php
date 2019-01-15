<?php

namespace vod\Request\V20170321;

/**
 * Request of GetMezzanineInfo
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getVideoId()
 * @method string getPreviewSegment()
 * @method string getOutputType()
 * @method string getAdditionType()
 * @method string getOwnerId()
 * @method string getAuthTimeout()
 */
class GetMezzanineInfoRequest extends \RpcAcsRequest
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
            'GetMezzanineInfo',
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
     * @param string $previewSegment
     *
     * @return $this
     */
    public function setPreviewSegment($previewSegment)
    {
        $this->requestParameters['PreviewSegment'] = $previewSegment;
        $this->queryParameters['PreviewSegment'] = $previewSegment;

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

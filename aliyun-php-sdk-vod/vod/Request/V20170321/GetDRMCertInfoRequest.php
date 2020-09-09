<?php

namespace vod\Request\V20170321;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetDRMCertInfo
 *
 * @method string getResourceOwnerAccount()
 * @method string getVideoId()
 * @method string getCertId()
 * @method string getOwnerId()
 */
class GetDRMCertInfoRequest extends \RpcAcsRequest
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
            'GetDRMCertInfo',
            'vod'
        );
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
     * @param string $certId
     *
     * @return $this
     */
    public function setCertId($certId)
    {
        $this->requestParameters['CertId'] = $certId;
        $this->queryParameters['CertId'] = $certId;

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

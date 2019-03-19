<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListApDetailInfo
 *
 * @method string getApAssetId()
 */
class ListApDetailInfoRequest extends \RpcAcsRequest
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
            'cloudwf',
            '2017-03-28',
            'ListApDetailInfo',
            'cloudwf'
        );
    }

    /**
     * @param string $apAssetId
     *
     * @return $this
     */
    public function setApAssetId($apAssetId)
    {
        $this->requestParameters['ApAssetId'] = $apAssetId;
        $this->queryParameters['ApAssetId'] = $apAssetId;

        return $this;
    }
}

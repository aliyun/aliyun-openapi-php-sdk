<?php

namespace Trademark\Request\V20180724;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ConvertImageToGray
 *
 * @method string getOssKey()
 */
class ConvertImageToGrayRequest extends \RpcAcsRequest
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
            'Trademark',
            '2018-07-24',
            'ConvertImageToGray',
            'trademark'
        );
    }

    /**
     * @param string $ossKey
     *
     * @return $this
     */
    public function setOssKey($ossKey)
    {
        $this->requestParameters['OssKey'] = $ossKey;
        $this->queryParameters['OssKey'] = $ossKey;

        return $this;
    }
}

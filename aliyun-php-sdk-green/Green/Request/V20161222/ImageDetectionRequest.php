<?php

namespace Green\Request\V20161222;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ImageDetection
 *
 */
class ImageDetectionRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/image/detection';

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
            'Green',
            '2016-12-22',
            'ImageDetection',
            'green'
        );
    }
}
